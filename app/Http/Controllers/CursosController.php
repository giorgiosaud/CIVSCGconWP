<?php namespace App\Http\Controllers;

use App\Curso;
use App\Http\Requests;
use App\Http\Requests\InteresadoEnCursoRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use jorgelsaud\Corcel\Term;
use jorgelsaud\Corcel\TermRelationship;
use jorgelsaud\Corcel\TermTaxonomy;
use Laracasts\Flash\Flash;

class CursosController extends Controller {

    public function index()
    {
        $cursos = Curso::published()->leftJoin('postmeta', function ($join)
        {
            $join->on('posts.id', '=', 'postmeta.post_id');
        })
            ->where('meta_key', 'fecha_evento')
            ->where('meta_value', '>=', Carbon::now()->format('Ymd'))
            ->orderBy('meta_value', 'ASC')
            ->paginate(5);
        $taxs = TermTaxonomy::whereTaxonomy('tipo_de_curso')->where('count', '>', '0')->get();

        //dd($taxs);
        if ($cursos->count() > 0)
        {
            return view('Cursos.all', compact('cursos', 'taxs'));
        } else
        {
            return view('Cursos.noHay',compact('cursos', 'taxs'));

        }
    }

    public function tipos($tipos)
    {
        $taxonomiId = Term::whereSlug($tipos)->first();
        $cursosRelated = TermRelationship::whereTermTaxonomyId($taxonomiId->term_id)->get();
        $taxs = TermTaxonomy::whereTaxonomy('tipo_de_curso')->where('count', '>', '0')->get();
        $cursosId = [];
        foreach ($cursosRelated as $cursoRelated)
        {
            array_push($cursosId, $cursoRelated->object_id);
        }
        //dd($cursosId);


        $cursos = Curso::whereIn('ID', $cursosId)->paginate(5);

        return view('Cursos.all', compact('cursos', 'taxs'));

    }

    public function detalles($id)
    {
        $curso = Curso::wherePostName($id)->first();

        return view('Cursos.show', compact('curso'));
    }

    public function interesado(InteresadoEnCursoRequest $request)
    {
        Flash::success('Mensaje Enviado Correctamente Pronto nos pondremos en contacto con usted ');
        $subject=$request->input('nombreDeCurso');
	$emails=[];
	if( have_rows('emails_cursos', 'option') ):
		while( have_rows('emails_cursos') ):the_row();
			$emails[]=get_sub_field('emails_cursos');		
		endwhile;
	endif;
        Mail::send('Cursos.email', $request->all(), function ($message) use ($subject,$emails)
        {
            $message->from('cursos@civscg.com.ve', 'Cursos Colegio de Ingenieros');

            $message->to($emails, 'Cursos')->subject('Interesado en curso! '.$subject)->cc('cursos@civscg.com.ve');
        });
        $curso = Curso::wherePostName($request->input('slug'))->first();
        if($curso->meta->interesados==''){
            $curso->meta->interesados=1;
            $curso->save();
        }
        else{
            $curso->meta->interesados=$curso->meta->interesados+1;
            $curso->save();
        }


        return view('Cursos.show', compact('curso'));
    }

}

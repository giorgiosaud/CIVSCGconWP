<?php /**
 * Created by jorgelsaud.
 * User: jorgelsaud
 * Date: 3/4/15
 * Time: 12:17
 */
namespace App;


use Illuminate\Contracts\Pagination\Presenter;
use jorgelsaud\Corcel\Post;

/**
 * App\Fundacion
 *
 * @property integer $ID 
 * @property integer $post_author 
 * @property \Carbon\Carbon $post_date 
 * @property string $post_date_gmt 
 * @property string $post_content 
 * @property string $post_title 
 * @property string $post_excerpt 
 * @property string $post_status 
 * @property string $comment_status 
 * @property string $ping_status 
 * @property string $post_password 
 * @property string $post_name 
 * @property string $to_ping 
 * @property string $pinged 
 * @property \Carbon\Carbon $post_modified 
 * @property string $post_modified_gmt 
 * @property string $post_content_filtered 
 * @property integer $post_parent 
 * @property string $guid 
 * @property integer $menu_order 
 * @property string $post_type 
 * @property string $post_mime_type 
 * @property integer $comment_count 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\PostMeta[] $meta 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\TermTaxonomy[] $taxonomies 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Comment[] $comments 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $attachment 
 * @property-read \Illuminate\Database\Eloquent\Collection|\jorgelsaud\Corcel\Post[] $revision 
 * @property-read mixed $the_content 
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostDateGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostExcerpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereCommentStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePingStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostPassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereToPing($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePinged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostModified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostModifiedGmt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostContentFiltered($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostParent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereGuid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereMenuOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion wherePostMimeType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fundacion whereCommentCount($value)
 * @method static \jorgelsaud\Corcel\Post taxonomy($taxonomy)
 */
class Fundacion extends Post{
    //use Presenter;
    protected $postType = 'fundaciones';
    protected $orderedByPostDate=false;

}
<?php



namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use App\post;
use App\tag_skill;
use App\tag_background;
use Carbon\Carbon;
use App\applicant;
use App\authorization;
use App\skills;
use App\background;
use App\experience;
use App\extra_info;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\listRequest;


class postsController extends Controller
{		
		protected $infos = [
		'name_applicant'=>'',
		'email'=>'',
		'body'=>'',
		'id_applicant'=>'',
		'id_post'=>'',
	];
	
	public function index(){
		$posts= post::orderBy('created_at','desc')
		->paginate(config('posts.posts_per_page'));
		$id=Auth::user()->id;
		$authorization = authorization::select('status')->where('email',Auth::user()->email)->first();
		
		$experiences_count=experience::where('id_applicant',$id)->count();
		$backgrounds_count=background::where('id_applicant',$id)->count();
		$skills_count=skills::where('id_applicant',$id)->count();
		$infos_count=extra_info::where('id_applicant',$id)->count();
		
		return view('profile.applicant.post.index', compact('posts','authorization','experiences_count','backgrounds_count','skills_count','infos_count'));
	}
	
	public function show($id){
				
		$post = post::where('id',$id)
					->first();
					
		$applicant_count = applicant::where('id_applicant', Auth::user()->id)->where('id_post',$id)->count();
		
		$backgrounds= tag_background::where('id_post',$id)
					->get();
					
		$skills = tag_skill::where('id_post',$id)
					->get();
		
		return view('profile.applicant.post.create',compact('post','backgrounds','skills','applicant_count'));
	}
	
public function store(listRequest $request)
  {
	 
    $infos = new applicant();
	
    foreach (array_keys($this->infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
	$infos->name_applicant = Auth::user()->name;
	$infos->email = Auth::user()->email;
	$infos->id_applicant = Auth::user()->id;
	
    $infos->save();
	
    return redirect('/profile/applicant/posts')
        ->withSuccess("Your application was sent !");
  }
}
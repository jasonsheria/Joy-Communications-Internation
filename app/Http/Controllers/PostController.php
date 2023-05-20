<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\media;
use App\Models\publication;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //p
    public function activite(){
        $slider=publication::limit(3)->get();

        // $Apost = publication::get()->latest()->limit(3);
        $Apost=publication::orderBy('created_at', 'DESC')->limit(3)->get();
        $post=publication::all();
        $media=media::where("format","video")->first();
        $pub_video=publication::where('id',$media->publication_id)->first();
        return view('activite', ['posts'=>$post,'slider'=>$slider,'pubVideo'=>$pub_video,'med'=>$media, 'Apost'=>$Apost]);
    }
    public function aide()
    {
        return view('aide');
    }
    public function apropos()
    {
        return view('apropos');
    }
    public function contact()
    {
        return view('contact');
    }
    public function index()
    {
        return view('home');
    }
    public function get_more()
    {
        $posts = array();
        // construction d'un tableau des posts avec leurs images + format;
        $post = publication::all();
        foreach ($post as $pt) {
            $id=$pt->user_id;
            $user=User::where("id",$id);
            $media = media::where("publication_id", $pt->id)->first();
            $p=[
                "titre"=>$pt->titre,
                "description"=>$pt->description,
                "date"=>$pt->created_at,
                "media"=>$media->url,
                "format"=>$media->format,
                // "nom" => $user->name,
                "postNom"=>$user->profile->postNom,
                "avatar"=>$user->getImage(),
            ];
            array_push($posts,$p);
            
            
        }
        if($posts){
            return response()->json($posts,200);
        }else{
            return response()->json(" Nous n'avons pas trouvez des publications ");

        }
    }
}

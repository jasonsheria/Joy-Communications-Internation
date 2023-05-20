<?php

namespace App\Http\Controllers;

use App\Models\media;
use App\Models\Membre;
use App\Models\publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  public function dashboard(){
    return view('/dashboard');
  }
  public function members()

  {
    $data=Membre::all();
   
    return response()->json($data);
  }
   public function search(Request $request){
    $mot= strtoupper($request);
    $data=array();
    $membres = Membre::all();
    foreach($membres as $mb){
      $content= strtoupper($mb->nom);
       if((strpos($mot, $content ))!==false) {
          // $test="true";
         array_push($data,$mb);
       }
    }
  
    ;
   
    return response()->json($data);

  }
  public function ajouter(Request $request){
    $membre=New Membre();
    $membre->create([
      'nom'=> $request->nom,
      'postNom'=> $request->postNom,
      'adresse'=> $request->adresse,
      'fonction'=>"membre",
      'email'=> $request->email,
      'telephone'=> $request->telephone
    ]);
    
    $data = Membre::all();

    return response()->json($data,200);
  }

  public function supprimer(Request $request){
    
    $res=Membre::where('id', $request->id)->delete();
    $data = Membre::all();
    if($res){
      return response()->json($data, 200);

    }else{
      return response()->json("desolé, une erreur s'est produit", 400);

    }
  }
  public function get_member(Request $request){
    $res = Membre::where('id', $request->id)->first();
    return response()->json($res);

  }
  public function edit_member(Request $request){
    $res = Membre::where('id', $request->id)->first();
    $res->update([
      'nom' => $request->nom,
      'postNom' => $request->postNom,
      'adresse' => $request->adresse,
      'email' => $request->email,
      'telephone' => $request->telephone
    ]);
      $data = Membre::all();

    return response()->json($data, 200);
  }
  public function create_post(Request $request){
    // $request->validate([
    //   'image' => 'required',
    //   'documents.*' => 'required|mimes:doc,docx,xlsx,xls,pdf,zip,png,bmp,jpg|max:2048',
    // ]);
    $user = Auth::user();
    $res=publication::create([
      'titre'=>$request->titre,
      'description'=>$request->Description,
      'categorie'=>$request->type,
      'user_id'=>$user->id,
    ])->id;
    
    if ($request->image) {
      foreach($request->image as $img){
      $imageName = time() . '.' . $img->extension();
      $filePath = 'image/' . $imageName;

      $path = Storage::disk('public')->put($filePath, file_get_contents($img));
      media::create(['url' => $imageName, 'format' => "image", 'publication_id' => $res]);
      }
    }
    if ($request->video) {
      foreach ($request->video as $img) {
        $imageName = time() . '.' . $img->extension();
        $filePath = 'video/' . $imageName;

        $path = Storage::disk('public')->put($filePath, file_get_contents($img));
        media::create(['url' => $imageName, 'format' => "video", 'publication_id' => $res]);
      }
    }
    // $media=media::where('publication_id',0)->get();
    // if($media){
    //   foreach($media as $d){
    //     $d->update([
    //       'publication_id'=>$res,
    //     ]);
    //   } 
    // }
    return response()->json($request);
  }
  
}
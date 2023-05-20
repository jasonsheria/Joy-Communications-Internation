<?php

namespace App\Models;

use App\Models\User;
use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class publication extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre',
        'categorie',
        'user_id',
        'description'
    ];
    public function user(){

        return $this->belongsTo("App\Models\User");
    }
    public function media(){

        return $this->hasMany("App\Models\Media");

    }
    public function getMedia(){
        
        $media=media::Where('publication_id',$this->id)->first();
        if($media){
            return "image/".$media->url;
        }else{
           
              return "banniere/info.jpg";
            
        }
            
    }
    public function getVideo(){
        $media = media::Where('publication_id', $this->id)->first();
        if ($media) {
            return $media->url;
        } else {
            
                return "video/";
            
        }

    }
        
                

           
        // }
    
}

<?php

namespace App\Models;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class media extends Model
{
    use HasFactory;
    protected $fillable=[
          'url',
          'format',
          'publication_id'
    ];
    public function publication(){
        return $this->belongsTo("App\Models\Publication");
    }
}

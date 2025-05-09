<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    
       /** @use HasFactory<\Database\Factories\UserFactory> */
       use HasFactory;

     protected $table = 'buku';

       protected $fillable = [
           'judul',
           'penerbit',
           'tahun',
           'penulis',
           'cover',
           'id_penerbit',
       ];

       public function penerbit(): BelongsTo
       {
           return $this->belongsTo(Penerbit::class,'id_penerbit','id');
       }
}

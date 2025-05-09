<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Penerbit extends Model
{
       /** @use HasFactory<\Database\Factories\UserFactory> */
       use HasFactory;

     protected $table = 'penerbit';

       protected $fillable = [
           'nama_penerbit',
           'alamat',
       ];

       public function buku(): HasMany
       {
           return $this->hasMany(Buku::class);
       }
}

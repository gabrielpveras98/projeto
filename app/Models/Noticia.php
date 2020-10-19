<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'subtitulo',
        'conteudo',
        'user_id'
    ];
}

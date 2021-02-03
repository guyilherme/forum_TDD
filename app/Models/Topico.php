<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Resposta;

class Topico extends Model
{
    use HasFactory;

    public $table = "topicos";

    protected $fillable = [
        'id',
        'titulo',
        'corpo'
    ];

    public function respostas()
    {
        return $this->hasMany(Resposta::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

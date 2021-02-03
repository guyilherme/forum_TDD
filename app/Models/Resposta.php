<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Topico;

class Resposta extends Model
{
    use HasFactory;

    public $table = "respostas";

    protected $fillable = [
        'id',
        'corpo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topico()
    {
        return $this->belongsTo(Topico::class);
    }
}

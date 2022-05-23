<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable = ['id','descricao', 'tipodocumento_nome'];

    public function tipodocumento(){
        return $this->belongsTo(tipodocumento::class);

    }
}

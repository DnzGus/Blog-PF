<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;

    protected $table = 'postagens';

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class);
    }
}

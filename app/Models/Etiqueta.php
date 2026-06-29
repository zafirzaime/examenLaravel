<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    protected $table = 'etiquetas';
    protected $fillable = ['nombre'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_etiqueta');
    }
}
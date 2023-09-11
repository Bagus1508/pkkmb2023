<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    use HasFactory;
    use SoftDeletes;


    public $table = 'tagline';


    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];


    protected $fillable = [
        'news_id',
        'tagline',
        'updated_at',
        'created_at',
        'deleted_at',
    ];





    // one to one

    // one to many
    public function news()
    {
        return $this->belongsTo('App\Models\News', 'news_id', 'id');
    }
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'cms_articles';

    protected $fillable = [
        'name',
        'url',
        'enabled',
        'user_id',
        'category_id',
        'content'
    ];
}

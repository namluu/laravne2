<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'cms_categories';

    protected $fillable = [
        'name',
        'url',
        'enabled',
    ];
}

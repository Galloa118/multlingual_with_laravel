<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTranslations extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'content'];
}

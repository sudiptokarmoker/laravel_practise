<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostModel;

class CommentsModel extends Model
{
    use HasFactory;

    protected $table = "comments_models";

    public function post()
    {
        return $this->belongsTo(PostModel::class);
    }
}

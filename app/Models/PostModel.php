<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CommentsModel;

class PostModel extends Model
{
    use HasFactory;

    protected $table = "post_models";

    public function comments(){
        return $this->hasMany(CommentsModel::class);
    }
}

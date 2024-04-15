<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;



class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use Commentable;



   protected $fillable = [
    'title',
    'slug',
    'description',
    'image_path',
    'user_id',
    ];
        // Post model
        public function user(){ //propertie
            return $this->belongsTo(User::class);

        }
        public function sluggable(): array
        {
            return[
                    'slug' => [
                        'source' => 'title'
                    ]
            ];
        }
}

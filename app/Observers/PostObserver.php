<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
    * Handle the Post "deleting" event.
    */
    public function deleting(Post $post) : void
    {
        $post->comments()->delete();
    }
}

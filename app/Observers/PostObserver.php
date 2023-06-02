<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
    * Handle the Post "deleting" event.
    *
    * !!! Note Used .. Because of deleting from livewire .. This Observer method could use when deleting from controllers 
    */
    public function deleting(Post $post) : void
    {
        $post->comments()->delete();
    }
}

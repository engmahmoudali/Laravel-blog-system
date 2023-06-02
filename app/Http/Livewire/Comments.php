<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comments extends Component
{

    public $postId;

    public $post;

    public $input;

    public function render()
    {
        $this->post = Post::where('uuid', $this->postId)->first();
        return view('livewire.comments');
    }

    public function store()
    {
        if (!Auth::check()) {
            session()->flash('error', 'You must login before');
            return;
        }
        Comment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $this->post->id,
            'comment' => $this->input
        ]);
        $this->input = null;
    }
}

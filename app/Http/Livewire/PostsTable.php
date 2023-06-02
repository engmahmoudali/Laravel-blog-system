<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostsTable extends Component
{
    public $posts;

    public $post;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts-table');
    }

    public function selected($post)
    {
        $this->post = $post;
    }

    public function delete()
    {
        Post::where('uuid',$this->post)->delete();
        session()->flash('danger', 'The post has been deleted');
    }
}

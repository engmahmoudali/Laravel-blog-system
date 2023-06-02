<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $post;

    public function render()
    {
        return view('livewire.posts-table', ['posts' => Post::latest()->paginate(10)]);
    }

    public function selected($post)
    {
        $this->post = $post;
    }

    public function delete()
    {
        $post = Post::where('uuid',$this->post)->first();
        deleteImage($post->image);
        $post->comments()->delete();
        $post->delete();
        $this->dispatchBrowserEvent('danger', ['title' => 'The post has been deleted']);
    }
}

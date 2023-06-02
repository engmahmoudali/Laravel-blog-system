<div>
    <x-show.page :title="'Comments'">
        <div class="row">
            <div class="col-sm-12">
                @foreach ($post->comments()->get() as $comment)
                <hr>
                    <div class="form-group mt-3">
                        <label for="comment" class="text-info">{{ $comment->user->name }} :</label>
                        <h3 class="mt-2">{{ $comment->comment }}</h3> <small>{{ $comment->created_at }}</small>
                    </div>
                <hr>
                @endforeach
            </div>
           @auth
           <div class="col-sm-12 mt-6">
            <div class="form-group mt-2">
                <label for="comment">Write a comment</label>
                <input type="text" class="form-control"  wire:model="input"  wire:keydown.enter="store()" placeholder="Write a comment">
            </div>
            <button class="btn btn-info mt-2" style="float: right" wire:click.prevent="store()">Comment</button>
        </div>
           @endauth
        </div>
    </x-show.page>
</div>

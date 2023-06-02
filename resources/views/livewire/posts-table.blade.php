<div>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Created At</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->date }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <a href="{{ route('post', $post->slug) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="selected('{{ $post->uuid }}')"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting Post</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this post ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-bs-dismiss="modal">Yes</button>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
   
      <script>
        window.addEventListener('danger',e => {
          Swal.fire({
          icon: 'error',
          title: 'Deleted',
          text: e.detail.title,
          });
        });
        
      </script>
  
  @endpush
</div>
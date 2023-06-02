<div class="container">
    <h1 class="h3 mb-2 text-gray-800">{{ $title ?? '' }}</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">{{ $title ?? '' }}</h6>
        </div>
        <div class="card-body mt-2">
            <form action="{{ $url ?? '' }}" method="{{ $method ?? 'POST' }}" enctype="multipart/form-data">
                {{-- {{ method('PUT') }} --}}
                
                @csrf

                {!! $slot !!}

            </form>
        </div>
    </div>
</div>
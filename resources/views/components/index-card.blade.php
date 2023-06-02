<div>
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800">{{ $title ?? " "}}</h1>

        <div class="card shadow mb-4">
            {!! $slot !!}
        </div>
    </div>
</div>
<x-index-card :title="$title ?? ''" >
    <x-index-card-header :title="$title ?? ''" >
        @if($addRoute ?? '')
        <a href="{{ $addRoute ?? 'javascript:void(0)' }}" class="btn btn-primary"><i class="fa fa-plus"></i> {{ $addTitle ?? 'Add' }}</a>
        @endif
    </x-index-card-header>
    <x-datatable >
        {!! $slot !!}
    </x-datatable>
</x-index-card>
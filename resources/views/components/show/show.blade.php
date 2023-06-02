<div class="container-fluid">
    <div class="card {{$class ?? ''}}" @if(!empty($id)) id="{{$id}}" @endif>
        <div class="card-body">
            <h5 class="card-title" style="font-size:20px; font-weight:900;">{{$title ?? ""}}</h5>
            
            {{$slot}}
        </div>
        <!-- /.box-body -->
    </div>
</div>

<div class="card m-5 bg-gray-50" style="width: 35rem; border-radius: 30px; {{$style1 ?? ''}}">
    <div class="card-body {{$class ?? ''}}" style="{{$style2 ?? ''}}" @if(!empty($id)) id="{{$id}}" @endif>
        <h5 class="card-title" style="font-size:30px; font-weight:900; text-align: center; {{$h_style ?? " "}}">{{$title ?? " "}}</h5>
        {{$slot}}
    </div>
</div>

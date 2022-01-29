<div class="row mb-3">
    <label for="{{$id}}" class="col-sm-2 col-form-label">{{$title}}</label>
    <div class="col-sm-5">
        <input class="form-control" type="{{$type}}" name="{{$id}}"
            id="{{$id}}" {{$required ?? "" }}>
    </div>
    <div class="col-sm-5">
        @if ($img !== null)
            <img src="{{$img}}" alt="" width="250px" class="img-fluid">
        @endif
    </div>
</div>

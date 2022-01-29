<div class="row mb-3">
    <label for="{{$id}}" class="col-sm-2 col-form-label">{{$title}}</label>
    <div class="col-sm-10">
        <textarea class="form-control" type="{{$type}}" name="{{$name}}"
            id="{{$id}}">{{getHomeOption($option ?? $name)}}</textarea>
    </div>
</div>

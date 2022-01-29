<div class="row mb-3">
    <label for="{{$id}}" class="col-sm-2 col-form-label">{{$title}}</label>
    <div class="col-sm-10">
        <input class="form-control" type="{{$type}}" name="{{$name ?? $id}}"
            id="{{$id}}" value="{{getSiteOption($option ?? $id)}}">
    </div>
</div>

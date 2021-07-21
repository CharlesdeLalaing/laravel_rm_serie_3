@extends('back-office.layout.base')
@section('content')
    <div class="container">
        <form action="/service/administration/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Icon service</label>
                <input type="text"  value="{{$edit->icon_service}}" name="icon_service" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Title card</label>
                <input type="text"  value="{{$edit->title_card}}" name="title_card" class="form-control" id="exampleInputPassword1">
            </div>title_card
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Card description</label>
                <input type="text"  value="{{$edit->description_card}}" name="description_card" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

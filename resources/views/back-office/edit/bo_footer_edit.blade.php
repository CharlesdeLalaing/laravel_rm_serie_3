@extends('back-office.layout.base')
@section('content')
    <div class="container">
        <form action="/footer/administration/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Title</label>
                <input type="text"  value="{{$edit->title}}" name="title" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Text</label>
                <input type="text"  value="{{$edit->text}}" name="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsectio

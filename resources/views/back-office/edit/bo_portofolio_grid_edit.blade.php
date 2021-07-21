@extends('back-office.layout.base')
@section('content')
    <div class="container">
        <form action="/portofolio-grid/administration/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Class name</label>
                <input type="text"  value="{{$edit->class_name}}" name="class_name" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Data category</label>
                <input type="text"  value="{{$edit->data_category}}" name="data_category" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Data target</label>
                <input type="text"  value="{{$edit->data_target}}" name="data_target" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Display</label>
                <input type="text"  value="{{$edit->display}}" name="display" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text"  value="{{$edit->name}}" name="name" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

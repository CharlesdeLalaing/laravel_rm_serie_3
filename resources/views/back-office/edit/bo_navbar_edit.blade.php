@extends('back-office.layout.base')
@section('content')
    <div class="container">
        <form action="/navbar/administration/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ref</label>
                <input type="text"  value="{{$edit->ref}}" name="ref" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Logo</label>
                <input type="text"  value="{{$edit->logo}}" name="logo" class="form-control" id="exampleInputPassword1">
            </div>logo
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text"  value="{{$edit->name}}" name="name" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

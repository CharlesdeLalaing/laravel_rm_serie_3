@extends('back-office.layout.base')
@section('content')
    <div class="container">
        <form action="/about/administration/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description About</label>
                <input type="text"  value="{{$edit->description_about}}" name="description_about" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

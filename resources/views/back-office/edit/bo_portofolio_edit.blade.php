@extends('back-office.layout.base')
@section('content')
    <div class="container">
        <form action="/portofolio/administration/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Data filter</label>
                <input type="text"  value="{{$edit->data_filter}}" name="data_filter" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Filter</label>
                <input type="text"  value="{{$edit->filter}}" name="filter" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@extends('back-office.layout.base')
@section('content')
    <section>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Footer section</h5>
                    <p class="card-text">Title: {{$show->title}}</p>
                    <p class="card-text">Text: {{$show->text}}</p>
                    <a class="btn btn-success text-white mb-3" href="/footer/administration/{{$show->id}}/edit">EDIT</a>
                    <form action="/footer/administration/{{$show->id}}/destroy" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-white" type="submit">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('back-office.layout.base')
@section('content')
    <section>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Top Header section</h5>
                    <p class="card-text">SM name: {{$show->name}}</p>
                    <p class="card-text">Logo: {{$show->logo}}</p>
                    <a class="btn btn-success text-white mb-3" href="/top/administration/{{$show->id}}/edit">EDIT</a>
                    <form action="/top/administration/{{$show->id}}/destroy" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-white" type="submit">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
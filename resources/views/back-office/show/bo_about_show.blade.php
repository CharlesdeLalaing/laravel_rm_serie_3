@extends('back-office.layout.base')
@section('content')
    <section>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">About section</h5>
                    <p class="card-text">Description: {{$show->description_about}}</p>
                    <a class="btn btn-success text-white mb-3" href="/animals/{{$show->id}}/edit">EDIT</a>
                    <form action="/animals/{{$show->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-white" type="submit">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
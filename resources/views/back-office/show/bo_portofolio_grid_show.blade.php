@extends('back-office.layout.base')
@section('content')
    <section>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Portofolio grid section</h5>
                    <p class="card-text">Class name: {{$show->class_name}}</p>
                    <p class="card-text">Data category: {{$show->data_category}}</p>
                    <p class="card-text">Data target: {{$show->data_target}}</p>
                    <p class="card-text">Display: {{$show->display}}</p>
                    <p class="card-text">Name: {{$show->name}}</p>
                    <a class="btn btn-success text-white mb-3" href="/portofolio-grid/administration/{{$show->id}}/edit">EDIT</a>
                    <form action="/portofolio-grid/administration/{{$show->id}}/destroy" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-white" type="submit">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
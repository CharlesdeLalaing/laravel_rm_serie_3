<div class="container" id="portofolio">
    <h1 style="text-decoration: underline">Portofolio</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data filter</th>
                <th scope="col">Filter</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bo_portofolios as $bo_portofolio)
                <tr>
                    <td>{{$bo_portofolio->id}}</td>
                    <td>{{$bo_portofolio->data_filter}}</td>
                    <td>{{$bo_portofolio->filter}}</td>
                    <td><a href="/portofolio/administration/{{$bo_portofolio->id}}/show"><button>SHOW</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>    
</div>
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
            @forelse ($bo_portofolios as $bo_portofolio)
                <tr>
                    <td>{{ $bo_portofolio->id }}</td>
                    <td>{{ $bo_portofolio->data_filter }}</td>
                    <td>{{ $bo_portofolio->filter }}</td>
                    <td><a href="/portofolio/administration/{{ $bo_portofolio->id }}/show"><button>SHOW</button></a>
                    </td>
                </tr>
            @empty
                <p class="bg-danger text-white p-1">No Data</p>
            @endforelse
        </tbody>
    </table>
</div>

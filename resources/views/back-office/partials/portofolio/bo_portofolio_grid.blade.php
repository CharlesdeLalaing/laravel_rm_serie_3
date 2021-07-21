<div class="container" id="portofolio">
    <h1 style="text-decoration: underline">Portofolio</h1>
    <a href="/portofolio-grid/administration/create"><button>Create new element</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Class name</th>
                <th scope="col">Data category</th>
                <th scope="col">Data target</th>
                <th scope="col">Display</th>
                <th scope="col">Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bo_portofolio_grids as $bo_portofolio_grid)
                <tr>
                    <td>{{ $bo_portofolio_grid->id }}</td>
                    <td>{{ $bo_portofolio_grid->class_name }}</td>
                    <td>{{ $bo_portofolio_grid->data_category }}</td>
                    <td>{{ $bo_portofolio_grid->data_target }}</td>
                    <td>{{ $bo_portofolio_grid->display }}</td>
                    <td>{{ $bo_portofolio_grid->name }}</td>
                    <td><a
                            href="/portofolio-grid/administration/{{ $bo_portofolio_grid->id }}/show"><button>SHOW</button></a>
                    </td>
                </tr>
            @empty
                <p class="bg-danger text-white p-1">No Data</p>
            @endforelse
        </tbody>
    </table>
</div>

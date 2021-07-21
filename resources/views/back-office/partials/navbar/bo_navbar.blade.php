<div class="container" id="top">
    <h1 style="text-decoration: underline">Navbar</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ref</th>
                <th scope="col">Logo</th>
                <th scope="col">Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bo_navbars as $bo_navbar)
                <tr>
                    <td>{{ $bo_navbar->id }}</td>
                    <td>{{ $bo_navbar->ref }}</td>
                    <td>{{ $bo_navbar->logo }}</td>
                    <td>{{ $bo_navbar->name }}</td>
                    <td><a href="/navbar/administration/{{ $bo_navbar->id }}/show"><button>SHOW</button></a></td>
                </tr>
            @empty
                <p class="bg-danger text-white p-1">No Data</p>
            @endforelse
        </tbody>
    </table>
</div>

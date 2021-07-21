<div class="container" id="about">
    <h1 style="text-decoration: underline">About</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bo_abouts as $bo_about)
                <tr>
                    <td>{{ $bo_about->id }}</td>
                    <td>{{ $bo_about->description_about }}</td>
                    <td><a href="/about/administration/{{ $bo_about->id }}/show"><button>SHOW</button></a></td>
                </tr>
            @empty
                <p class="bg-danger text-white p-1">No Data</p>
            @endforelse
        </tbody>
    </table>
</div>

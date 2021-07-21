<div class="container" id="top">
    <h1 style="text-decoration: underline">Home - Top - Header</h1>
    <a href="/top/administration/create"><button>Create new element</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Logo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bo_headerLogos as $bo_headerLogo)
                <tr>
                    <td>{{ $bo_headerLogo->id }}</td>
                    <td>{{ $bo_headerLogo->name }}</td>
                    <td>{{ $bo_headerLogo->logo }}</td>
                    <td><a href="/top/administration/{{ $bo_headerLogo->id }}/show"><button>SHOW</button></a></td>
                </tr>
            @empty
                <p class="bg-danger text-white p-1">No Data</p>
            @endforelse
        </tbody>
    </table>
</div>

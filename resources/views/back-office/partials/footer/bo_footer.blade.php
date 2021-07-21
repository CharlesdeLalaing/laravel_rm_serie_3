<div class="container" id="contact">
    <h1 style="text-decoration: underline">Footer</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bo_footers as $bo_footer)
                <tr>
                    <td>{{ $bo_footer->id }}</td>
                    <td>{{ $bo_footer->title }}</td>
                    <td>{{ $bo_footer->text }}</td>
                    <td><a href="/footer/administration/{{ $bo_footer->id }}/show"><button>SHOW</button></a></td>
                </tr>
            @empty
                <p class="bg-danger text-white p-1">No Data</p>
            @endforelse
        </tbody>
    </table>
</div>

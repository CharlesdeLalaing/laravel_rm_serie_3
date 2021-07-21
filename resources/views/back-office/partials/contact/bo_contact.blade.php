<div class="container" id="contact">
    <h1 style="text-decoration: underline">Contact</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bo_contacts as $bo_contact)
                <tr>
                    <td>{{ $bo_contact->id }}</td>
                    <td>{{ $bo_contact->name }}</td>
                    <td>{{ $bo_contact->email }}</td>
                    <td>{{ $bo_contact->subject }}</td>
                    <td>{{ $bo_contact->message }}</td>
                    <td><a href="/contact/administration/{{ $bo_contact->id }}/show"><button>SHOW</button></a></td>
                </tr>
            @empty
                <p class="bg-danger text-white p-1">No Data</p>
            @endforelse
        </tbody>
    </table>
</div>

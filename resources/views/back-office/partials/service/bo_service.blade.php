<div class="container" id="services">
    <h1 style="text-decoration: underline">Service</h1>
    <a href="/service/administration/create"><button>Create new element</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon service</th>
                <th scope="col">Title card</th>
                <th scope="col">Description card</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bo_services as $bo_service)
                <tr>
                    <td>{{$bo_service->id}}</td>
                    <td>{{$bo_service->icon_service}}</td>
                    <td>{{$bo_service->title_card}}</td>
                    <td>{{$bo_service->description_card}}</td>
                    <td><a href="/service/administration/{{$bo_service->id}}/show"><button>SHOW</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>    
</div>
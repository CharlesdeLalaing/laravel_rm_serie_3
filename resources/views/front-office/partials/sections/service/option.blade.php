<div class="row">
    @foreach ($services as $service)
        <div class="col-md-4 text-center">
            <div class="service-item">
                <i class="service-icon fa {{ $service->icon_service }} fa-3x"></i>
                <h3>{{ $service->title_card }}</h3>
                <p>{{ $service->description_card }}</p>
            </div>
        </div>
    @endforeach
</div>

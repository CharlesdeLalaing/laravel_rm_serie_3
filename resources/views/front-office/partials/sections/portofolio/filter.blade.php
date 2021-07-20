<div class="row push50">
    <div class="col-md-4 col-md-offset-4 text-center">
        <h2>Our Work</h2>
        <h3>
            @foreach ($portofolios as $portofolio)
                <span class="filter label label-default"
                    data-filter="{{ $portofolio->data_filter }}">{{ $portofolio->filter }}</span>
            @endforeach
        </h3>
        <hr>
    </div>
</div>

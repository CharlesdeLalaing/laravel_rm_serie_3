<ul id="Grid" class="gcontainer">
    @foreach ($portofolio_grids as $portofolio_grid)
        <li class="col-md-4 col-sm-4 col-xs-12 mix {{$portofolio_grid->class_name}}" data-cat="{{$portofolio_grid->data_category}}">
            <a data-toggle="modal" data-target="#{{$portofolio_grid->data_target}}" class="mix-cover">
                <img class="{{$portofolio_grid->display}}" src="{{ asset('img/portrait1-sm.jpg') }}" alt="placeholder">
                <span class="overlay"><span class="valign"></span><span class="title">{{$portofolio_grid->name}}</span></span>
            </a>
        </li>
    @endforeach
</ul>

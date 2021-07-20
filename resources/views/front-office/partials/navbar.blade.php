<div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">Slidefolio</a>
            </div>
            <div class="collapse navbar-collapse" id="mobilemenu">

                <ul class="nav navbar-nav navbar-right text-center">
                    @foreach ($navbars as $navbar)
                        <li><a href="{{$navbar->ref}}"><i class="{{$navbar->logo}}"></i> {{$navbar->name}}</a></li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- /Navigation -->
</div>
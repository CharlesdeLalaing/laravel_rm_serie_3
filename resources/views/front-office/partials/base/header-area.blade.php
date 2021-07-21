<!-- Header Area -->
<div id="top" class="header">
    <div class="vert-text">
        <img class="img-rounded" alt="Company Logo" src="{{ asset('img/logo.jpg') }}" />
        <h2><em>Company Name</em></h2>
        <ul class="list-inline">
            @foreach ($headerLogos as $headerLogo)
                <li><i class="{{$headerLogo->logo}} fa-3x"></i></li>
            @endforeach
        </ul>
        <br>
        <a href="#about" class="btn btn-top">Learn More</a>
    </div>
</div>
<!-- /Header Area -->

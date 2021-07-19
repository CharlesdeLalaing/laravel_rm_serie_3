<!-- Portfolio -->
<div id="portfolio" class="portfolio">
    <div class="container">

        @include('front-office.partials.sections.portofolio.filter')

        <div class="row">

            <div class="gallery">

                @include('front-office.partials.sections.portofolio.grid')


                @include('front-office.partials.sections.portofolio.modal')
                
            </div>
        </div>
    </div>
</div>
<!-- /Portfolio -->
<section id="slider" class="card">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2>@lang('slider.who-we-are-title')</h2>
                <p class="content">@lang('slider.who-we-are-content')</p>
                </div>
                <div class="carousel-item">
                    <p>@lang('slider.become-a-partner-content')</p>
                <a href="/partner" class="slider-button btn btn-primary">@lang('slider.become-a-partner-button')</a>
                </div>
                <div class="carousel-item">
                    <p>@lang('slider.collaborate-content')</p>
                <a href="/collaborate" class="slider-button btn btn-primary">@lang('slider.collaborate-button')</a>
                </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
    </div>
</section>
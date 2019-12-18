<section id="slider" class="card">
    <div class="title card-header">
        <h3>Novedades</h3>
    </div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            @foreach($novelties as $index=>$novelty)
            
        
                <div class="carousel-item @if($index==0)active @endif">
                    {{$novelty->getLocalTitle()}}   
                @if($novelty->image)
                <img src="{{url($novelty->image->url)}}" class="d-block w-100" alt="placeholder">
                @endif
                <p class="content">{{$novelty->getLocalContent()}}</p>  
                </div>

            @endforeach
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
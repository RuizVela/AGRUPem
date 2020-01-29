@extends('layouts.app')
@section('content')
<body>        
    <div id="socio_title"> 

            <h1 id="socio_h1">@lang('socio.socio')</h1>

    </div>
    <div class="socio_container">
    <div id="ventajas _container">
        <h1 id="ventajas_h1">
            
        @lang('socio.socio_ficha')
        <a href="/pdf/fitxa soci.pdf">@lang('socio.socio_link')</a>
    
    </h1>

        <h1>@lang('socio.socio_ventajas')</h1>
       
        <div class="colabora_text">
           @lang('socio.socio_text2')
        </div>
    </div>

        <h1 id="ec">@lang('socio.lista_servicio')</h1>
        <h1 id="ec">@lang('socio.precios')</h1>
        <div class="colabora_text">
            @lang('socio.precios_text')
        </div>
</div>
    @endsection
    
</body>
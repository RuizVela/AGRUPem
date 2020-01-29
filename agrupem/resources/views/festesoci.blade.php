@extends('layouts.app')
@section('content')
<section class="container-fluid row section justify-content-center">
    <div class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-8">
        <header id="socio_title" class="text-center shadow-lg">
            <h1 id="socio_h1">@lang('socio.socio')</h1>
        </header>
        <article class="socio_container">
            <h2 id="ventajas_h1">
                @lang('socio.socio_ficha')
                <a href="/pdf/fitxa soci.pdf">@lang('socio.socio_link')</a>
            </h2>
        </article>
        <article id="ventajas _container">
            <header class="shadow-lg">
                <h1>@lang('socio.socio_ventajas')</h1>
            </header>
            <div class="colabora_text">
            @lang('socio.socio_text2')
            </div>
        </article>
        <article>
            <header>
                <div class="shadow-lg">
                    <h1 id="ec">@lang('socio.lista_servicio')</h1>
                </div>
                <h2 id="ec">@lang('socio.precios')</h2>
            </header>
            <div class="colabora_text">
                @lang('socio.precios_text')
            </div>
        </article>
    </div>
</section>

@endsection
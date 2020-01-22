

@extends('layouts.app')

@section('content')

<section  class="container-fluid row section justify-content-center"">
    
        <div class="shadow-lg p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-8"> 
            <div class="text_container text-center shadow-lg">
                <h1 class="">@lang('colabora.aportaciones')</h1>
            </div>
            <div class="text_container shadow-lg">
                <p>@lang('colabora.aportaciones_text')</p>
            </div>

            <div class="text_container text-center shadow-lg">
                <h1 class="">@lang('colabora.voluntariados')</h1>
            </div>
            <div class="text_container shadow-lg">
                <p>@lang('colabora.voluntariados_text')</p>
            </div>

            <div class="text_container text-center shadow-lg">
                <h1 class="">@lang('colabora.entidades_colaboradoras')</h1>
            </div>
            <div class="text_container shadow-lg">
                <p>@lang('colabora.entidades_colaboradoras_text')</p>
            </div>
        </div>

</section>


@endsection


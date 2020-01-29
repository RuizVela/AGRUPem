@extends('layouts.app')

@section('content')

<section  class="container-fluid row section justify-content-center">
    
        <div class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-8"> 
            <div class="text_container text-center shadow-lg">
                <h3>@lang('colabora.aportaciones')</h3>
            </div>
            <div class="text_container shadow-lg">
                <p>@lang('colabora.aportaciones_text')</p>
            </div>

            <div class="text_container text-center shadow-lg">
                <h3>@lang('colabora.voluntariados')</h3>
            </div>
            <div class="text_container shadow-lg">
                <p>@lang('colabora.voluntariados_text')</p>
            </div>

            <div class="text_container text-center shadow-lg">
                <h3>@lang('colabora.entidades_colaboradoras')</h3>
            </div>
            <div class="text_container shadow-lg">
                <p>@lang('colabora.entidades_colaboradoras_text')</p>
            </div>
        </div>

</section>


@endsection


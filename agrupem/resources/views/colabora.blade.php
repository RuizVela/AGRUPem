@extends('layouts.app')
@section('content')
<body>        
    <div id="colabora_title">

            <h1>@lang('colabora.colabora')</h1>

    </div>
    <div class="colabora_container">
    <div id="aportaciones_container">
        <h1>@lang('colabora.aportaciones')</h1>
        <div class="colabora_text">
           @lang('colabora.aportaciones_text')
        </div>
    </div>

        <h1>@lang('colabora.voluntariados')</h1>
        <div class="colabora_text">
            @lang('colabora.voluntariados_text')
        </div>
        <h1 id="ec">@lang('colabora.entidades_colaboradoras')</h1>
        <div class="colabora_text">
            @lang('colabora.entidades_colaboradoras_text')
        </div>
</div>
    @endsection
    
</body>
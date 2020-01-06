@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main>
                <section id="contact_form_container" class="d-flex flex-row flex-nowrap">
                    <form action="/contact" method="post">
                    @csrf
                    <section class="flex-column p-2">
                        <div class="form-group">
                            <label for="contact_name">@lang('contact.name')</label>
                            <input id="contact_name" type="text" name="contact_name" value="{{old('contact_name')}}" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label for="contact_email">E-mail</label>
                            <input id="contact_email" type="email" name="contact_email" value="{{old('contact_email')}}" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label for="contact_message">@lang('contact.message')</label>
                            <textarea id="contact_message" name="contact_message" cols="30" rows="10" class="form-control" required>{{old('contact_message')}}</textarea>
                        </div>
                    </section>
                    <input type="submit" class="btn btn-outline-success mt-4" value="Enviar">
                    </form>
                    <section id="contact_details_container">
                        <h3>E-mail</h3>
                        <p>grupdesuport.em@gmail.com</p>
                        <h3>@lang('contact.phone')</h3>
                        <p>93 875 93 00 + ext.1065 lunes de 4 a 6 y martes de 10 a 12<br>661 713 162 (Marta)</p>
                        <h3>@lang('contact.adress')</h3>
                        <p>ALTHAIA (xarxa assistencial de Manresa)
                        <br>CENTRE HOSPITALARI DE MANRESA
                        <br>C/ Flor de Lis, 33, 08242 MANRESA</p>
                    </section>
                </section>
                <section id="map_container">
                    <div id="map" style="width:600px; height:400px; margin-left:20px"></div>
                </section>
            </main>
        </div>
    </div>
</div>

@endsection
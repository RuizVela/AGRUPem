@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <main>
  
                <section id="contact_form_information" class="flex-row d-flex align-items-center">
                    <form action="/contact" method="post">
                        @csrf
                        <section id="contactForm">
                            <div class="form-group">
                                <input class="inputColor" id="contact_name" type="text" placeholder="@lang('contact.name')" name="contact_name" value="{{old('contact_name')}}" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <input class="inputColor" id="contact_email" type="email" placeholder="Email"name="contact_email" value="{{old('contact_email')}}" class="form-control" required></input>
                            </div>
                            <div id="contact_textarea_container" class="form-group">
                                <textarea id="contact_textarea" class="inputColor" id="contact_message" placeholder="@lang('contact.message')" name="contact_message" cols="30" rows="10" class="form-control" required>{{old('contact_message')}}</textarea>
                            </div>
                            <div class="right_buttons"> 
                            <button id="contact_send_button" type="submit" class="">Enviar</button>
                            </div>
                        </section>
                    </form>
                
                    <section id="contact_information_container">
                        <ul id="contact_information">
                        <div>
                            <li>
                            <h3>@lang('layout.direccion'):</h3>
                            <p>ALTHAIA (xarxa assistencial de Manresa)</p>
                            <p>CENTRE HOSPITALARI DE MANRESA</p>
                            <p>C/ Flor de Lis, 33, 08242 MANRESA</p></li>
                        </div>
                        <div>
                            <li>
                            <h3>@lang('layout.tele'):</h3>
                            <p>93 875 93 00 + ext.1065 @lang('layout.horarioAtencion')</p>
                            <p>661 713 162 (Marta)</p></li>

                            <li>
                            <h3>@lang('layout.mail'):</h3>
                            <p>grupdesuport.em@gmail.com</p></li>
                        </div>
                        </ul>   
                    </section>
                </section> 
                <section id="contact_map">
                    <div id="map"></div>
                </section>
                  
            </main>
        </div>
    </div>
    
</div>

@endsection
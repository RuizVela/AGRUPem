@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center marginLeft">
        <div class="col-md-8">
            <main>
                <section class="col-md-6 flex-row flex-nowrap align-items-center">
                  <form action="/contact" method="post">
                    @csrf
                    <section id="contactForm" class="col-md-12 flex-column p-5 window_information">
                        <div class="form-group">
                            <input class="inputColor" id="contact_name" type="text" placeholder="@lang('contact.name')" name="contact_name" value="{{old('contact_name')}}" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <input class="inputColor" id="contact_email" type="email" placeholder="Email"name="contact_email" value="{{old('contact_email')}}" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <textarea class="inputColor" id="contact_message" placeholder="@lang('contact.message')" name="contact_message" cols="30" rows="10" class="form-control" required>{{old('contact_message')}}</textarea>
                        </div>
                        <div class="form-group button_pushUp"> 
                        <input type="submit" class="btn btn-outline-success mt-4" value="Enviar">
                        </div>
                    </section>

                  </form>
                    <section class="map_pushDown">
                        <div class="img-responsive" id="map" style="width:800px; height:400px; margin-left:20px"></div>
                    </section>
                </section> 
            </main>
        </div>
    </div>
</div>

@endsection
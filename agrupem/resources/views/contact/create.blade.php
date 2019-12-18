@extends('layouts.app')

@section('content') 


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main class="d-flex flex-row bd-highlight mb-3">
                <section class="p-2 bd-highlight", class="d-flex flex-row flex-nowrap align-items-center">
                    <form action="/contact" method="post">
                    @csrf
                    <section class="flex-column p-2">
                        <div class="form-group">
                            <label for="contact_name">@lang('contact.name')</label>
                            <input id="contact_name" type="text" name="contact_name" value="{{old('contact_name')}}" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label for="contact_email">Email</label>
                            <input id="contact_email" type="email" name="contact_email" value="{{old('contact_email')}}" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label for="contact_message">@lang('contact.message')</label>
                            <textarea id="contact_message" name="contact_message" cols="30" rows="10" class="form-control" required>{{old('contact_message')}}</textarea>
                        </div>
                    </section>
                    <input type="submit" class="btn btn-outline-success mt-4" value="Enviar">
                    </form>

                </section> 
                <section class="p-2 bd-highlight", class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <h3>Adress</h3>
                            <p>ALTHAIA (xarxa assistencial de Manresa)</p>
                            <p>CENTRE HOSPITALARI DE MANRESA</p>
                            <p>C/ Flor de Lis, 33, 08242 MANRESA</p>
                        </div>
                        <div class="p-2 bd-highlight">
                            <h3>Phone</h3>
                            <p>93 875 93 00 + ext.1065 dilluns de 4 a 6 i dimarts de 10 a 12</p>
                            <p>661 713 162 (Marta)</p>
                        </div>
                        <div class="p-2 bd-highlight">
                            <h3>Email<h3>
                            <p>grupdesuport.em@gmail.com</p>
                        </div>

                </section> 
            </main>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-bottom">
        <div class="col-md-8">
            <main>
            <section  class="align-self-stretch">
                        <div id="map" style="width:400px; height:400px; margin-left:20px"></div>
                    </section>
            </main>
        </div>
    </div>
</div>

@endsection
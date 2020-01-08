@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main>
                <section class="d-flex flex-row flex-nowrap align-items-center">
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
                    <section>
                        <div id="map" style="width:400px; height:400px; margin-left:20px"></div>
                    </section>
                </section> 
            </main>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <section class="d-flex flex-row">
            <form method="POST" action="/event" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-nowrap">
                <section class="flex-column p-2">
                <div class="form-group">
                    <label for="title_cat">Título catalan:</label> <br>
                    <input id="title_cat" required type="text" name="title_catalan"><br>
                </div>
                <div class="form-group">
                    <label for="content_cat">Contenido en catalan:</label>
                    <textarea id="content_cat" required type="textarea" name="content_catalan" cols="30" rows="10"></textarea><br>
                </div>
                </section>
                <section class="flex-column p-2">
                <div class="form-group">
                    <label for="title_spa">Título catalan:</label><br>
                    <input id="title_spa" type="text" name="title_spanish"><br>
                </div>
                <div>
                    <label for="content_spa">Contenido en castellano:</label>
                    <textarea id="content_spa" type="textarea" name="content_spanish" cols="30" rows="10"></textarea><br>
                </div>
                </section>
                </div>
                <div class="form-group">
                    <label for="strtDate">Fecha de inicio:</label>
                    <input id="strtDate" required type="date" name="startDate" value="<?php echo date("Y-m-d");?>"><br>
                </div>
                <div class="form-group">
                    <label for="strtDate">Fecha de finalización:</label>
                    <input id="edDate" required type="date" name="endDate" value="<?php echo date("Y-m-d");?>"><br>
                </div>
                <input type="file" class="btn btn-outline-primary mt-4" name="event_image"><br>
                <input type="submit" value="Crear Evento" >
            </form>
        </section>
        </div>
    </div>
</div>
@endsection
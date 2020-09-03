@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <listado-component :id_departamento="{{ $id_departamento }}" ></listado-component>
            </div>
        </div>
    </div>
@endsection
@section('breadcrumb')
    Listado de Documentos
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <recepcion-component csrf="{{ csrf_token() }}"></recepcion-component>
            </div>
        </div>
    </div>
@endsection
@section('breadcrumb')
    Recepción de Documentos
@endsection

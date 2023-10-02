@extends('kamer.layout')

@section('content')





    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Bekijk Kamer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kamer.index') }}"> Terug</a>
            </div>
        </div>
    </div>
    <br>

    <img src="{{ asset('img/kamer2.jpg') }}" alt="description of myimage" height="200" width="250px">
    <br><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SoortKamer:</strong>
                {{ $kamer->soortkamer }}
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KamerNummer:</strong>
                {{ $kamer->kamernummer }}
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KamerOpervlakte:</strong>
                {{ $kamer->kameropervlakte }}
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kamerminibar:</strong>
                {{ $kamer->kamerminibar }}
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KamerBad:</strong>
                {{ $kamer->kamerbad }}
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>AantalPersonen:</strong>
                {{ $kamer->aantalpersonen }}
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PrijsPerNacht:</strong>
                {{ $kamer->prijspernacht }}
            </div>
        </div>
    </div>
    <br>


    <a class="btn btn-primary" href="{{ route('boekingen.create',$kamer->id) }}" methhod="POST"> Reserveren</a>

@endsection

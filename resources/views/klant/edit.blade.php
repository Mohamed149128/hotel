@extends('klant.layout')

@section('content')

    <div class="row">
        <div class="col-lg12 margin-tb">
            <div class="pull-left">
                <h2> Edit klant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('klant.index')}}">Back</a>
            </div>
        </div>
    </div>


    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Broeder</strong> er is een probleem je moet alles invullen <br><br>
            <ul>
                @foreach (@$errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('klant.update',$klant->id) }}" method="POST">
    @csrf

        @method('PUT')


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Naam</strong>
                <input type="text" name="klantnaam" value="{{$klant->klantnaam}}" class="form-control" placeholder="klantnaam">

                <strong>Adres</strong>
                <input type="text" name="adres" value="{{$klant->adres}}" class="form-control" placeholder="adres">

                <strong>Creditkaartnummer</strong>
                <input type="text" name="creditkaartnummer" value="{{$klant->creditkaartnummer}}" class="form-control" placeholder="creditkaartnummer">

                <strong>aankomstdatum</strong>
                <input type="text" name="aankomstdatum" value="{{$klant->aankomstdatum}}" class="form-control" placeholder="aankomstdatum">

                <strong>vertrekdatum</strong>
                <input type="text" name="vertrekdatum" value="{{$klant->vertrekdatum}}" class="form-control" placeholder="vertrekdatum">


            </div>
            <br>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection


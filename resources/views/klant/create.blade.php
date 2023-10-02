@extends('klant.layout')

@section('content')





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



    <form action="{{route('klant.index')}}" method="POST">
    @csrf


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>klantnaam</strong>
                <input type="text" name="klantnaam" class="form-control" placeholder="klantnaam">

                <strong>adres</strong>
                <input type="text" name="adres" class="form-control" placeholder="adres">

                <strong>creditkaartnummer</strong>
                <input type="text" name="creditkaartnummer" class="form-control" placeholder="creditkaartnummer">

                <strong>aankomstdatum</strong>
                <input type="date" name="aankomstdatum" class="form-control" placeholder="aankomstdatum">

                <strong>vertrekdatum</strong>
                <input type="date" name="vertrekdatum" class="form-control" placeholder="vertrekdatum">




            </div>

            <br>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Reserveren</button>
        </div>
    </form>
@endsection

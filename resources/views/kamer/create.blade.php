@extends('kamer.layout')

@section('content')

<div class="row">
    <div class="col-lg12 margin-tb">
        <div class="pull-left">
            <h2> Nieuwe kamer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('kamer.index')}}">Terug</a>
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


    <form action="{{route('kamer.index')}}" method="POST">
    @csrf

        <php>

        </php>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>SoortKamer</strong>
                <input type="text" name="soortkamer" class="form-control" placeholder="SoortKamer">

                <strong>kamernummer</strong>
                <input type="text" name="kamernummer" class="form-control" placeholder="KamerNummer">

                <strong>kameropervlakte</strong>
                <input type="text" name="kameropervlakte" class="form-control" placeholder="kamerOpervlakte">

                <strong>kamerminibar</strong>
                <input type="text" name="kamerminibar" class="form-control" placeholder="kamerminibar">

                <strong>aantalpersonen</strong>
                <input type="text" name="aantalpersonen" class="form-control" placeholder="AantalPersonen">

                <strong>kamerbad</strong>
                <input type="text" name="kamerbad" class="form-control" placeholder="KamerBad">

                <strong>prijspernacht</strong>
                <input type="text" name="prijspernacht" class="form-control" placeholder="PrijsPerNacht">


            </div>
            <br>

        </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
    </form>
@endsection


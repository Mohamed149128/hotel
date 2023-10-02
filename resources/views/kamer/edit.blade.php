@extends('kamer.layout')

@section('content')


    <div class="row">
        <div class="col-lg12 margin-tb">
            <div class="pull-left">
                <h2> Edit kamer</h2>
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


    <form action="{{ route('kamer.update',$kamer->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Soortkamer</strong>
                <input type="text" name="soortkamer" value="{{$kamer->soortkamer}}" class="form-control" placeholder="SoortKamer">
                <strong>kamernummer</strong>
                <input type="text" name="kamernummer" value="{{$kamer->kamernummer}}" class="form-control" placeholder="KamerNummer">
                <strong>kameropervlakte</strong>
                <input type="text" name="kameropervlakte" value="{{$kamer->kameropervlakte}}" class="form-control" placeholder="kamerOpervlakte">
                <strong>kamerminibar</strong>
                <input type="text" name="kamerminibar"value="{{$kamer->kamerminibar}}" class="form-control" placeholder="kamerMinibar">
                <strong>aantalpersonen</strong>
                <input type="text" name="aantalpersonen" value="{{$kamer->aantalpersonen}}" class="form-control" placeholder="AantalPersonen">
                <strong>kamerbad</strong>
                <input type="text" name="kamerbad" value="{{$kamer->kamerbad}}" class="form-control" placeholder="KamerBad">
                <strong>prijspernacht</strong>
                <input type="text" name="prijspernacht" value="{{$kamer->prijspernacht}}" class="form-control" placeholder="PrijsPerNacht">
                <strong>kamerfoto</strong><br>
                <img src="/image/{{ $kamer->image }}" width="300px">
            </div>
            <br>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection


@extends('boekingen.layout')

@section('content')

    <div class="row">
        <div class="col-lg12 margin-tb">
            <div class="pull-left">
                <h2> Nieuwe Boeking</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('boekingen.index')}}">Back</a>
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



    <form action="{{route('boekingen.index')}}" method="POST">
        @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>aankomstdatum</strong>
                <input type="date" name="aankomstdatum" class="form-control" placeholder="aankomstdatum">

                <strong>vertrekdatum</strong>
                <input type="date" name="vertrekdatum" class="form-control" placeholder="vertrekdatum">

                <strong>KamerId</strong>
                <input type="text" name="kamerid" class="form-control" placeholder="kamerid">

                <strong>KlantId</strong>
                <input type="text" name="klantid" class="form-control" placeholder="klantid">

            </div>
            <br>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection

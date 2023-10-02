@extends('boekingen.layout')

@section('content')


    <div class="row">
        <div class="col-lg12 margin-tb">
            <div class="pull-left">
                <h2> Edit Boeking</h2>
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

    <form action="{{ route('boekingen.update',$boekingen->id) }}" method="POST">

    @csrf

    @method('PUT')

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>kamerid</strong>
                <input type="text" name="kamerid" value="{{$boekingen->kamerid}}" class="form-control" placeholder="kamerid">

                <strong>klantid</strong>
                <input type="text" name="klantid" value="{{$boekingen->klantid}}" class="form-control" placeholder="klantid">


            </div>
            <br>


        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection

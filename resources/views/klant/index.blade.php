@extends('klant.layout')

@section('content')
    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('klant.create')}}">Nieuwe klant</a>
            </div>
        </div>
    </div>


    @if ($message = Session:: get('success'))
        <div class="alert alert-success">
            <p> {{$message}}</p>
        </div>
    @endif

    <br><br>

    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Adres</th>
            <th>Creditkaartnummer</th>
            <th>aankomstdatum</th>
            <th>vertrekdatum</th>


            <th>Action</th>

        </tr>

        @foreach($klant as $klant)
            <tr>
                <td>{{$klant->id}}</td>
                <td>{{$klant->klantnaam}}</td>
                <td>{{$klant->adres}}</td>
                <td>{{$klant->creditkaartnummer}}</td>
                <td>{{$klant->aankomstdatum}}</td>
                <td>{{$klant->vertrekdatum}}</td>




            <td>
                <form action="{{ route('klant.destroy',$klant->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('klant.edit',$klant->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>

@endsection


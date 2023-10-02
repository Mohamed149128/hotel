@extends('kamer.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('kamer.create')}}">Nieuwe Kamer</a>
        </div>
    </div>
</div>



@if ($message = Session:: get('success'))
<div class="alert alert-success">
    <p> {{$message}}</p>
</div>
@endif

<br><br>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>soortkamer</th>
        <th>kamernummer</th>
        <th>kameropervlakte</th>
        <th>kamerminibar</th>
        <th>aantalpersonen</th>
        <th>kamerbad</th>
        <th>prijspernacht</th>
        <th>Action</th>

    </tr>


    @foreach($kamer as $kamer)
        <tr>
            <td>{{$kamer->id}}</td>
            <td>{{$kamer->soortkamer}}</td>
            <td>{{$kamer->kamernummer}}</td>
            <td>{{$kamer->kameropervlakte}}</td>
            <td>{{$kamer->kamerminibar}}</td>
            <td>{{$kamer->aantalpersonen}}</td>
            <td>{{$kamer->kamerbad}}</td>
            <td>${{$kamer->prijspernacht}}</td>



            <td>
                <form action="{{ route('kamer.destroy',$kamer->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('kamer.edit',$kamer->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-outline-info" href="{{ route('kamer.show',$kamer->id) }}">Bekijken</a>

                </form>
            </td>

        </tr>
    @endforeach
</table>

@endsection

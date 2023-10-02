@extends('boekingen.layout')

@section('content')

    @include('header')
    <br><br>

    @if ($message = Session:: get('success'))
        <div class="alert alert-success">
            <p> {{$message}}</p>
        </div>
    @endif



    <table class="table table-bordered">
        <tr>
            <th>kamerid</th>
            <th>klantid</th>


            <th>Action</th>


        </tr>

        @foreach($boekingen as $boekingen)
            <tr>
                <td>{{$boekingen->klantid}}</td>
                <td>{{$boekingen->kamerid}}</td>


                <td>
                    <form action="{{ route('boekingen.destroy',$boekingen->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('boekingen.edit',$boekingen->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection

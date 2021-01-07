@extends('backend.master')
@section('main')
<main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
    <h1>Patient Info</h1>

        <div class="form-group">
            <p>
            <label for="">Patient ID:</label>{{$patients->id}}
            </p>
            <p>
            <label for="">Patient Name:</label>{{$patients->user->name}}
            </p>
            <p>
            <label for="">Patient Gender:</label>{{$patients->gender}}
            </p>
            <p>
            <label for="">Patient Email:</label>{{$patients->user->email}}
            </p>
            <p>
            <label for="">Patient Age:</label>{{$patients->age}}
            </p>

            <p>
            <label for="">Phone No:</label> {{$patients->phone}}
            </p>
            <p>
            <label for="">Address:</label>{{$patients->address}}
            </p>
           

</main>
@stop



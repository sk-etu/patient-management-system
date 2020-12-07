@extends('backend.master')
@section('main')
<main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
    <h1>Prescription</h1>

        <div class="form-group">
            <p>
            <label for="">Diagnosis Name:</label>{{$diagnosis->name}}
            </p>

            <p>
            <label for="">Diagnosis type:</label> {{$diagnosis->type}}
            </p>
        </div>

</main>
@stop





@extends('backend.master')
@section('main')
<main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
    <h1>Prescription</h1>

        <div class="form-group">
            <p>
            <label for="">Medicine Name:</label>{{$medicine->name}}
            </p>

            <p>
            <label for="">Medicine type:</label> {{$medicine->generic_name}}
            </p>
        </div>

</main>
@stop





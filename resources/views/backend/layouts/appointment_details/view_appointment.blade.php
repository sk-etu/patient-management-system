@extends('backend.master')
@section('main')
<main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
    <h2>Appointment Details</h2>

        <div class="form-group">
            <p>
            <label for="">Patient ID:</label>{{$appointment->patient_id}}
            </p>

            <p>
            <label for="">Name:</label> {{$appointment->patient_name}}
            </p>
            <p>
            <label for="">Date:</label>{{$appointment->date}}
            </p>

            <p>
            <label for="">Emergency:</label> {{$appointment->emergency}}
            </p>
        </div>

</main>
@stop





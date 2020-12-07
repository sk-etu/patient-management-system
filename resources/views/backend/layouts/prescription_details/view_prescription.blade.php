@extends('backend.master')
@section('main')
<main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
    <h1>Prescription</h1>

        <div class="form-group">
            <p>
            <label for="">Patient ID:</label>{{$prescription->patient_id}}
            </p>

            <p>
            <label for="">Patient Name:</label> {{$prescription->patient_name}}
            </p>
            <p>
            <label for="">Patient Gender:</label> {{$prescription->gender}}
            </p>
            <p>
            <label for="">Date:</label>{{$prescription->date}}
            </p>
            <p>
            <label for="">Patient Weight:</label>{{$prescription->weight}}
            </p>

            <p>
            <label for="">Patient Age:</label> {{$prescription->age}}
            </p>
            <p>
            <label for="">Patient BP:</label>{{$prescription->bp}}
            </p>
<!-- relational data -->
            <p>
            <label for="">Medicine Name:</label> {{$prescription->medicinerelation->name}}
            </p>
            <p>
            <label for="">Diagnosis Name:</label> {{$prescription->diagnosisrelation->name}}
            </p>
        </div>

</main>
@stop





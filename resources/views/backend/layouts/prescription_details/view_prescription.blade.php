@extends('backend.master')
@section('main')
<main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
    <h1>Prescription</h1>

        <div class="form-group">
            <p>
            <label for="">Patient ID:</label>{{$prescription->patientrelation->id}}
            </p>
            <p>
            <label for="">Patient Name:</label>{{$prescription->patientrelation->name}}
            </p>
            <p>
            <label for="">Patient Age:</label>{{$prescription->patientrelation->age}}
            </p>
            <p>
            <label for="">Gender:</label>{{$prescription->patientrelation->gender}}
            </p>
            <p>
            <label for="">Date:</label>{{$prescription->date}}
            </p>
            <p>
            <label for="">Patient Weight:</label>{{$prescription->weight}}
            </p>
            <p>
            <label for="">Patient BP:</label>{{$prescription->bp}}
            </p>
<!-- relational data -->
            <p>
            <label for="">Diagnosis Name:</label> {{$prescription->diagnosisrelation->name}}
            </p>
            <p>
            <label for="">Additional Instructions:</label> {{$prescription->additional_instructions}}
            </p>
            <p>
            <label for="">Medicine:</label> {{$prescription->prescribe_medicinerelation->name}}
            </p>
            <p>
            <label for="">Days:</label> {{$prescription->prescribe_medicinerelation->days}}
            </p>
        </div>

</main>
@stop





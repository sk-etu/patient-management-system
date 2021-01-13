@extends('backend.master')
@section('main')
<main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
    <h1>Feedback</h1>
<br>

        <div class="form-group">
            <p>
            <label for="">Feedbcak: </label>{{$feedback->feedback}}
            </p>
        </div>

</main>
@stop





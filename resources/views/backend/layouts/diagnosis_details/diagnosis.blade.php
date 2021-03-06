@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">

                <h1>Diagnosis</h1>

                  @if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
                  @endif

                @if($errors->any())
                  @foreach($errors->all() as $er)
                    <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
                @endif

                <form action="{{route('diagnosis.store')}}" method="post">
                    @csrf
                  
                  <div class="form-group">
                            <label for="name">Enter Name</label>
                            <input name="name"  placeholder="Enter name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="type">Type</label>
                    <input  name="type"  placeholder="Enter diagnosis type" type="text" class="form-control" id="type" aria-describedby="emailHelp">
                  
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @stop
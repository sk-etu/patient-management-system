@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">

                <h1>Medicine</h1>

                @if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif


              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
              @endif

                <form action="{{route('medicine.update',$medicine->id)}}" method="post">
                @method('put')
                    @csrf
                  
                  <div class="form-group">
                            <label for="name">Enter Name</label>
                            <input value="{{$medicine->name}}" name="name"  placeholder="Enter medicine name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="generic_name">Generic Name</label>
                    <input value="{{$medicine->generic_name}}" name="generic_name"  placeholder="Enter generic type" type="text" class="form-control" id="type" aria-describedby="emailHelp">
                  
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @stop
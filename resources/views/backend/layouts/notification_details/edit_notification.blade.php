@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">

                <h1>New Notification</h1>

                @if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif


              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
              @endif

                <form action="{{route('notification.update',$notifications->id)}}" method="post">
                    @method('put')
                    @csrf
                  
                  <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{$notifications->name}}" name="name"  placeholder="Enter notification name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                      <label for="date">Select Date</label>
                      <input value="{{$notifications->date}}" type="date" name="date" value="" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="drescription">Drescription</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description">value="{{$notifications->description}}"</textarea>
                  
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @stop
@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">

                <h1>Prescribe medicine</h1>

                @if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif


                <form action="{{route('prescribe_medicine.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="p_id" value="{{request()->p_id}}">
                    <div class="form-group">
                        <label for="medicine_id">Select Medicine Name</label>
                        <select class="form-control" name="medicine_id" id="medicine_id">

                           <option value='' >None</option>
                            @foreach($medicines as $medicine)
                            <option value="{{$medicine->id}}">{{$medicine->name}}</option>
                            @endforeach
                        </select>
                    </div>

                  <div class="form-group">
                    <label for="days">Days</label>
                    <input  name="days" oninput="this.value=Math.abs(this.value)" min="1" placeholder="Enter days" type="text" class="form-control" id="days" aria-describedby="emailHelp">
                  
                  </div>
                  <div class="form-group">
                    <label for="dosages">Dosages</label>
                    <input  name="dosages"  placeholder="Enter dosages" type="text" class="form-control" id="dosages" aria-describedby="emailHelp">
                  
                  </div>

                  
                  <div class="form-group">
                        <label for="diagnosis_id">Select Test Name</label>
                        <select class="form-control" name="diagnosis_id" id="diagnosis_id">

                        <option value='' >None</option>
                            @foreach($diagnoses as $diagnosis)
                            <option value="{{$diagnosis->id}}">{{$diagnosis->name}}</option>
                            @endforeach
                        </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @stop


<!doctype html>
<html lang="en">


<br><br>

<style type="text/css">
 @media print{
            .button{
                display: none !important;
            }
        }
    </style>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Prescription</title>
   
</head>

<body>
    <div class="container" id="print" class="print">
    <style>
        .diagnosis {
            border-right: 1px solid rgba(0, 0, 0, .1);
        }

        .header {
            padding: 20px;
            background-color: skyblue;
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            margin-bottom: 15px;
        }

        .header img {
            max-height: 225px;
        }
        .footer {
            padding: 20px;
            background-color: skyblue;
            border-top: 1px solid rgba(0, 0, 0, .1);
            margin-top: 15px;
        }

        .footer h5 {
            margin: 0;
        }
    </style>
        <div class="header">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('\backend\images\dr.eva.jpg')}}" alt="">
                </div>
                <div class="col-md-6 text-right">
                    <h3>Dr. Fatema Tuz Johra Eva</h3>
                    <p>MBBS(Dhaka), D.D.V(Vienna) <br /> Skin, V.D Allergy <br /> Leprosy Specialist </p>
                    <h5>Consultant: Dept. of Skin, VD & Allergy</h5>
                    <p>Islami Bank Hospital Mirpur Dhaka <br /> BMDC Reg: NO.: A-27847 <br /> Call: 01711113107</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 offset-md-1">Name: {{$prescription->patientrelation->user->name}}</div>
            <div class="col-md-3 ">Age: {{$prescription->patientrelation->age}}</div>
            <div class="col-md-3">Date: {{$prescription->date}}</div>
            <div class="col-md-3 offset-md-1">Gender: {{$prescription->patientrelation->gender}}</div>
            <div class="col-md-3">Patient ID: {{$prescription->patientrelation->id}}</div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-4 offset-md-1 diagnosis">

             <!-- Sidebar    -->
                <h5>Chief Complaint</h5>
                <ul>
                    <pre>{{$prescription->chief_complaint}}</pre>
                </ul>


                <h5>History</h5>
                <ul>
                    <pre>{{$prescription->history}}</pre>
                </ul>


                <h5>On Examinations</h5>
                <ul>
                <p>Weight: {{$prescription->weight}}</p>
                <p>Blood pressur: {{$prescription->bp}}mm</p>
                <p>Pulse: {{$prescription->pulse}}/min</p>
                </ul>
                <h5>Investigation</h5>
                <ul>
                @foreach($prescription->prescribe_medicinerelation as $med)
       
                    <p>{{optional($med->diagnosisrelation)->name}}</p>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6  offset-md-1">
            <h5>Medicine</h5>
                <ul>
                @foreach($prescription->prescribe_medicinerelation as $med)
       
                    <p>{{optional($med->medicinerelation)->name}} <br> {{$med->dosages}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$med->days}}</p>
                @endforeach
                    
                   
                </ul>
                <h5>Instruction</h5>
                <ul>
                    <pre>{{$prescription->additional_instructions}}</pre>
                   
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p>Address: Uttara, Dhaka</p>
                </div>
                <div class="col-md-6 text-right">
                    <h5>For Serial:</h5><br>
                    <p>019992 346638, 019992 346638, 019992 346638</p>
                </div>
            </div>
        </div>
        <button style='float:right;' onClick="myFunction()" class="btnprn btn button">Print Preview</a>
    </div>

    <script type="text/javascript">
     function myFunction(){
            window.print();
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
                                               





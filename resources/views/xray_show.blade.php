@extends('master')

@section('style')
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style rel="stylesheet">

        #img_all_tooth {
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 20px;
        }

        #my_file {
            display: none;
        }

        .btn-xray {
            height: 57px;
        }

        .bg-khatar {
            background: #ff0004;
        }

        .font-m {
            font-size: 1.2em;
        }

        .font-b {
            font-size: 1.5em;
        }

        ul.list-group:after {
            clear: both;
            display: block;
            content: "";
        }

        .list-group-item {
            float: left;

        }

        .vl {
            border-left: 6px solid green;
            height: 500px;
        }

        /* CSS REQUIRED */
        .state-icon {
            left: -5px;
        }

        .list-group-item-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(88, 198, 202);
        }

        /* DEMO ONLY - REMOVES UNWANTED MARGIN */
        .well .list-group {
            margin-bottom: 0px;
        }
    </style>
@endsection



@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient X-Ray Details </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <form method="post" action="/xray">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                <div class="row" style="margin-bottom: -30px;">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        @foreach($spats as $spat)
                                        <h2 class="no-margins font-b"><label><b>Patient Name:&nbsp;</b></label>
                                            <input type="text" name="patient_name" value="<b>{{$spat->patient_name}}<b>" class="form-control" readonly>
                                        </h2>
                                        <h2 class="no-margins font-b"><label><b>Patient ID:&nbsp;</b></label>
                                            <input type="text" name="patient_id" value="<b>{{$spat->patient_id}}<b>" class="form-control" readonly>
                                        </h2>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    @foreach($patients as $patient)
                                    <td>
                                        <span class="font-m">Gender:<b>&nbsp;{{$patient->gender}}</b>&nbsp;<i class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Age:<b>&nbsp;{{$patient->age}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                    @endforeach
                                </tr>
                                @foreach($spats as $spat)
                                <tr>
                                    <td>
                                        <span class="font-m">Doctor:&nbsp;<i class="fa fa-user-md"></i><input type="text" name="doctor_name" value="<b>{{$spat->doctor_name}}</b>" readonly> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:&nbsp;<i class="fa fa-calendar"></i><b>&nbsp;{{$spat->created_at}}</b></span>
                                    </td>
                                    <td>
                                        <span class="font-m text-info">X-Ray Status: <input type="number" id="status" name="xray_status" value="<b>{{$spat->xray_status}}</b>" readonly>&nbsp;</span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{--@endforeach--}}
                </div>
                <hr class="bg-primary"/>
                <div class="row">
                    <div class="col-md-5">
                        <table class="table table-condensed table-bordered text-center">
                            @foreach($spats as $spat)
                            <tr>
                                <td><strong>Tooth Number :</strong></td>
                                <td><input type="text" name="tooth_number" value="{{$spat->tooth_number}}" readonly></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="col-md-7">
                        <img src="{{asset('img/all_tooth.jpg')}}" class="img-responsive" id="img_all_tooth"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3" style="margin-top:30px;">
                        <button class="btn btn-primary xray" id="update" onclick="changeState()" type="submit" value="Done">Done<i class="fa fa-save"></i></button>&nbsp;&nbsp;
                        <a class="btn btn-white" href="/xray/{$spat->id}/edit">Cancel</a>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/tooths.js') }}" type="javascript"></script>

    <script type="text/javascript">
        function changeState(){
            document.getElementById('status').value=true;
        }
    </script>


@endsection



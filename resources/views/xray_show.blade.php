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
                <div class="row" style="margin-bottom: -30px;">
                    @foreach($singlePatient as $spat)
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-6">
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins font-b"><label><b>Patient Name:&nbsp;</b></label>
                                            {{$spat->patient->name}}
                                        </h2>
                                        <h2 class="no-margins font-b"><label><b>Patient ID:&nbsp;</b></label>
                                           <input type="text" name="FK_id_patient" value="{{$spat->patient->id}}" class="form-control">
                                           <input type="text" name="FK_id_treatment" value="{{$spat->treatment->id}}" class="form-control">
                                           <input type="text" name="status_pay" value="{{$spat->treatment->status_pay}}" class="form-control">
                                           <input type="text" name="FK_id_doctor" value="{{$spat->doctor->id}}" class="form-control" readonly>
                                        </h2>
                                        {{--<label><b>Patient ID: &nbsp;</b></label> <h4>{{$spat->FK_id_patient}}</h4>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <table class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-m">Gender:<b>&nbsp;{{$spat->patient->gender}}</b>&nbsp;<i class="fa fa-male"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Age:<b>&nbsp;{{$spat->patient->age}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Doctor:<b>&nbsp;{{$spat->doctor->first_name}}</b>&nbsp;<i
                                                    class="fa fa-user-md"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m">Visited:<b>&nbsp;{{$spat->patient->status}}</b>&nbsp;<i class=""></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-m">Date Reg:<b>&nbsp;{{$spat->created_at}}</b>&nbsp;<i
                                                    class="fa fa-calendar"></i></span>
                                    </td>
                                    <td>
                                        <span class="font-m text-info">Cash X-Ray:<b>&nbsp;{{$spat->treatment->status_pay}}</b>&nbsp;<i
                                                    class="fa fa-money"></i></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr class="bg-primary"/>
                <div class="row">
                    <div class="col-md-5">
                        <table class="table table-condensed table-bordered text-center">
                            <tr>
                                <td><strong style="margin-top:30px;">Tooth Image :</strong></td>
                                <td><img src="{{asset('img/teeths/4.png')}}"/></td>
                            </tr>
                            @foreach($singlePatient as $spat)
                            <tr>
                                <td><strong>Tooth Number :</strong></td>
                                <td>{{$spat->treatment->teeth_number}}</td>
                            </tr>
                            <tr>
                                <td>description</td>
                                <td><input type="text" name="description" class="form-control" value="{{$spat->description}}" readonly></td>
                            </tr>
                            <tr>
                                <td>statuse pay</td>
                                <td>{{$spat->treatment->status_pay}}</td>
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
                        <button class="btn btn-primary xray" type="submit" value="Save">Save <i class="fa fa-save"></i></button>&nbsp;&nbsp;
                        <button class="btn btn-white">Cancel</button>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>

@endsection

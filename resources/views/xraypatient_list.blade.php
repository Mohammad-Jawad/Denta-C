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

        {{-- table xray One patient --}}
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Your X-Ray Patient List</h5>
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
                    <div class="row">
                        {{-- table of content of X-Ray of petient --}}
                        <div class="col-md-12">

                            <br/>
                            <div class="table-responsive">
                                <label style="margin-left: 10px;font-size: 20px"><strong><b>Number of patient:&nbsp; {!!count($patient)!!} Patients </b></strong></label>
                                <hr>
                                <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>X-Ray ID</th>
                                        <th>Patient ID</th>
                                        <th>Patient Name</th>
                                        <th>Date of Registration</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                @if(count($patient)>0)
                                    @foreach($patient as $pat)
                                <tbody>
                                <tr>
                                    <td>{{$pat->id}}</td>
                                    <td>{{$pat->FK_id_patient}}</td>
                                    <td>{{$pat->patient->name}}</td>
                                    <td>Today {{$pat->created_at}}</td>
                                    <td><a class="btn btn-xs btn-info" href="/xray/{{$pat->id}}">Details &nbsp;<i class="fa fa-file-o"></i></a></td></td>
                                </tr>
                                </tbody>
                                 @endforeach
                                  @else
                                    <h1 class="text-center" style="color:red;font-size: 20px;">No patient registered for x-ray</h1>
                                  @endif
                            </table>
                                {{$patient->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
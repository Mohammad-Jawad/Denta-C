@extends('master')
@section('content')

    @include('part.income_button_top')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.xray_income')}}</h5>

            </div>

            <div class="ibox-content">
                <div class="row">

                    <!--Search -->
                    <div class="col-xs-8">
                        <div class="input-group" style="margin-top:25px;margin-left: -5px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:17px;" class="btn btn-sm btn-primary"><i
                                    class="fa fa-search"></i>{{trans('file.search')}}</button></span>
                            <input type="text" placeholder="{{trans('file.p_id')}}" class="input-sm form-control">
                        </div>
                    </div>
                    <div class="col-xs-3" style="margin-top:25px;">
                        <a href="xrey_income" type="button" class="btn btn-sm btn-primary">{{trans('file.show_uncompleted_xray')}}</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="editable"
                           style="margin-top:80px;margin-left:30px;width:95%;">
                        <thead>
                        <tr>
                            <th>{{trans('file.id')}}</th>
                            <th>{{trans('file.p_id')}}</th>
                            <th>{{trans('file.p_name')}}</th>
                            <th>{{trans('file.doctor_name')}}</th>
                            <th>{{trans('file.paid_amount')}}</th>
                            <th>{{trans('file.p_details')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($xrey as $xr)
                            <tr class="gradeX">
                                <td>{{$xr->id}}</td>
                                <td>{{$xr->patient_id}}</td>
                                <td>{{$xr->patient_name}}</td>
                                <td>{{$xr->doctor_name}}</td>
                                <td>{{$xr->paid_amount}}</td>
                                <td>
                                    <button class="btn btn-xs btn-success fa fa-info" data-toggle="modal"
                                            data-target="#{{$xr->id}}">&nbsp;{{trans('file.p_details')}}
                                    </button>
                                </td>
                            </tr>

                        @endforeach
                        <tr>
                            <td colspan="4" class="text-right">{{trans('file.total')}}</td>
                            <td colspan="2">{{$total}}</td>
                        </tr>

                        </tbody>
                    </table>
                @foreach($xrey as $xr)
                    <!-- edit model -->
                        <div class="modal inmodal" id="{{$xr->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                    class="sr-only">{{trans('file.close')}}</span></button>

                                        <h4 class="modal-title">{{trans('file.patient_information')}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-hover table-responsive">
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.p_id')}}:</td>
                                                <td>{{$xr->patient_id}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.p_name')}}:</td>
                                                <td>{{$xr->patient_name}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.doctor_name')}}:</td>
                                                <td>{{$xr->doctor_name}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.teeth_number')}}:</td>
                                                <td>{{$xr->tooth_number}}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">{{trans('file.date')}} :</td>
                                                <td>{{$xr->created_at}}</td>
                                            </tr>

                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">{{trans('file.close')}}</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of model -->
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
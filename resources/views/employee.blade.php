@extends('master')

@section('style')



@endsection
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.doctor_registration')}}</h5>
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
                <div class="container">

                    <div class="row">
                        <form method="post" class="form-horizontal" action="/doctors">
                            <div class="col-md-12" style="margin-left: 40px;">
                                {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.first_name')}}</label>
                                            <input type="text" maxlength="20" class="form-control" name="first_name"
                                                   placeholder="{{trans('file.first_name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.last_name')}}</label>
                                            <input type="text" maxlength="20" class="form-control" name="last_name"
                                                   placeholder="{{trans('file.last_name')}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.father_name')}}</label>
                                            <input type="text" maxlength="20" class="form-control" name="father_name"
                                                   placeholder="{{trans('file.father_name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.age')}}</label>
                                            <input type="number" max="100" min="20" class="form-control" name="age"
                                                   placeholder="{{trans('file.age')}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class=" control-label">{{trans('file.phone')}}</label>
                                            <input type="text" maxlength="10" class="form-control" name="phone" placeholder="{{trans('file.phone')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.department')}}</label>
                                            <select class="select2_demo_1 form-control" id="dept" name="department"
                                                    required>
                                                <option value="0">{{trans('file.department')}}</option>
                                                <option value="regular basis">regular basis</option>
                                                <option value="Orthodontist">Orthodontist</option>
                                                <option value="Oral and maxillofacial surgeon">Oral and maxillofacialsurgeon</option>
                                                <option value="Periodontist">Periodontist</option>
                                                <option value="Prosthodontist">Prosthodontist</option>
                                                <option value="Endodontist">Endodontist</option>
                                                <option value="General">General</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                        <div class="form-group" style="margin-left:1px;"><label class="control-label">{{trans('file.max_patient')}}</label>
                                            <input type="number" max="100" class="form-control" name="max_patient" placeholder="{{trans('file.max_patient')}}" required>
                                        </div>
                                        <div class="form-group" style="margin-left:1px;">
                                            <label class=" control-label">{{trans('file.email')}}</label>
                                            <input type="email" class="form-control" name="email" placeholder="{{trans('file.email')}}"  required>
                                        </div>
                                        <div class="form-group" style="margin-left:1px;">
                                            <label class=" control-label">{{trans('file.password')}}</label>
                                            <input type="password" class="form-control" name="password" placeholder="{{trans('file.password')}}" required>
                                        </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5" style="margin-left: -25px;">
                                        <div class="form-group">
                                            <div class="col-sm-5" style="margin-top: 22px;margin-left: 10px;">
                                          <label class=" control-label" style="letter-spacing: 2px;line-height: 12px;font-size: 18px">{{trans('file.working_time')}}:</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="">
                                        <div class="form-group">
                                            <div class="col-sm-5">
                                        <label style="line-height: 35px;">{{trans('file.from')}} </label>
                                        <input type="time" class="form-control" name="start_work_time"  required>
                                            </div>
                                            <div class="col-sm-5">
                                        <label style="line-height: 35px;">{{trans('file.to')}}</label>
                                        <input type="time" class="form-control" name="end_work_time"  required>
                                            </div>
                                       </div>
                                        </div>
                                </div>
                                <div class="col-sm-5" style="margin-left: 85px;margin-top: 30px">
                                    <div class="form-group">
                                        <div class="col-sm-3"><label class="control-label">{{trans('file.gender')}}:</label></div>
                                        <div class="col-sm-3" style="margin-left: 15px;"><div class="i-checks"><label><input type="radio" value="Male" name="gender"  required>&nbsp;&nbsp;{{trans('file.male')}}</label></div></div>
                                        <div class="col-sm-3"><div class="i-checks"><label> <input type="radio" value="Female" name="gender" required>&nbsp;&nbsp; {{trans('file.female')}}</label></div></div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 20px;">
                                    <div class="col-sm-5 text-center" style="margin-top: 22px;">
                                        <div class="form-group">
                                            <div class="col-sm-3" style="margin-left: -17px;"><label class=" control-label">{{trans('file.salary_type')}}:</label></div>
                                            <div class="col-sm-3"><label><input type="radio" name="salary_type" value="percentage" id="per" onclick="perSal()" style="height: 22px;width:22px;" required><i></i>{{trans('file.per')}}%</label></div>
                                            <div class="col-sm-3"><label><input type="radio" name="salary_type" onclick="fixSal()" id="fix" value="fix" style="height: 22px;width:22px;"> <i></i>{{trans('file.fix')}}</label></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5 text-left">
                                        <div class="form-group">
                                            <label class=" control-label" id="label">{{trans('file.salary_amount')}}</label>
                                            <input type="number" class="form-control" name="salary_amount" id="sal" disabled required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 25px;">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-12 text-right">
                                <div class="form-group">
                                        <button class="btn btn-white"  type='reset' >{{trans('file.reset')}}</button>&nbsp;
                                        <button class="btn btn-primary " type="submit" name="submit" value="Save" style="margin-right: 93px">{{trans('file.save')}}
                                        </button>
                                </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('script')
    <script>
        function perSal() {
            document.getElementById('label').innerHTML = 'Salary Percentage';
            document.getElementById('sal').setAttribute('max', 100);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the percentage of salary');
            document.getElementById('sal').disabled=false;
        }

        function fixSal() {
            document.getElementById('label').innerHTML = 'Salary amount';
            document.getElementById('sal').setAttribute('max', 10000000);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the amount  of salary');
            document.getElementById('sal').disabled=false;
        }
    </script>

@endsection


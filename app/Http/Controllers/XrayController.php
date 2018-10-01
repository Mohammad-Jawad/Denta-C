<?php

namespace App\Http\Controllers;

use App\Xray;
use Illuminate\Http\Request;

class XrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=Xray::orderBy('id','asc')->paginate(10);
        return view('xraypatient_list',compact('patient'));
//        return $patient;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treatment_operation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rey=new Xray();
        $rey->description=$request->description;
        $rey->status_pay=$request->status_pay;
        $rey->FK_id_treatment=$request->Tid;
        $rey->FK_id_patient=$request->Pid;
        $rey->FK_id_doctor=$request->Did;
        $rey->save();
        return redirect('/xray');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function show(Xray $xray)
    {
        $singlePatient=Xray::find($xray);
        return view('xray_show',compact('singlePatient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function edit(Xray $xray)
    {
        $singlePatient=Xray::find($xray);
        return view('xray_show',compact('singlePatient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xray $xray)
    {
        $rey=Xray::find($xray);
        $rey->description=$request->description;
        $rey->status_pay=$request->status_pay;
        $rey->FK_id_treatment=$request->Tid;
        $rey->FK_id_patient=$request->Pid;
        $rey->FK_id_doctor=$request->Did;
        $rey->save();
        return redirect('/xray');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xray $xray)
    {
        //
    }
}

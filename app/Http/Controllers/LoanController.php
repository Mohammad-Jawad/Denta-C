<?php

namespace App\Http\Controllers;
use DB;
use App\Loan;
use App\Trader;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Loan::orderBy('id','asc')->paginate(10);
        $ptotal=DB::table('loans')->sum('paid');
        return view('cpaid',compact('items','ptotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $loan=Trader::find($id);
        $ln=$loan->id;
        $items=Trader::find($id)->item;
        $loans=Trader::find($id)->loan;
        $itotal=$items->sum('total_price');
        $ltotal=$loans->sum('paid');
        $rem=$itotal-$ltotal;
        return view('loan_form',compact('ln','rem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Lon=new Loan();
        $Lon->paid=$request->paid;
        $Lon->receiver=$request->receiver;
        $Lon->trader_id=$request->trader_id;
        $Lon->save();
        return redirect('/item');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
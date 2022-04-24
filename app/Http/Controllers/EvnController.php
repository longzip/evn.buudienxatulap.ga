<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evn;

class EvnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Evn::filter($request->all())->orderByDesc('updated_at')->take(500)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEvnRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evn  $evn
     * @return \Illuminate\Http\Response
     */
    public function show(Evn $evn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evn  $evn
     * @return \Illuminate\Http\Response
     */
    public function edit(Evn $evn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvnRequest  $request
     * @param  \App\Models\Evn  $evn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evn $evn)
    {
        //
        $evn = Evn::firstOrNew([
            'maSoBhxh' => $id
        ]);

        $evn->ten = $request->ten;
        $evn->diaChi = $request->diaChi;
        $evn->soDienThoai = $request->soDienThoai;
        $evn->soTien = $request->soTien;
        $evn->ghiChu = $request->ghiChu;
        // if(isset($request->completed))
        // $evn->completed = $request->completed;
        $evn->save();
        return $evn;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evn  $evn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evn $evn)
    {
        //
    }

    public function setCompleted(Request $request, $id){
        $evn = Evn::firstOrNew([
            'ma' => $id
        ]);

        $evn->completed = $request->completed;
        $evn->save();
        return $evn;
    }

    public function setDisabled(Request $request, $id){
        $evn = Evn::firstOrNew([
            'ma' => $id
        ]);

        $evn->disabled = $request->disabled;
        $evn->save();
        return $evn;
    }
}

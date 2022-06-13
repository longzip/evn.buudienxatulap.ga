<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khl;

class KhlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Khl::filter($request->all())->orderByDesc('updated_at')->take(500)->get();
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
     * @param  \App\Http\Requests\StoreKhlRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khl = Khl::firstOrNew([
            'soDienThoai' => $request->soDienThoai
        ]);

        $khl->ten = $request->ten;
        $khl->diaChi = $request->diaChi;
        // $khl->soTien = $request->soTien;
        // $khl->ghiChu = $request->ghiChu;
        // if(isset($request->completed))
        // $khl->completed = $request->completed;
        $khl->save();
        return $khl;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Khl  $khl
     * @return \Illuminate\Http\Response
     */
    public function show(Khl $khl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Khl  $khl
     * @return \Illuminate\Http\Response
     */
    public function edit(Khl $khl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKhlRequest  $request
     * @param  \App\Models\Khl  $khl
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKhlRequest $request, Khl $khl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Khl  $khl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khl $khl)
    {
        //
    }
}

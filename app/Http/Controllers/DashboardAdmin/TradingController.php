<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Trading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTradingRequest;
use App\Http\Requests\UpdateTradingRequest;

class TradingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trading = Trading::latest()->first();
        return view('dashboard-admin.trading.index', compact('trading'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'trading_view' => 'required'
        ]);

        Trading::create($validatedData);

        toast()->success('Berhasil', 'Trading View berhasil ditambahkan');
        return redirect('/dashboard/trading-view')->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trading $trading)
    {
        $validatedData = $request->validate([
            'trading_view' => 'required'
        ]);

        $trading->update($validatedData);

        toast()->success('Berhasil', 'Trading View  berhasil diperbarui');
        return redirect('/dashboard/trading-view')->withInput();
    }
}

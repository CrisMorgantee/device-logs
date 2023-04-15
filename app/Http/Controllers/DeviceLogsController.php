<?php

namespace App\Http\Controllers;

use App\Models\DeviceLogs;
use Illuminate\Http\Request;

class DeviceLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->patrimony) {
            $logs = DeviceLogs::where('patrimony', '=', $request->patrimony)->get();
        } else {
            $logs = DeviceLogs::all();
        }

        return view('dashboard', ['logs' => $logs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DeviceLogs $deviceLogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeviceLogs $deviceLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeviceLogs $deviceLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeviceLogs $deviceLogs)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $token = session()->get('token');
        
        $menu = Http::get(env("API_URI"). '/api/menu?token=' . $token);
        $menu = json_decode($menu);

        $listbatch = Http::get(env("API_URI"). '/api/listbatch?token=' . $token);
        $listbatch = json_decode($listbatch);
        
        $errorreport = Http::get(env("API_URI"). '/api/errorreport?token=' . $token);
        $errorreport = json_decode($errorreport);
        
        $summary = Http::get(env("API_URI"). '/api/summary?token=' . $token);
        $summary = json_decode($summary);
        
        $captures = Http::get(env("API_URI"). '/api/captures?token=' . $token);
        $captures = json_decode($captures);
        
        $serverstatus = Http::get(env("API_URI"). '/api/serverstatus?token=' . $token);
        $serverstatus = json_decode($serverstatus);
        
        $latestreport = Http::get(env("API_URI"). '/api/latestreport?token=' . $token);
        $latestreport = json_decode($latestreport);
        
        $auditlog = Http::get(env("API_URI"). '/api/auditlog?token=' . $token);
        $auditlog = json_decode($auditlog);

        return view('dashboard.index', [
            'title' => "Dashboard",
            'menu' => $menu,
            'listbatch' => $listbatch,
            'errorreport' => $errorreport,
            'summary' => $summary,
            'captures' => $captures,
            'serverstatus' => $serverstatus,
            'latestreport' => $latestreport,
            'auditlog' => $auditlog

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.organizer.create', [
            'title' => 'Add Organizer'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}

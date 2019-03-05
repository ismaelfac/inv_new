<?php

namespace App\Http\Controllers;

use App\RegisterPanel;
use Illuminate\Http\Request;

class RegisterPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessionClient = RegisterPanel::getSessionClient('users');
        dd($sessionClient);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterPanel  $registerPanel
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterPanel $registerPanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterPanel  $registerPanel
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterPanel $registerPanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterPanel  $registerPanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterPanel $registerPanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterPanel  $registerPanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterPanel $registerPanel)
    {
        //
    }
}

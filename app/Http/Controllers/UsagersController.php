<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;
use Illuminate\Support\Facades\Log;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('usagers.login');
    }

    public function indexAdminU()
    {
        $usagers = Usager::all();
        
        return View('admin.listeUsagers', compact('usagers'));
    }
    /**
     * affiche form de user
     */
    public function showLoginForm()
    {
        return View('usagers.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usagers = Usager::all();
        return View('usagers.create', compact('usagers'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usager $usager)
    {
        return View('usagers.edit', compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Connecte de user
     */
    public function login(Request $request)
    {

    }

    /**
     * Deconnecte de user
     */
    public function logout()
    {
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "Soy el método index"; //GET
        return view("estateagency.pages.about");
        //localhost:8000/blog
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Soy el método create"; //GET
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Soy el método store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Soy el método show con id: " . $id; //GET
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Soy el método edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Soy el método update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Soy el método destroy y enviaste: " . $id;
    }
}

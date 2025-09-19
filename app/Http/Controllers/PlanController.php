<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('plans.index');
    }

    public function create()
    {
        // Logic to show form to create a new plan
    }

    public function store(Request $request)
    {
        // Logic to store a new plan
    }

    public function show($id)
    {
        // Logic to show a specific plan
    }

    public function edit($id)
    {
        // Logic to edit a specific plan
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific plan
    }

    public function destroy($id)
    {
        // Logic to delete a specific plan
    }
}

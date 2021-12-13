<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::latest()->paginate(4);
        return view('medicines.index', compact('medicines'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function home()
    {
        $medicines = Medicine::latest()->paginate(4);
        return view('medicines.home', compact('medicines'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ['Tablet','Capsule', 'Syrup', 'Other'];

        return view('medicines.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ml_name' => 'required',
            'ml_category' => 'required',
            'ml_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ml_desc' => 'required',
        ]);

        $imageName = '';
        if ($request->ml_photo) {
            $imageName = time() . '.' . $request->ml_photo->extension();
            $request->ml_photo->move(public_path('assets/uploads'), $imageName);
        }

        $data = new Medicine;
        $data->ml_name = $request->ml_name;
        $data->ml_generic = $request->ml_generic;
        $data->ml_category = $request->ml_category;
        $data->ml_pharmaceutical = $request->ml_pharmaceutical;
        $data->ml_desc = $request->ml_desc;
        $data->ml_photo = $imageName;
        $data->save();
        return redirect()->route('medicines.index')->with('success', 'Medicine info has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        return view('medicines.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy($ml_id)
    {
        $medicine = Medicine::findOrFail($ml_id);
        $medicine->delete();
        return redirect()->route('medicines.index')->with('success', 'Medicine info has been deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Formular;
use Illuminate\Http\Request;

class FormularController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function testPost(Request $request)
{
    // validam datele de intrare si le atribuim

    $formData = new Formular();
    $formData->nume = $request->input('nume');
    $formData->prenume = $request->input('prenume');
    $formData->data_de_nastere = $request->input('data_de_nastere');
    $formData->comentariu = $request->input('comentariu');

    $formData->save();

    return redirect()->back()->with('success', 'Form data saved successfully!');
}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camping;


class CampingController extends Controller
{
    public function index()
    {
        $campings = Camping::latest()->get();
        
        return view('campings.index', ['campings' => $campings]);
    }

    public function show(Camping $camping)
    {
        return view('campings.show', ['camping' => $camping]);
    }

    public function create()
    {
        return view('campings.create');
    }

}

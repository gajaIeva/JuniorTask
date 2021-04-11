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

    public function store()
    {
        // $camping = new Camping(request(['camping_name', 'country', 'city','rating', 'review_number', 'link', 'image']));
        
        $camping = new Camping();
        
        $camping->camping_name = request('camping_name');
        $camping->country = request('country');
        $camping->city = request('city');
        $camping->rating = request('rating');
        $camping->review_number = request('review_number');
        $camping->link = request('link');
        $camping->image = request('image');

        $camping->save();

        return redirect(route('campings.index'));

        // Camping::create($this->validateCamping());
    }

    public function edit(Camping $camping)
    {
        return view('campings.edit', compact('camping'));
    }

    public function update(Camping $camping)
    {
        $camping->camping_name = request('camping_name');
        $camping->country = request('country');
        $camping->city = request('city');
        $camping->rating = request('rating');
        $camping->review_number = request('review_number');
        $camping->link = request('link');
        $camping->image = request('image');

        $camping->save();

        return redirect(route('campings.index'));
    }

    // protected function validateCamping()
    // {
    //     return request()->validate([
    //         'camping_name'=> 'required',
    //         'country' => 'required',
    //         'city' => 'required',
    //         'rating' => 'required',
    //         'review_number'=> 'required',
    //         'link' => 'required',
    //         'image' => 'required'
    //     ]);
    // }

    public function destroy()
    {
       
    }

}

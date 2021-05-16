<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camping;
use App\Models\Tag;


class CampingController extends Controller
{
    public function index()
    {
        $campings = Camping::latest()->paginate(10);
        $topCampings = Camping::orderByDesc('rating')->paginate(11);
        
        return view('campings.index', ['campings' => $campings],  ['topCampings' => $topCampings]);
    }

    public function show(Camping $camping)
    {
        return view('campings.show', ['camping' => $camping]);
    }

    public function create()
    {
        return view('campings.create', [
            'tags'=> Tag::all()
        ]);
    }

    public function store()
    {        
        $camping = new Camping();
        
        $this->validateCamping();

        $camping->camping_name = request('camping_name');
        $camping->country = request('country');
        $camping->city = request('city');
        $camping->rating = request('rating');
        $camping->review_number = request('review_number');
        $camping->link = request('link');
        $camping->image = request('image');

        $camping->save();

        $camping->tags()->attach(request('tags'));

        return redirect(route('campings.index'));
    }

    public function edit(Camping $camping)
    {
        return view('campings.edit', compact('camping'));
    }

    public function update(Camping $camping)
    {
        $this->validateCamping();

        $camping->camping_name = request('camping_name');
        $camping->country = request('country');
        $camping->city = request('city');
        $camping->rating = request('rating');
        $camping->review_number = request('review_number');
        $camping->link = request('link');
        $camping->image = request('image');
        
        $camping->save();

        return redirect(route('camping.show', ['camping' => $camping]));
    }

    public function rate($camping) {

        $campsite = Camping::find($camping);
        $campsite->review_number = request('rating');
        
        $campsite->save();

        return redirect(route('camping.show', ['camping' => $camping]));
    }

    public function validateCamping()
    {
        return request()->validate([
            'camping_name'=> 'required|string|max:56',
            'country' => 'required|string|max:56',
            'city' => 'required|string|max:85',
            'rating' => 'required|numeric|between:1,5',
            'review_number'=> 'required|numeric|between:1,10',
            'link' => 'required|max:255',
            'image' => 'required'
        ]);
    }

    public function delete($camping)
    {
        $campsite = Camping::find($camping);
        $campsite->delete();

        return redirect('/campings');
    }

}

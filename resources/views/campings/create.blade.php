@extends('layout')

@section('content')
<div id="wrapper">
        <div id="page" class="container">
            <h2 class="form-heading">New Camping</h2>

            <form method='POST' action="/campings">
                @csrf

                <div class="field">
                    <label class="label" for="camping_name">Camping Name</label>
                    
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="camping_name" 
                            id="camping_name"
                            required
                        >

                    </div>

                </div>

                <div class="field">
                    <label class="label" for="country">Country</label>
                    
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="country" 
                            id="country"
                            required
                        >

                    </div>

                </div>

                <div class="field">
                    <label class="label" for="city">City</label>
                    
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="city" 
                            id="city"
                            required
                        >

                    </div>

                </div>

                <div class="field">
                    <label class="label" for="review_number">Review</label>
                    
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="review_number" 
                            id="review_number"
                            required
                        >

                    </div>

                </div>

                <div class="field">
                    <label class="label" for="link">Camping Link</label>
                    
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="link" 
                            id="link"
                            required
                        >

                    </div>

                </div>

                <div class="field">
                    <label class="label" for="camping-image">Image</label>
                    
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="image" 
                            id="camping-image"
                            required
                        >

                    </div>

                </div>

                <label>Ratings</label>
                <div class="rating rating-large" dir="rtl">
                    <input type="radio" name="rating" id="5" value="5"/>
                    <label class="rating-label" for="5">&#9734</label>
                    <input type="radio" name="rating" id="4" value="4"/>
                    <label class="rating-label" for="4">&#9734</label>
                    <input type="radio" name="rating" id="3" value="3"/>
                    <label class="rating-label" for="3">&#9734</label>
                    <input type="radio" name="rating" id="2" value="2"/>
                    <label class="rating-label" for="2">&#9734</label>
                    <input type="radio" name="rating" id="1" value="1"/>
                    <label class="rating-label" for="1">&#9734</label>
                </div>

                <div class="field">
                    <label class="label" for="tags">Tags</label>
                    
                    <div class="control select is-multiple">
                        <select 
                            name='tags[]'
                            multiple
                        >
                        
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>

                        @error('tags')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>


                <div class="field is-grouped">

                    <div class="control">
                        <input 
                            type="submit" 
                            name="submit" 
                            value="Submit"
                        >
                    </div>

                </div>

            </form>
        </div>
    </div>


@endsection
@extends('layout')

@section('content')
<div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading">New Camping</h1>

            <form method='POST' action="/campings">
                @csrf

                <div class="field">
                    <label class="label" for="camping-name">Camping Name</label>
                    
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="camping-name" 
                            id="camping-name"
                        >

                    </div>

                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    
                    <div class="control">
                        <textarea 
                            class="textarea @error('excerpt') is-danger @enderror" 
                            name="excerpt" 
                            id="excerpt">
                            {{old('excerpt')}}
                        </textarea>

                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt')}}</p>
                        @enderror
                    </div>

                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    
                    <div class="control">
                        <textarea 
                            class="textarea @error('body') is-danger @enderror" 
                            name="body"
                            id="body">
                            {{old('body')}}
                        </textarea>

                        @error('body')
                            <p class="help is-danger">{{ $errors->first('body')}}</p>
                        @enderror
                    </div>

                </div>

                <div class="field">
                    <label class="label" for="body">Tags</label>
                    
                    <div class="control select is-multiple">
                        <select 
                            name='tags[]'
                            multiple
                        >
                        
                        </select>
                        

                        @error('tags')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>


                <div class="field is-grouped">

                    <div class="control">
                        <button class="button is-link"> Submit </button>
                    </div>

                </div>


            </form>
        </div>
    </div>


@endsection
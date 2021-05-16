@extends ('layout')

@section ('content')

<div id="wrapper">
	<div 
		id="page" 
		class="container"
    >
		<div id="content">
			<div class="title">
				<h2>
                    {{ $camping->camping_name }}
                </h2>
                <ul>
                    <i class="fas fa-map-marker"></i>
                    <li>
                        {{ $camping->city }} /
                    </li>
                    <li>
                        {{ $camping->country }}
                    </li>
                    <li>
                        @foreach ($camping->tags as $tag)
                            <a  class="show-tags" href="/campings?tag={{ $tag->name }}">{{ $tag->name }}</a>
                        @endforeach
                    </li>
                </ul>
			<div>
                <img 
					src="<?php echo asset('images/'.$camping['image'])?>" 
					alt="" 
					class="image image-full" 
				/> 
                <p class="campsite-description">
                    A campsite or camping pitch is a place used for overnight stay in an outdoor area. ... In American English, the term campsite generally means an area where an individual, family, group, or military unit can pitch a tent or park a camper; a campground may contain many campsites.
                </p>
                <p class="campsite-description">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus aliquam officiis et aut, amet ut provident totam saepe sint quia repellendus a explicabo voluptatum corporis dignissimos alias pariatur enim reiciendis!
                </p>
            </div>
			
        </div>
	</div>
</div>

<div class="review-for-users">
    <h4>Rate Our Camping</h4>
    <form method='POST' action="/campings/{{ $camping->id }}/rate">
        @csrf
        @method('PUT')

        <div class="rating rating-large" dir="rtl">
        @for ($i = 10; $i >= 1; $i--)
            <input type="radio" name="rating" id="{{ $i }}" value="{{ $i }}"/>
            <label class="rating-label" for="{{ $i }}">&#9734</label>
        @endfor
        </div>

        <div class="submit-review">
            <input 
                type="submit"
                name="submit" 
                value="Submit"
            >
        </div>
       

    </form>

</div>

@endsection ('content')


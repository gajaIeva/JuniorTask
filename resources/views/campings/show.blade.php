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
                        {{ $camping->city }}
                    </li>
                    <li>
                        {{ $camping->country }}
                    </li>
                </ul>
			<p>
                <img 
					src="<?php echo asset('images/'.$camping['image'])?>" 
					alt="" 
					class="image image-full" 
				/> 
            </p>
			
        </div>
	</div>
</div>

@endsection ('content')
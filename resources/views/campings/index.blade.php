@extends ('layout')

@section ('content')

<div class="camping-header">
    <h2> CAMPINGS </h2> 
    <a href="{{ route('camping.create') }}" target="" class="">
        <i class="fas fa-plus-circle"></i>
    </a>
</div>

<div class="camping-main">
    @forelse ($campings as $camping)
    <div class="card-container">
        <div class="card">
            <div class="card-top"> 
                <div class="heart-button"><i class="far fa-heart"></i></div>
                <div class="edit-button"><a href="{{ route('camping.edit', $camping) }}" target="" class=""><i class="fas fa-pen-square"></i></a></div>
                <div class="delete-button"><a href="{{ route('camping.delete', $camping->id) }}"><i class="fas fa-trash-alt"></i></div>                
                <a href="{{ route('camping.show', $camping) }}" target="" class="camping-item-image">
                    <img src="<?php echo asset('images/'.$camping['image'])?>" alt="Camping picture">
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('camping.show', $camping) }}" target="" class="">
                        {{ $camping->camping_name }}
                    </a>
                </h5>
                <ul>
                    <li>
                        <a href="" target="" class="">
                            {{ $camping->city }}
                        </a>
                    </li>
                    <i class="fas fa-circle"></i>
                    <li>
                        <a href="" target="" class="">
                            {{ $camping->country }}
                        </a>
                    </li>
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $camping->rating)
                            <i class="fas fa-star"></i>
                        @endif
                    @endfor
                </ul>
                <div class="reviews">
                    <div class="number-review">
                        <span class="camping-rating">
                            {{ $camping->review_number }}
                        </span>
                        <span>/</span>
                        <span>
                            10
                        </span>
                    </div>
                </div>
                <div class="more-information">
                    <div class="information-button">
                        <a href="{{ route('camping.show', $camping) }}" target="" class="btn">More Information</a>
                    </div>
                    <div class="information-text">
                        <a href="{{ $camping->link }}" target="_black" class="">Where to book?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
        <p>Sorry.. No available campings.</p>
    @endforelse
</div>

<span>
    {{ $campings->links() }}
</span>
<style>
    .w-5 {
        display: inline;
        width: 1em;
        height: 1em;
    }
</style>


@endsection ('content')

@section ('aside')

@forelse ($topCampings as $topCamping)
<div class="aside-card-container">
    <div class="aside-card">
        <div class="card-top"> 
            <a href="{{ route('camping.show', $topCamping) }}" target="" class="aside-camping-item-image">
                <img src="<?php echo asset('images/'.$topCamping['image'])?>" alt="Camping picture">
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('camping.show', $topCamping) }}" target="" class="">
                    {{ $topCamping->camping_name }}
                </a>
            </h5>
            <ul>
                <li>
                    <a href="" target="" class="">
                        {{ $topCamping->city }}
                    </a>
                </li>
                <i class="fas fa-circle"></i>
                <li>
                    <a href="" target="" class="">
                        {{ $topCamping->country }}
                    </a>
                </li>
                @for ($i = 0; $i < 5; $i++)
                    @if ($i < $topCamping->rating)
                        <i class="fas fa-star"></i>
                    @endif
                @endfor
            </ul>
            <div class="reviews">
                <div class="number-review">
                    <span class="camping-rating">
                        {{ $topCamping->review_number }}
                    </span>
                    <span>/</span>
                    <span>
                        10
                    </span>
                </div>
            </div>
            <div class="tags">
                <p>
                    @foreach ($topCamping->tags as $tag)
                        <a href="/campings?tag={{ $tag->name }}">{{ $tag->name }}</a>
                    @endforeach
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@empty
<p>No Campings...</p>
@endforelse


@endsection ('aside')

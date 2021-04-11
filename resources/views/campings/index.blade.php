@extends ('layout')

@section ('content')

<div class="camping-header">
    <h2> CAMPINGS </h2> 
    <a href="{{ route('campings.create') }}" target="" class="">
        <i class="fas fa-plus-circle"></i>
    </a>
</div>

<div class="camping-main">
    @foreach ($campings as $camping)
    <div class="card-container">
        <div class="card">
            <div class="card-top"> 
                <div class="heart-button"><i class="far fa-heart"></i></div>
                <div class="edit-button"><a href="{{ route('campings.edit', $camping) }}" target="" class=""><i class="fas fa-pen-square"></i></a></div>
                <div class="delete-button"><i class="fas fa-trash-alt"></i></div>
                <a href="{{ route('campings.show', $camping) }}" target="" class="camping-item-image">
                    <img src="<?php echo asset('images/'.$camping['image'])?>" alt="Camping picture">
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('campings.show', $camping) }}" target="" class="">
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
                        <a href="{{ route('campings.show', $camping) }}" target="" class="btn">More Information</a>
                    </div>
                    <div class="information-text">
                        <a href="{{ $camping->link }}" target="_black" class="">Where to book?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection ('content')

@section ('aside')

@foreach ($campings as $camping)
<div class="aside-card-container">
    <div class="aside-card">
        <div class="card-top"> 
            <a href="{{ route('campings.show', $camping) }}" target="" class="aside-camping-item-image">
                <img src="<?php echo asset('images/'.$camping['image'])?>" alt="Camping picture">
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('campings.show', $camping) }}" target="" class="">
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
            <div class="tags">
                <span> namuciai </span>
                <span> smaguciai </span>
                <span> duju </span>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection ('aside')

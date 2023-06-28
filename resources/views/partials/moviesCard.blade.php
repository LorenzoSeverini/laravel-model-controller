
<div class="container mt-4">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm rounded-lg ">
                <img src="https://via.placeholder.com/150x100" class="card-img-top" alt="Movie Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text"><small>Original Title : </small>{{ $movie->original_title }}</p>
                    <p class="card-text text-uppercase"><small>Country : </small>{{ $movie->nationality}}</p>
                    <p class="card-text"><small>Release : </small>{{ date('Y', strtotime($movie->date)) }}</p>
                    {{-- <p class="card-text"><small>Vote : </small>{{ $movie->vote }}</p> --}}

                    {{-- change the vote sitem form 0 to 10 to 0 to 5 and add stars form font awesome  --}}
                    <div class="stars">
                        @php
                            $rating = round($movie->vote / 2); // Convert scale of 0-10 to 0-5 🤠
                        @endphp
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $rating)
                                <i class="fas fa-star" style="color: rgb(211, 211, 83);"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

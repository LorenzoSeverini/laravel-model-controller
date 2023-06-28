<div class="main-content">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <h1>Movies List</h1>
            </div>
        </div>

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-3">
                    <a href="{{route('movies')}}">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <div class="stars">
                                    @php
                                        $rating = round($movie->vote / 2); // Convert scale of 0-10 to 0-5
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
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
   .card {
       cursor: pointer;
       transition: all 0.3s ease-in-out;
   }

    .card:hover {
         transform: scale(1.05);
    }
</style>

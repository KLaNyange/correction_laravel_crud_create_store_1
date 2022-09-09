<section class="container">
    <h1 class="text-center">My Pokemon</h1>
    <div class="d-flex justify-content-evenly flex-wrap">
        @foreach ($pokemons as $pokemon )
            <div class="card p-4 my-4 " style="width: 18rem;">
                <img src="{{ $pokemon->url }}" class="card-img-top" alt="image de "  height="200px" >
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemon->name }}</h5>
                    <p class="card-text">{{ $pokemon->type }}</p>
                    <p class="card-text">{{ $pokemon->level }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

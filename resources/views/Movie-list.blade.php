 @include("static.header")

<main id="movies-list">
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <small>Titolo originale: {{ $movie->original_title }}</small>
                    <p>
                        Nazionalità: {{ $movie->nationality }}<br>
                        Anno di produzione: {{ $movie->date}}<br>
                        Voto: {{ $movie->vote}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</main>

@include("static.footer")
</body>
</html>

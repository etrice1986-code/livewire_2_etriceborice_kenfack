<div>
    {{-- In work, do what you enjoy. --}}
    
  

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <div class="card shadow-lg border-0">
                
                @if($article->img)
                    <img src="{{ Storage::url($article->img) }}" 
                         class="card-img-top" 
                         alt="Immagine articolo">
                @endif

                <div class="card-body p-4">

                    <h2 class="card-title mb-3 fw-bold">
                        {{ $article->title }}
                    </h2>

                    <h5 class="card-subtitle text-muted mb-4">
                        {{ $article->subtitle }}
                    </h5>

                    <p class="card-text fs-5">
                        {{ $article->body }}
                    </p>

                    <a href="{{ route('articles.index') }}" 
                       class="btn btn-secondary mt-4">
                        Torna indietro
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>



</div>

<div class="container py-5">

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4 text-center" role="alert">
            <span class="me-2 ">✅</span> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif 
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">

            <div class="card shadow-lg border-0 rounded-4 p-4">

                <h2 class="fw-bold mb-4 text-center">Lista Articoli</h2>

                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Sottotitolo</th>
                            <th scope="col" class="text-end">Azioni</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $article->id }}</th>

                                <td class="fw-semibold">
                                    {{ $article->title }}
                                </td>

                                <td class="text-muted">
                                    {{ $article->subtitle }}
                                </td>

                                <td class="text-end">

                                    <a href="{{ route('articles.show', compact('article')) }}"
                                        class="btn btn-sm btn-outline-primary rounded-3 me-1">
                                        Mostra
                                    </a>

                                    <a href="{{ route('articles.edit', compact('article')) }}"
                                        class="btn btn-sm btn-outline-warning rounded-3 me-1">
                                        Modifica
                                    </a>

                                    <button wire:click="deleteArticle({{ $article->id }})"
                                        class="btn btn-sm btn-outline-danger rounded-3">
                                        Elimina
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

</div>

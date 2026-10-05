<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
   
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6">
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Subtitle</th>
      <th scope="col">Gestisci</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($articles as $article)
        
    <tr>
      <th scope="row">{{ $article->id }}</th>
      <td>{{ $article->title }}</td>
      <td>{{ $article->subtitle }}</td>
      <td>
        <a href="{{ route('articles.show', compact('article')) }}" class="btn btn-primary">mostra</a>
        <a href="{{ route('articles.edit', compact('article')) }}" class="btn btn-warning">modifica</a>
        <button wire:click="deleteArticle({{ $article->id }})" class="btn btn-danger">elimina</button>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>

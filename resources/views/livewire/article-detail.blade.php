<div class="row">
    <div class="col-12 col-md-7">
        <img class="img-show-article" src="{{ Storage::url($article->img) }}" alt="{{ $article->name }} image">
    </div>

    <div class="col-12 col-md-5 my-3 tour-show-description">
        <h4>Breve descrizione </h4>
        <p>{{ $article->description }}</p>
        
        <h4>Articolo completo</h4>
        <p>{{ $article->body }}</p>


        <div class="d-flex flex-column align-items-start">
            <a class="btn btn-outline-dark mx-3 my-1 btn-show-article " href="{{ route('article.edit', compact('article')) }}">Edit Tour</a>
            <a class="btn btn-outline-dark mx-3 my-1 btn-show-article " href="{{ route('article.index') }}">Back</a>
        </div>

    </div>
</div>

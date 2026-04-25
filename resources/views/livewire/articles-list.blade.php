<div class="row justify-content-center">

    <x-message/>

    @foreach ($articles as $article)
    <div class="col-12 col-md-8">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ Storage::url($article->img) }}" class="img-fluid rounded-start img-card-article" alt="Immagine di {{$article->title}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title article-Card">{{$article->title}}</h5>
                        <p class="card-text">{{$article->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-2 d-flex mb-3 flex-column justify-content-around">
        <a class="btn btn-outline-primary" href="{{Route('article.show', compact('article'))}}">Show</a>
        <a class="btn btn-outline-secondary" href="{{Route('article.edit', compact('article'))}}">Edit</a>
        <button class="btn btn-outline-danger">Delete</button>
    </div>

    @endforeach
</div>


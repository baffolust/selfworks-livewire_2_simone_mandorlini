<div>
    <x-message/>
    <form wire:submit="updateArticle"class="shadow p-4 rounded bg-warning bg-opacity-25">

        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Articolo</label>
            <input wire:model.live.blur="title" type="text" class="form-control" id="title">
            @error('title')<div class="bg-danger-subtle mt-1 p-1 rounded "> {{ $message }}</div>@enderror

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Breve Descrizione</label>
            <input wire:model.live.blur="description" type="text" class="form-control" id="description">
            @error('description')<div class="bg-danger-subtle mt-1 p-1 rounded "> {{ $message }}</div>@enderror

        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea wire:model.live.blur="body" id="body" class="form-control" rows="8"></textarea>
            @error('body')<div class="bg-danger-subtle mt-1 p-1 rounded "> {{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Carica Immagine</label>
            <input wire:model="img" class="form-control" type="file" id="img">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

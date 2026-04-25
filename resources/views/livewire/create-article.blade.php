<div>
    <x-message/>
    <form wire:submit="store" class="shadow p-4 rounded bg-warning bg-opacity-25">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Articolo</label>
            <input wire:model="title" type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Breve Descrizione</label>
            <input wire:model="description" type="text" class="form-control" id="description">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea wire:model="body" id="body" class="form-control" rows="8"></textarea>
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Carica Immagine</label>
            <input wire:model="img" class="form-control" type="file" id="img">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

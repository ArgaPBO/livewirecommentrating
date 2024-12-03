<div>
    <div style="margin: auto;max-width: 800px;">
    @if (session()->has('success'))
    <div class="alert alert-success"style="width: 100%;" role="alert">
    {{session('success')}}
    </div>
    @endif
    <h1 class="text-center">Review</h1>
    <form wire:submit="store">
    <div class="mb-3">
    <label for="nama" class="form-label">Email address</label>
    <input type="email" class="form-control" wire:model="nama" id="nama" placeholder="name@example.com" required>
    </div>
    <div class="mb-3">
    <label for="rating" class="form-label">Rating</label>
    <input type="range" class="form-range" min="1" max="5" step="1" wire:model="rating" id="rating">
    </div>
    <div class="mb-3">
    <label for="comment" class="form-label">Comment</label>
    <textarea class="form-control" id="comment" rows="3" wire:model="comment" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary" style="width: 100%;">Review</button>
    </form>
    </div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>

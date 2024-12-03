<?php

namespace App\Livewire;

use App\Models\CommentRating;
use Livewire\Component;
use Livewire\WithPagination;

class Crud extends Component
{
    use WithPagination;
    public $isOpen = 0;
    public $commentratingId;
    public $nama;
    public $rating = 3;
    public $comment;
    public function store()
    {
        commentrating::create([
            'nama' => $this->nama,
            'rating' => $this->rating,
            'comment' => $this->comment
        ]);
        session()->flash('success', 'Added successfully.');
        $this->closeModal();
        $this->reset('commentratingId','nama','rating','comment');
    }
    public function update()
    {
        if ($this->commentratingId) {
            $post = CommentRating::findOrFail($this->commentratingId);
            $post->update([
                'nama' => $this->nama,
                'rating' => $this->rating,
                'comment' => $this->comment
            ]);
            session()->flash('success', 'Updated successfully.');
            $this->closeModal();
            $this->reset('commentratingId','nama','rating','comment');
        }
    }
    public function edit($id)
    {
        $this->reset('commentratingId','nama','rating','comment');
        $post = CommentRating::findOrFail($id);
        $this->commentratingId = $id;
        $this->nama = $post->nama;
        $this->rating = $post->rating;
        $this->comment = $post->comment;
 
        $this->openModal();
    }
    public function delete($id)
    {
        CommentRating::find($id)->delete();
        session()->flash('success', 'Deleted successfully.');
        $this->reset('commentratingId','nama','rating','comment');
    }
    public function create()
    {
        $this->reset('commentratingId','nama','rating','comment');
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }
    public function render()
    {
        return view('livewire.crud',[
            'commentratings' => CommentRating::paginate(10)
        ]);
    }
}

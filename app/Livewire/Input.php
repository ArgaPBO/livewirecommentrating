<?php

namespace App\Livewire;

use App\Models\commentrating;
use Livewire\Component;

class Input extends Component
{
    
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
        session()->flash('success', 'Review successfull.');
        
        $this->reset('nama','rating','comment');
    }
    public function render()
    {
        return view('livewire.input');
    }
}

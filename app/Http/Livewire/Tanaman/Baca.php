<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Livewire\Component;

class Baca extends Component
{
    public $tanaman;
    public function mount($slug)
    {
        $this->tanaman = Tanaman::where('slug', $slug)->where('status', 'Diterbitkan')->first();
        views($this->tanaman)->cooldown(2)->record();
    }
    public function render()
    {
        return view('livewire.tanaman.baca')->layout('layouts.guest');
    }
}

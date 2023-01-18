<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Product;
use App\Models\Tanaman;
use Livewire\Component;
use Livewire\WithPagination;

class HasilPencarian extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $keyword;
    public $kategori = 'semua';
    public $queryString = ['keyword'];
    protected $listeners = ['pencarian'];

    public function updatedKeyword()
    {
        $this->resetPage();
    }
    public function render()
    {
        if ($this->keyword){
            $tanaman = Tanaman::search($this->keyword)->query(fn ($query) => $query->with('user'))->paginate(10);
        }else{
            $tanaman = Tanaman::latest()->with('user')->where('status', 'Diterbitkan')->paginate(10);
        }

        return view('livewire.wiki.hasil-pencarian', [
            'tanaman' => $tanaman
        ])->layout('layouts.guest');
    }
}

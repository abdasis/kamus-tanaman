<?php

namespace App\Http\Livewire\Analityc;

use App\Models\Tanaman;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $populer_perminggu = Tanaman::popularLastWeek()->withTotalVisitCount()->get();
        $populer_perbulan = Tanaman::popularThisMonth()->withTotalVisitCount()->get();
        $populer_all_time = Tanaman::popularAllTime()->withTotalVisitCount()->get();
        return view('livewire.analityc.index',[
            'popular_perminggu' => $populer_perminggu,
            'popular_perbulan' => $populer_perbulan,
            'keseluruhan' => $populer_all_time
        ]);
    }
}
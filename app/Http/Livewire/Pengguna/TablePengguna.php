<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\User;
use App\Traits\AlertConfirm;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TablePengguna extends DataTableComponent
{

    use AlertConfirm;

    protected $listeners = ['dihapus', 'batal'];

    public function dihapus()
    {
        if ($this->model_id){
            User::find($this->model_id)->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }else{
            $this->alert('error', 'Data tidak ditemukan');
        }
    }
    public function columns(): array
    {
        return [
            Column::make('Id', 'id')->sortable(),
            Column::make('Name', 'name')->sortable()->searchable(),
            Column::make('Email', 'email')->sortable()->searchable(),
            Column::make('Pendidikan Terakhir', 'pendidikan_terakhir')->sortable(),
            Column::make('Roles', 'roles')->sortable(),
            Column::make('Tanggal Terdaftar', 'created_at')->sortable()->searchable(),
            Column::make('Option', 'id')->format(function ($val){
                return view('partials.tombol-aksi', [
                    'edit' => route('pengguna.sunting', $val),
                    'detail' => route('pengguna.detail', $val),
                    'hapus' => $val
                ]);
            })

        ];
    }

    public function query(): Builder
    {

        return  User::query();
    }
}

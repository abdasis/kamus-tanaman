<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use App\Traits\AlertConfirm;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelTanaman extends DataTableComponent
{
    use AlertConfirm;
    use LivewireAlert;

    protected $listeners = ['dihapus', 'batal', 'diverifikasi'];

    public function dihapus()
    {
        if ($this->model_id){
            Tanaman::find($this->model_id)->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }else{
            $this->alert('error', 'Data tidak ditemukan');
        }

    }

    public function diverifikasi()
    {
        if ($this->model_id)
        {
            $tanaman = Tanaman::find($this->model_id);
            $tanaman->diverifikasi_oleh = \Auth::id();
            $tanaman->tanggal_verifikasi = Carbon::now();
            $tanaman->save();
            $this->alert('success', 'Data berhasil diverifikasi');

        }
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Nama Tanaman', 'nama_tanaman')->sortable()->searchable(),
            Column::make('Nama Latin', 'nama_latin')->sortable()->searchable(),
            Column::make('Status', 'status')->format(function ($val){
                $status = $val == 'Diterbitkan' ? 'success' : 'warning';
                return '<div class="badge badge-'. $status .'">'. $val .'</div>';
            })->asHtml(),
            Column::make('Dibuat Oleh', 'user.name'),
            Column::make('Dilihat', 'id')->format(function ($val, $column, $row){
                return views($row)->count() .' kali';
            })->sortable(),
            Column::make('Options', 'slug')->format(function ($val, $column, $row){
                return view('partials.tombol-aksi',[
                    'edit' => route('tanaman.sunting', $val),
                    'hapus' => $row->id,
                    'detail' => route('tanaman.detail', $val),
                    'verifikasi' => $row->id
                ]);
            })
        ];
    }

    public function query(): Builder
    {
        return Tanaman::query();

    }
}

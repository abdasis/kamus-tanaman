<div>
    <ul class="list-inline hstack gap-2 mb-0">
        @if(!empty($edit))
            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                title="Edit">
                <a  href="{{$edit}}" class="text-muted d-inline-block">
                    <i class="ri-edit-line"></i>
                </a>
            </li>
        @endif


        @if(!empty($verifikasi))
            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                title="Message">
                <a href="{{$verifikasi}}" wire:click.prevent="verifikasi({{$verifikasi}})"
                   class="text-muted d-inline-block">
                    <i class="ri-check-double-line"></i>
                </a>
            </li>
        @endif

        @if(!empty($hapus))
            <li wire:click="hapus({{$hapus}})" class="list-inline-item edit" data-bs-toggle="tooltip"
                data-bs-trigger="hover" data-bs-placement="top" title="Hapus">
                <a href="javascript:void(0);" class="text-muted d-inline-block">
                    <i class="ri-delete-bin-5-line text-danger"></i>
                </a>
            </li>
        @endif
    </ul>
</div>

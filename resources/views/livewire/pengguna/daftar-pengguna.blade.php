<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="blur"></div>
    <div class="banner-contributor border-bottom border-light mb-3 d-flex align-items-center">
        <div class="title mx-auto text-center">
            <h1>Kontributor</h1>
            <p>Berikut kontributor terbaik yang sudah berpartisipasi untuk mengisi data di platform ini</p>
        </div>
    </div>
    <div class="container">
        <div class="row" style="min-height: 80vh">
            @forelse($semua_pengguna as $pengguna)
                <div class="col-md-3">
                    <div class="card ribbon-box right overflow-hidden">
                        <div class="card-body text-center p-4">
                            <div class="ribbon ribbon-info ribbon-shape trending-ribbon"><i
                                    class="ri-flashlight-fill text-white align-bottom"></i> <span
                                    class="trending-ribbon-text">Trending</span></div>
                            <img src="{{asset('assets/images/avatar.jpg')}}" class="avatar avatar-lg rounded-circle border-light border" alt="" height="45">
                            <h5 class="mb-1 mt-4"><a href="apps-ecommerce-seller-details.html" class="link-primary">{{$pengguna->name}}</a></h5>
                            <p class="text-muted mb-4">{{Str::title($pengguna->roles)}}</p>
                            <div class="row mt-4">
                                <div class="col-lg-6 border-end-dashed border-end">
                                    <a href="">
                                        <i class="ri-links-fill fs-18"></i>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="">
                                        <i class="ri-mail-open-line fs-18"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="apps-ecommerce-seller-details.html" class="btn btn-light w-100">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="alert alert-default-info">
                        Belum ada kontributor yang bergabung saat ini
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>

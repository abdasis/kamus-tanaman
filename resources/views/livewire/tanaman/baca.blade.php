<div>
    <div class="container-fluid">
        <div class="row justify-content-center content-box">
            {{--<div class="col-md-3 p-4">
                <div class="sidebar-widget">
                    <h5 class="text-bold widget-title text-quicksand d-flex align-items-center gap-2">
                        <i class="ri-book-read-line"></i>
                        Daftar Isi
                    </h5>
                    <div class="widget-body">
                        <div id="ToC">

                        </div>
                    </div>
                </div>
                <div class="sidebar-widget mt-3" id="vote">
                    <ul class="list-unstyled d-flex align-items-center justify-content-around mb-0">
                        <li class="aksi-lainnya active">
                            <i class="ri-thumb-up-fill"></i>
                        </li>
                        <li class="aksi-lainnya ">
                            <i class="ri-thumb-down-fill"></i>
                        </li>
                        <li class="aksi-lainnya">
                            <i class="ri-bookmark-fill"></i>
                        </li>
                    </ul>
                </div>
            </div>--}}
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="card featured-image-box">
                    <img class="featured-image" src="https://placeimg.com/640/480/nature" alt="">
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="content-title">{{$tanaman->nama_tanaman}}</h2>
                        <div class="meta-tag mx-auto">
                            <ul class="list-unstyled m-0 p-0">
                                <li class="d-flex justify-content-center gap-2">
                                    <div class="meta-item d-flex align-items-center gap-1">
                                        <i class="ri-user-3-line"></i>
                                        {{$tanaman->user->name}}
                                    </div>
                                    <div class="meta-item d-flex align-items-center gap-1">
                                        <i class="ri-calendar-2-line"></i>
                                        {{\Carbon::parse($tanaman->created_at)->format('d-m-Y')}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card box-content">
                    <div class="card-body bg-transparent">
                        <div class="card-text deskripsi-tanaman">
                            {!! $tanaman->diskripsi_tanaman !!}
                        </div>
                        @if($tanaman->refrensi !=  null)
                            <div class="box-referensi p-3 my-3">
                                <div class="icon-book ">
                                    <h2 class="d-flex align-items-center gap-1">
                                        <i class="ri-file-list-3-line"></i>
                                        Referensi
                                    </h2>
                                </div>
                                <div class="mt-2">
                                    {!! $tanaman->refrensi !!}
                                </div>
                            </div>
                        @endif
                        <div class="biografi-penulis border-light">
                            <div class="card-text">
                                <div class="row justify-content-center">
                                    <div class="col d-grid text-center">
                                        <img
                                            src="{{ file_exists('upload' . '/' . $tanaman->user->profile_photo_path) ? asset($tanaman->user->profile_photo_path) : asset('assets/images/avatar.jpg')}}"
                                            class="rounded-circle img-penulis mx-auto">
                                        <h5 class="title-penulis">Disusun Oleh</h5>
                                        <h5 class="nama-penulis">{{$tanaman->user->name ?? 'None'}} <i
                                                class="fas fa-check-circle text-primary"></i></h5>
                                        <div class="card-text diskripsi-penulis mt-2">
                                            <p>
                                                Artikel ini disusun oleh tim penyunting terlatih dan peneliti yang
                                                memastikan keakuratan
                                                dan kelengkapannya.

                                                Tim Manajemen Konten wikiHow memantau hasil penyuntingan staf kami
                                                secara saksama untuk
                                                menjamin artikel yang berkualitas tinggi. Artikel ini telah dilihat
                                                141.769 kali.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex gap-1">
                            <i class="ri-heart-2-line"></i>
                            Berikan Reaksi
                        </div>
                        @auth()
                            <div class="reaction-item ">
                                <ul class="d-flex gap-2 list-unstyled ">
                                    <li wire:click="suka"
                                        class="d-flex cursor-pointer gap-1 {{\Reaction::has($tanaman, auth()->user(), 'heart') ? 'liked': 'not-liked'}}">
                                        <i class="ri-heart-2-fill {{\Reaction::has($tanaman, auth()->user(),'heart')  ? 'text-danger': 'text-muted'}}"></i>
                                        <span class="text-danger"> + {{Reaction::count($tanaman, 'heart')}}</span>
                                    </li>
                                    <li wire:click="jempol"
                                        class="d-flex cursor-pointer gap-1 {{\Reaction::has($tanaman, auth()->user(), 'person_raising_hand') ? 'liked': 'not-liked'}}">
                                        <i class="ri-thumb-up-fill {{\Reaction::has($tanaman, auth()->user(),'person_raising_hand')  ? 'text-danger': 'text-muted'}}"></i>
                                        <span
                                            class="text-danger"> + {{Reaction::count($tanaman, 'person_raising_hand')}}</span>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="alert alert-warning border-dashed">
                                <a class="fw-bold text-warning" href="{{route('login')}}">Login</a> untuk memberikan
                                reaksi
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid">
                            {{--<button onclick="bookmarkPage()"
                                    class="btn my-2 btn-outline-success btn-border d-flex gap-1 justify-content-center">
                                <i class="ri-bookmark-2-fill"></i>
                                Bookmark
                            </button>--}}
                            {{--<a class="btn my-2 btn-outline-dark d-flex gap-1 justify-content-center" href="{{route('tanaman.print', $tanaman->slug)}}">
                                Print
                            </a>--}}
                            <!-- Single Button Dropdown -->
                            <div class="dropdown d-grid">
                                <button
                                    class="btn d-flex gap-1 justify-content-center btn-outline-dark my-2 dropdown-toggle"
                                    type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ri-share-line"></i>
                                    Bagikan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach($share as $key => $link)
                                        <a class="dropdown-item" href="{{$link}}">{{Str::title($key)}}</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@push('js')
    <script src="https://kit.fontawesome.com/0016cf1886.js" crossorigin="anonymous"></script>
    <script>

        function bookmarkPage() {
            document.execCommand("addBookmark");
        }


        // Get ToC div
        toc = document.getElementById("ToC");

        // Create a list for the ToC entries
        tocList = document.createElement("ul");
        tocList.classList.add('list-unstyled')

        // Get the h3 tags - ToC entries
        headers = document.getElementsByTagName("h2");

        // For each h3
        for (i = 0; i < headers.length; i++) {
            // Create an id
            name = "h" + i;
            headers[i].id = name;

            // a list item for the entry
            tocListItem = document.createElement("li");

            // a link for the h3
            tocEntry = document.createElement("a");
            tocEntry.setAttribute("href", "#" + name);
            tocEntry.innerText = headers[i].innerText;


            tocListItem.appendChild(tocEntry);
            tocList.appendChild(tocListItem);
        }
        toc.appendChild(tocList);
    </script>
@endpush

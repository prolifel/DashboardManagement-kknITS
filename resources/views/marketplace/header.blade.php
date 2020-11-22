<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../argon/img/theme/herbal-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>

    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <p class="text-white mt-0 mb-5">{{ $description }}</p>
                @endif
            </div>

            @if(Route::current()->getName() === 'marketplace.index')
                @admin
                    <div class="col-md-12 mb-4">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('marketplace.create') }}';">Tambah Produk</button>
                    </div>
                @endadmin
                @if(Auth::check() && Auth::user()->role !== "admin")
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('marketplace.cart') }}';">Keranjang Belanja</button>
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>

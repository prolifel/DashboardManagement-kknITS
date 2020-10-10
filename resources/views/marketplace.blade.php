@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __('Marketplace'),
        'description' => __('Berbelanja barang-barang herbal tinggal sekali sentuh'),
        'class' => 'col'
    ])



    <div class="container-fluid mt--7">
        <div class="card-columns">
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/zentri.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">Zentri, Obat Sakit Gigi</h5>
                    <p class="card-text font-weight-bold">Rp70.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/anpiloma.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">Anpiloma UD. Piloma</h5>
                    <p class="card-text font-weight-bold">Rp250.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/gojiberry.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">Gojiberry 250gr</h5>
                    <p class="card-text font-weight-bold">Rp50.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/vco.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">VCO 100ml</h5>
                    <p class="card-text font-weight-bold">Rp25.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/amer.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">Anggur Merah Cap Orang Tua</h5>
                    <p class="card-text font-weight-bold">Rp69.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/ginseng.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">GINSENG MERAH obat saraf kejepit</h5>
                    <p class="card-text font-weight-bold">Rp40.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/curcumin.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">CURCUMIN, Obat Herbal Sakit Nyeri</h5>
                    <p class="card-text font-weight-bold">Rp125.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/herbakol.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">Jus Herbal, Herbakol</h5>
                    <p class="card-text font-weight-bold">Rp150.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/kunyit.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">Kunyit Putih Segar 1Kg</h5>
                    <p class="card-text font-weight-bold">Rp30.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
        </div>

        @include('layouts.footers.footer')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 3000
            })
    </script>

@endpush

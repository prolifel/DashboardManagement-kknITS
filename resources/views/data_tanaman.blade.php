@extends('layouts.app')

@section('content')
    @include('data_tanaman.header', [
        'title' => __('Data Tanaman'),
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
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('marketplace') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
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

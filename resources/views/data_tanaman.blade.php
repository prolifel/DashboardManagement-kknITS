@extends('layouts.app')

@section('content')
    @include('data_tanaman.header', [
        'title' => __('Data Tanaman'),
        'description' => __('Berbelanja barang-barang herbal tinggal sekali sentuh'),
        'class' => 'col'
    ])



    <div class="container-fluid mt--7">
        <div class="card-columns">
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/adas.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Adas</p>
                    <h5 class="card-title font-weight-400">Kesehatan Jantung</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/bawang_merah.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Bawang Merah</p>
                    <h5 class="card-title font-weight-400">Vertigo, Bisul, Batuk</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/bawang_putih.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Bawang Putih</p>
                    <h5 class="card-title font-weight-400">Cacingan, Tensi, Kolestrol</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/belimbing_wuluh.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Belimbing Wuluh</p>
                    <h5 class="card-title font-weight-400">Gondongan, Diabetes, Tensi</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/brotowali.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Brotowali</p>
                    <h5 class="card-title font-weight-400">Rematik, Kencing Manis, Malaria</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/cabe_jawa.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Cabe Jawa</p>
                    <h5 class="card-title font-weight-400">Batuk, Diare, Disentri</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/jahe_badak.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Jahe Badak</p>
                    <h5 class="card-title font-weight-400">Mengurangi Kolestrol</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/jahe_kuning.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Jahe Kuning</p>
                    <h5 class="card-title font-weight-400">Mengurangi Kolestrol</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/jambu_biji.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Jambu Biji</p>
                    <h5 class="card-title font-weight-400">Diare, Kolestrol, Diabetes 2</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/jeruk_nipis.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Jeruk Nipis</p>
                    <h5 class="card-title font-weight-400">Amandel, Malaria, Batuk</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/kayu_manis.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kayu Manis</p>
                    <h5 class="card-title font-weight-400">Batuk, Anti-Oksidan, Jantung</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/kedawung.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kedawung</p>
                    <h5 class="card-title font-weight-400">Kolik, Kolera, Anti-Bakteria</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/24. Kayu Putih 2.jpg" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kayu Putih</p>
                    <h5 class="card-title font-weight-400">Batuk, Masuk Angin, Sembelit</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/kelembak.jpg" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kelembak</p>
                    <h5 class="card-title font-weight-400">Sariawan, Sakit Kuning, Menstruasi</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/kembang_lawang.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kembang Lawang</p>
                    <h5 class="card-title font-weight-400">Melancarkan Kencing, Batuk</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/kemiri.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kemiri</p>
                    <h5 class="card-title font-weight-400">Anti-Bakteri, Sakit Kepala, Perawatan Rambut</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/kemukus.jpg" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kemukus</p>
                    <h5 class="card-title font-weight-400">Ulu hati, Diare, Disentri</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/kencur.jpeg" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Kencur</p>
                    <h5 class="card-title font-weight-400">Batuk, Kanker, Diare</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/lempuyang_gajah.jpg" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Lempuyang Gajah</p>
                    <h5 class="card-title font-weight-400">Pembersih Darah, Kejang, Disentri</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/lempuyang_wangi.jpg" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Lempuyang Wangi</p>
                    <h5 class="card-title font-weight-400">Pereda Nyeri, Kejang, Kanker</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/lengkuas.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Lengkuas</p>
                    <h5 class="card-title font-weight-400">Kanker, Tumor, Rematik</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/mengkudu.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Mengkudu</p>
                    <h5 class="card-title font-weight-400">Peluruh Dahak, Darah Tinggi, Radang Lambung</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/FOTO TANAMAN MATERIA MEDICA/pepaya.png" alt="Icon">
                <div class="card-body">
                    <!-- <h5 class="card-title font-weight-400">Adas</h5> -->
                    <p class="card-text font-weight-bold">Pepaya</p>
                    <h5 class="card-title font-weight-400">Kanker, Malaria, Cacingan</h5>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <!-- <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div>
            <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ route('data_tanaman') }}';">
                <img class="card-img-top" src="{{ asset('argon')}}/img/data_tanaman/fortamen_1.jpg" alt="Icon">
                <div class="card-body">
                    <h5 class="card-title font-weight-400">FORTAMEN, Herbal Khusus Pria</h5>
                    <p class="card-text font-weight-bold">Rp200.000</p>
                    {{-- <a href="#" class="btn btn-primary">Tambahkan ke keranjang</a> --}}
                </div>
            </div> -->
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

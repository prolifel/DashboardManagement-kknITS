@extends('layouts.app')

@section('content')
    {{-- Content --}}
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container-fluid">
            <div class="post-slider">
                <div class="post">1</div>
                <div class="post">2</div>
                <div class="post">3</div>
                <div class="post">4</div>
                <div class="post">5</div>
                <div class="post">6</div>
            </div>
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <h1 class="text-white">{{ __('Selamat Datang di Website Interaktif KKN Abdimas ITS') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    {{-- <div class="container-fluid mt--7">
        <div class="row">
            <div class="col mb-5 mb-xl-0">
                <div class="card shadow mb-3">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Leaflet Map') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div id="mapid" style="height: 60vh;"></div>
                    <script>
                        var map = L.map('mapid').setView([-7.282356, 112.7949253], 15);

                        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=1ef8W3THeFG1kNCOeZMJ', {attribution:'<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'}).addTo(map);

                        var marker = L.marker([-7.2796807, 112.796922]).addTo(map);

                        var polygon = L.polygon([
                            [-7.2767391, 112.7882952],
                            [-7.2772494, 112.7983292],
                            [-7.2869825, 112.7989774],
                            [-7.2874039, 112.7891757]
                        ]).addTo(map);

                        var circle = L.circle([-7.2792543, 112.7904965], {
                            color: 'red',
                            fillColor: '#f03',
                            fillOpacity: 0.5,
                            radius: 30
                        }).addTo(map);

                        marker.bindPopup("ini tc").openPopup();
                        circle.bindPopup("ini bunderan");
                        polygon.bindPopup("ini its");

                        var popup = L.popup()
                        .setLatLng([-7.2772923,112.7980906])
                        .setContent("ini labnya ega")
                        .openOn(map);

                        var popup = L.popup();

                        function onMapClick(e) {
                            popup
                                .setLatLng(e.latlng)
                                .setContent("You clicked the map at " + e.latlng.toString())
                                .openOn(map);
                        }

                        map.on('click', onMapClick);
                    </script>
                    <div class="card-footer"></div>
                </div>

                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Persebaran COVID-19') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Jumlah Positif</th>
                                    <th scope="col">Jumlah Sembuh</th>
                                    <th scope="col">Jumlah Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($covid_provinces as $covid_province)
                                <tr>
                                    <td>{{ $covid_province->province }}</td>
                                    <td>{{ $covid_province->positive }}</td>
                                    <td>{{ $covid_province->recovered }}</td>
                                    <td>{{ $covid_province->death }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        @include('layouts.footers.footer')
    </div> --}}

    {{-- Footer --}}
    <div class="container-fluid">
        @include('layouts.footers.footer')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

    <script>
        $('.post-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        });
    </script>
@endpush
@extends('layouts.app')

@section('content')

    {{-- Content --}}

        <div class="wrapper">
            <div id="carouselExampleIndicators" class="carousel slide box bg-transparent" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url(argon/img/brand/photo1.jpg)">
                    </div>
                    <div class="carousel-item" style="background-image: url(argon/img/brand/photo2.jpg)">
                    </div>
                    <div class="carousel-item" style="background-image: url(argon/img/brand/photo3.jpg)">
                    </div>
                </div>
            </div>
            <div class="box overlay">
                <p class="h1 text-white">Selamat datang di Website Interaktif dan Marketplace KKN Abdimas ITS</p>
                <p></p>
                <button type="button" class="btn btn-primary">Marketplace</button>
                <button type="button" class="btn btn-secondary">Data Tanaman</button>
            </div>
        </div>


    {{-- maps --}}
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

@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col mb-5 mb-xl-0">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h2>{{ __('Tes Map Leaflet') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="mapid" style="height: 100vh;"></div>
                        <script>
                            var map = L.map('mapid').setView([-7.282356, 112.7949253], 16);

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
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Forum</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="/post/create" class="btn btn-sm btn-primary">Write A Post</a>
                            </div>
                        </div>
                    </div>
                    @foreach($posts as $post)
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xs-1 pl-3 mt-0">
                                    <i class="ni ni-3x ni-circle-08"></i>
                                </div>
                                <div class="col">
                                    <h1 class="text-black mb-0 d-inline"><b>{{ $post->name }}</b></h1>
                                    <h6 class="text-uppercase text-gray ls-1 mb-1">{{ $post->created_at }}</h6>
                                </div>
                            </div>
                            <a href="post/show/{{ $post->id }}"><h1 class="text-dark mb-0">{{ $post->title }}</h1></a>
                            <div>{{ $post->body }}</div>
                            <a href="post/show/{{ $post->id }}">
                                <button type="button" class="mt-2 btn btn-sm btn-outline-primary btn-round">
                                    <i class="far fa-comment-alt"></i><b>{{ $post->comments->count() }}</b>
                                </button>
                            </a>
                        </div>
                        <hr class="my-0">
                    @endforeach
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $posts->links() }}
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

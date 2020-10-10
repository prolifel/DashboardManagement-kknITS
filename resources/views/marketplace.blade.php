@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __('Marketplace'),
        'description' => __('Berbelanja barang-barang herbal tinggal sekali sentuh'),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="row mx-auto">
            <div class="col my-10">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            {{-- <h3 class="col-12 mb-0">{{ __('Edit Profile') }}</h3> --}}
                            {{-- <img src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="fortamen_1"> --}}
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('argon')}}/img/marketplace/fortamen_1.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>

                        </div>
                    </div>
                    <div class="card-body">

                    </div>
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

@extends('layouts.app')

@section('content')
    @include('data_tanaman.header', [
        'title' => __(''),
        'description' => __(''),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="card border-0 p-4">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img class="card-img img-fluid" src="{{ asset('public') }}/image/{{ $plant->image }}" alt="Icon">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="pb-4">{{ $plant->name }}</h2>
                        <h1 class="display-3 text-price border-bottom border-top py-3">{{ $plant->scientific_name }}</h1>
                        <div class="py-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-muted">Kandungan Kimia</p>
                                </div>
                                <div class="col-md-9">
                                    <p>{{ $plant->chemical_content }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="py-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-muted">Kegunaan</p>
                                </div>
                                <div class="col-md-9">
                                    <p>{{ $plant->usability }}</p>
                                </div>
                            </div>
                        </div>
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
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(300, 0).slideUp(300, function(){
                    $(this).remove();
                });
            }, 2000);
        });
    </script>

@endpush

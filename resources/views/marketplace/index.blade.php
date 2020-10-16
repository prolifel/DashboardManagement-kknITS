@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __('Marketplace'),
        'description' => __('Berbelanja barang-barang herbal tinggal sekali sentuh'),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="card-columns">
            @foreach($products as $product)
                <div class="card border-0 text-center" style="width: 10rem" onclick="window.location.href='{{ url('/show/' . $product->id) }}';">
                    <img class="card-img-top" src="{{ asset('public') }}/image/{{ $product->image }}" alt="Icon">
                    <div class="card-body">
                        <h5 class="card-title font-weight-400">{{ $product->name }}</h5>
                        <p class="card-text font-weight-bold">Rp{{ $product->price }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $products->links() }}
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

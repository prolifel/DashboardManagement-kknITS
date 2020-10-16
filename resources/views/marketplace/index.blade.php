@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __('Marketplace'),
        'description' => __('Berbelanja barang-barang herbal tinggal sekali sentuh'),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        {{-- <div class="card-columns">
            @foreach($products as $product)
                <div class="card border-0 text-center" style="width: 16rem">
                    <img class="card-img-top" src="{{ asset('public') }}/image/{{ $product->image }}" alt="Icon" onclick="window.location.href='{{ route('marketplace.show', $product->id) }}';">
                    <div class="card-body">
                        <h5 class="card-title font-weight-400" onclick="window.location.href='{{ route('marketplace.show', $product->id) }}';">{{ $product->name }}</h5>
                        <p class="card-text font-weight-bold" onclick="window.location.href='{{ route('marketplace.show', $product->id) }}';">Rp{{ $product->price }}</p>
                        @admin
                            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('marketplace.edit', $product->id) }}';">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('marketplace.delete', $product->id) }}';">Hapus</button>
                        @endadmin
                    </div>
                </div>
            @endforeach
        </div> --}}

        <div class="card-columns">
            @foreach($products as $product)
                <div class="card border-0 text-center" style="width: 14rem">
                    <img class="card-img-top" src="{{ asset('public') }}/image/{{ $product->image }}" alt="Icon" onclick="window.location.href='{{ route('marketplace.show', $product->id) }}';">
                    <div class="card-body">
                        <h5 class="card-title font-weight-400" onclick="window.location.href='{{ route('marketplace.show', $product->id) }}';">{{ $product->name }}</h5>
                        <p class="card-text font-weight-bold" onclick="window.location.href='{{ route('marketplace.show', $product->id) }}';">Rp{{ $product->price }}</p>
                        @admin
                            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('marketplace.edit', $product->id) }}';">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('marketplace.delete', $product->id) }}';">Hapus</button>
                        @endadmin
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

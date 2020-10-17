@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __(''),
        'description' => __(''),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="card border-0 p-4">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img class="card-img img-fluid" src="{{ asset('public') }}/image/{{ $product->image }}" alt="Icon">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="pb-4">{{ $product->name }}</h2>
                        <h1 class="display-3 text-price border-bottom border-top py-3">Rp {{ $product->price }}</h1>
                        <div class="py-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-muted">Deskripsi</p>
                                </div>
                                <div class="col-md-9">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('marketplace.cart') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="qty" class="col-sm-3 col-form-label">Jumlah:</label>
                                <div class="col-2">
                                    <input type="text" name="qty" id="sst" value="1" class="form-control">
                                </div>
                                <input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control">
                            </div>
                            <button class="align-self-end btn btn-lg btn-block btn-primary">Tambahkan ke Keranjang</button>
                        </form>
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

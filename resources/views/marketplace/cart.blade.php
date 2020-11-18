@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __('Keranjang Belanja'),
        'description' => __(''),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="card border-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        {{-- <tr>
                            <td>
                                <button class="btn btn-secondary">Update Keranjang</button>
                            </td>
                        </tr> --}}
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($carts ?: [] as $row)
                        <tr>
                            <td>
                                <div class="media">
                                    <img class="smaller img-thumbnail mr-4" src="{{ asset('public') }}/image/{{ $row['product_image'] }}" alt="img">
                                    <div class="media-body">
                                        <p>{{ $row['product_name'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp {{ $row['product_price'] }}</h5>
                            </td>
                            <td>
                                <h5>{{ $row['qty'] }}</h5>
                            </td>
                            <td>
                                <h5>Rp {{ $row['product_price'] * $row['qty'] }}</h5>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4">Keranjang belanja kosong</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="1"></td>
                            <td><h2>Subtotal</h2></td>
                            <td colspan="2" style="text-align: end"><h2 class="text-price">{{ $subtotal }}</h2></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">
                                <button class="align-self-end btn btn-lg btn-block btn-primary" onclick="window.location.href='{{ route('marketplace.checkout') }}';">Checkout</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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

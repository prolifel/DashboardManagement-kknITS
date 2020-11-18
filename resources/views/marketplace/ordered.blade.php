@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
            'title' => __('Pesanan anda telah diterima'),
            'description' => __(''),
            'class' => 'col'
    ])

    <div class="container">
        <h3 class="title_confirmation">Terima kasih, pesanan anda telah kami terima.</h3>
        <div class="row order_d_inner">
            <div class="col-lg-6">
                <div class="details_item">
                    <h4>Informasi Pesanan</h4>
                    <ul class="list">
                        <li>
                            <a href="#">
            <span>Invoice</span> : {{ $order->invoice }}</a>
                        </li>
                        <li>
                            <a href="#">
            <span>Tanggal</span> : {{ $order->created_at }}</a>
                        </li>
                        <li>
                            <a href="#">
            <span>Total</span> : Rp {{ number_format($order->subtotal) }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details_item">
                    <h4>Informasi Pemesan</h4>
                    <ul class="list">
                        <li>
                            <a href="#">
            <span>Alamat</span> : {{ $order->customer_address }}</a>
                        </li>
                        <li>
                            <a href="#">
            <span>Kota</span> : {{ $order->district->city->name }}</a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Country</span> : Indonesia</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

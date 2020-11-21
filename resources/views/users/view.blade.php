@extends('layouts.app')

@section('content')
    @include('users.partials.header', [
        'title' => __('Detail Order'),
        'description' => __(''), // TODO: Masukkan invoice disini
        'class' => 'col'
    ])

    <div class="container-fluid mt-3">
        {{-- USER's DATA --}}
        <div class="card shadow mb-4">
            <div class="card-header border-0">
                <h3 class="card-title">Data Pelanggan</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <tr>
                            <td width="30%">Nama Lengkap</td>
                            <td width="5%">:</td>
                            <th>{{ $order->customer_name }}</th>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>:</td>
                            <th>{{ $order->customer_phone }}</th>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <th>{{ $order->customer_address }}, {{ $order->district->name }} {{ $order->district->city->name }}, {{ $order->district->city->province->name }}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        {{-- USER's PAYMENT --}}
        {{-- <div class="card shadow mb-4">
            <div class="card-header border-0">
                <h3 class="card-title">
                    Pembayaran
                    @if ($order->status == 0)
                        <a href="{{ url('member/payment?invoice=' . $order->invoice) }}" class="btn btn-primary btn-sm float-right">Konfirmasi</a>
                    @endif
                </h3>
            </div>
            <div class="card-body">
                @if ($order->payment)
                    <table>
                        <tr>
                            <td width="30%">Nama Pengirim</td>
                            <td width="5%"></td>
                            <td>{{ $order->payment->name }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Transfer</td>
                            <td></td>
                            <td>{{ $order->payment->transfer_date }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Transfer</td>
                            <td></td>
                            <td>Rp {{ number_format($order->payment->amount) }}</td>
                        </tr>
                        <tr>
                            <td>Tujuan Transfer</td>
                            <td></td>
                            <td>{{ $order->payment->transfer_to }}</td>
                        </tr>
                        <tr>
                            <td>Bukti Transfer</td>
                            <td></td>
                            <td>
                                <img src="{{ asset('storage/payment/' . $order->payment->proof) }}" width="50px" height="50px" alt="">
                                <a href="{{ asset('storage/payment/' . $order->payment->proof) }}" target="_blank">Lihat Detail</a>
                            </td>
                        </tr>
                    </table>
                @else
                    <h4 class="text-center">Belum ada data pembayaran</h4>
                @endif
            </div>
        </div> --}}

        {{-- USER's PURCHASED DETAIL --}}
        <div class="card mb-4">
            <div class="card-header border-0">
                <h3 class="card-title">Detail Pesanan</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Berat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($order->details as $row)
                            <tr>
                                <td>{{ $row->product->name }}</td>
                                <td>{{ number_format($row->price) }}</td>
                                <td>{{ $row->qty }} Item</td>
                                <td>{{ $row->weight }} gr</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
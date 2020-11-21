@extends('layouts.app')

@section('content')
    @include('users.partials.header', [
        'title' => __('Admin Marketplace'),
        'description' => __('Atur pesanan marketplace disini'),
        'class' => 'col'
    ])

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Pesanan</h3>
                            </div>
                            {{-- <div class="col-4 text-right">
                                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Add user</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    {{-- <th scope="col"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->invoice }}</td>
                                        <td>{{ $order->customer_name }}</td>
                                        <td>{{ $order->customer_phone }}</td>
                                        <td>{!! $order->status_label !!}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('customer.view_order', ['invoice' => $order->invoice]) }}">Lihat</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('whatsapp', ['number' => $order->customer_phone]) }}" class="btn btn-success btn-sm">Chat Whatsapp</a>
                                        </td>
                                        {{-- <td class="text-right">
                                            <div class="dropleft">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#editModal">Edit Status</a>
                                                    <a class="dropdown-item warning-confirm" href="/{{ route('user.delete', ['id' => $order->id]) }}">Delete</a>
                                                </div>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.footer')
    </div>

    {{-- Modal Edit Status --}}
    {{-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">Status Sekarang:</div>
                <div class="col">{!! $order->status_label !!}</div>
              </div>
              <div class="row">
                <div class="col">Status Baru:</div>
                <div class="col">
                    <form action="{{ route('customer.edit_status') }}" method="post">
                        <select name="status_id" id="status_id">
                            <option value="">Pilih Status</option>
                            @foreach ($status as $item)
                                <option value="{{ $item-> }}"></option>
                            @endforeach
                        </select>
                    </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div> --}}
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

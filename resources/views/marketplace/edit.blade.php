@extends('layouts.app')

@section('content')
    @include('marketplace.header', [
        'title' => __('Marketplace'),
        'description' => __('Berbelanja barang-barang herbal tinggal sekali sentuh'),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="card border-0">
            <div class="card-header">
                <strong>Edit {{ $product->name }}</strong>
            </div>
            <div class="card-body">
            <form action="{{ route('marketplace.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Input Name --}}
                    <div class="form-group">
                      <label for="inputName">Edit Nama Produk</label>
                      <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputName" placeholder="Contoh: Jamu Herbal (Jenis/Kategori Produk) + MantapJos (Merek) + 1 liter (Keterangan)"
                        value="{{ $product->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Product --}}
                    <div class="form-group">
                      <label for="inputDescription">Edit Deskripsi Produk</label>
                      <input name="description" class="form-control" id="inputDescription" rows="3" placeholder="Jamu Herbal asal Batu. Tidak dicampur dengan bahan buatan, 100% alami"
                        value="{{ $product->description }}" required>

                        @if ($errors->has('description'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Price --}}
                    <div class="form-group">
                        <label for="inputPrice">Edit Harga</label>
                        <input type="number" name="price" class="form-control" id="inputPrice" placeholder="100000"
                            value="{{ $product->price }}" required>

                        @if ($errors->has('price'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif

                    </div>

                    {{-- Input Weight --}}
                    <div class="form-group">
                        <label for="inputWeight">Edit Berat Barang</label>
                        <input type="number" name="weight" class="form-control" id="inputWeight" placeholder="1000 (dalam gram)"
                            value="{{ $product->weight }}" required>

                        @if ($errors->has('weight'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Image --}}
                    <div class="form-group">
                        <label for="inputImage">Masukkan Gambar Produk</label>
                        <input type="file" name="image" class="form-control-file" id="inputImage" accept="image/*"
                            value="{{ $product->image }}" required>

                        @if ($errors->has('image'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>

@endpush

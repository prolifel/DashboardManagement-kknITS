@extends('layouts.app')

@section('content')
    @include('data_tanaman.header', [
        'title' => __('data_tanaman'),
        'description' => __('Berbelanja barang-barang herbal tinggal sekali sentuh'),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        <div class="card border-0">
            <div class="card-header">
                <strong>Tambah Tanaman</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('data_tanaman.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Input Name --}}
                    <div class="form-group">
                      <label for="inputName">Nama Tanaman</label>
                      <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputName" placeholder="Jambu Biji" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Scientific --}}
                    <div class="form-group">
                      <label for="inputDescription">Nama Ilmiah</label>
                      <textarea name="scientific_name" class="form-control" id="inputDescription" rows="3" placeholder="Foeniculum vulgare" required></textarea>

                        @if ($errors->has('description'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Family --}}
                    <div class="form-group">
                      <label for="inputName">Family</label>
                      <input type="text" name="family" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputName" placeholder="Aplaceae" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Chemical --}}
                    <div class="form-group">
                      <label for="inputName">Kandungan Kimia</label>
                      <input type="text" name="chemical_content" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputName" placeholder="Vitamin A, Vitamin B1, Vitamin B2" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Usability --}}
                    <div class="form-group">
                      <label for="inputName">Kegunaan</label>
                      <input type="text" name="usability" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="inputName" placeholder="Mengatasi diare, melancarkan pencernaan" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    {{-- Input Image --}}
                    <div class="form-group">
                        <label for="inputImage">Masukkan Gambar Tanaman</label>
                        <input type="file" name="image" class="form-control-file" id="inputImage" accept="image/*" required>

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

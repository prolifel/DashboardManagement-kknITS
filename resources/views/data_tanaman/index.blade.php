@extends('layouts.app')

@section('content')
    @include('data_tanaman.header', [
        'title' => __('Data Tanaman'),
        'class' => 'col'
    ])

    <div class="container-fluid mt--7">
        {{-- <div class="card-columns">
            @foreach($plants as $plant)
                <div class="card border-0 text-center" style="width: 16rem">
                    <img class="card-img-top" src="{{ asset('public') }}/image/{{ $plant->image }}" alt="Icon" onclick="window.location.href='{{ route('data_tanaman.show', $plant->id) }}';">
                    <div class="card-body">
                        <h5 class="card-title font-weight-400" onclick="window.location.href='{{ route('data_tanaman.show', $plant->id) }}';">{{ $plant->name }}</h5>
                        @admin
                            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('data_tanaman.edit', $plant->id) }}';">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('data_tanaman.delete', $plant->id) }}';">Hapus</button>
                        @endadmin
                    </div>
                </div>
            @endforeach
        </div> --}}

        <div class="card-columns">
            @foreach($plants as $plant)
                <div class="card border-0 text-center" style="width: 14rem">
                    <img class="card-img-top" src="{{ asset('public') }}/image/{{ $plant->image }}" widht=13px height=200px alt="Icon" onclick="window.location.href='{{ route('data_tanaman.show', $plant->id) }}';">
                    <div class="card-body">
                        <h5 class="card-title font-weight-400" onclick="window.location.href='{{ route('data_tanaman.show', $plant->id) }}';">{{ $plant->name }}</h5>
                        @admin
                            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('data_tanaman.edit', $plant->id) }}';">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('data_tanaman.delete', $plant->id) }}';">Hapus</button>
                        @endadmin
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $plants->links() }}
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


@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="mx-2">
                                <a href="{{ url()->previous() }}" class="btn btn-sm btn-default">Back</a>
                            </div>
                            <h3 class="col-4 mb-0">Edit Post</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($post as $p)
                            <form method="post" action="/post/update" autocomplete="off">
                                @csrf

                                <h6 class="heading-small text-muted mb-4">{{ __('Post information') }}</h6>

                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="pl-lg-4">
                                    <input type="hidden" name="id" value="{{ $p->id }}"><br/>
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-title">{{ __('Title') }}</label>
                                        <input type="text" name='title' id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{ old('title', $p->title) }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('body') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-body">{{ __('Description') }}</label>
                                        <textarea rows="5" cols="80" name='body' id="input-body" class="form-control
                                            form-control-alternative{{ $errors->has('body') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}"
                                            required>{{ __(old('body', $p->body)) }}</textarea>

                                        @if ($errors->has('body'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('body') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

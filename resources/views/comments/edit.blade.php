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
                            <h3 class="col-4 mb-0">Edit Comment</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xs-1 pl-3 mt-0">
                                <i class="ni ni-3x ni-circle-08"></i>
                            </div>
                            <div class="col">
                                <h1 class="text-black mb-0 d-inline"><b>{{ $post->user->name }}</b></h1>
                                <h6 class="text-uppercase text-gray ls-1 mb-1">{{ $post->created_at }}</h6>
                            </div>
                        </div>
                        <h1 class="text-dark mb-0">{{ $post->title }}</h1>
                        {{ $post->body }}
                    </div>
                    <hr class="my-0">

                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xs-1 pl-3 mt-0">
                                <i class="ni ni-2x ni-circle-08"></i>
                            </div>
                            <div class="col pl-2">
                                <h2 class="text-black mb-0 d-inline"><b>{{ Auth::user()->name }}</b></h2>
                            </div>
                        </div>
                        <form method="post" action="/comment/update" autocomplete="off">
                            @csrf

                            <input type="hidden" name="id" value="{{ $comment->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group{{ $errors->has('body') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <textarea rows="5" cols="80" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Comment') }}" type="text" name="description" value="{{ old('description') }}"
                                      required>{{ old('description', $comment->description)}}</textarea>
                                </div>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

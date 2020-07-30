@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        @foreach($post as $p)
                                @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <div class="row align-items-center">
                                    <div class="col-xs-1 pl-3 mt-0">
                                        <i class="ni ni-3x ni-circle-08"></i>
                                    </div>
                                    <div class="col">
                                        <h1 class="text-black mb-0 d-inline"><b>{{ $p->name }}</b></h1>
                                        <h6 class="text-uppercase text-gray ls-1 mb-1">{{ $p->created_at }}</h6>
                                    </div>
                                        @if ($p->author_id === Auth::user()->id)
                                            <div class="dropleft">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="/post/edit/{{ $p->id }}">Edit Post</a>
                                                    <a class="dropdown-item warning-confirm" href="/post/delete/{{ $p->id }}">Delete Post</a>
                                                </div>
                                            </div>
                                        @endif
                                </div>
                                <h1 class="text-dark mb-0">{{ $p->title }}</h1>
                                <div class="text-dark">{{ $p->body }}</div>
                        @endforeach

                        <hr class="my-3">

                        <!-- Form Comment -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xs-1 pl-3 mt-0">
                                    <i class="ni ni-2x ni-circle-08"></i>
                                </div>
                                <div class="col pl-2">
                                    <h2 class="text-black mb-0 d-inline"><b>{{ Auth::user()->name }}</b></h2>
                                </div>
                            </div>

                            <form role="form" method="POST" action="/comment/store">
                                @csrf

                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="post_id" value="{{ $p->id }}">


                                <div class="form-group{{ $errors->has('body') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <textarea rows="3" cols="80" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Comment') }}" type="text" name="description" value="{{ old('description') }}" required></textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">{{ __('Add Comment') }}</button>
                                </div>
                            </form>
                        </div>

                        <h2 class="mb-3">Comments ({{ $comments->total() }}) :</h2>
                        <!-- Menampilkan comment pada pos yang telah di-show -->

                        @foreach($comments as $c)
                            <div class="row align-items-center">
                                <div class="col-xs-1 pl-3 mt-0">
                                    <i class="ni ni-2x ni-circle-08 pr-0"></i>
                                </div>
                                <div class="col pl-2">
                                    <h3 class="text-black mb-0 d-inline"><b>{{ $c->user->name }}</b></h3>
                                    <h6 class="text-uppercase text-gray ls-1 mb-1">{{ $c->created_at }}</h6>
                                </div>
                                    @if ($c->user_id === Auth::user()->id)
                                        <div class="dropleft">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="/comment/edit/{{ $c->id }}">Edit Comment</a>
                                                <a class="dropdown-item warning-confirm" href="/comment/delete/{{ $c->id }}">Delete Comment</a>
                                            </div>
                                        </div>
                                    @endif
                            </div>
                            <div class="mb-4">{{ $c->description }}</div>
                        @endforeach
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $comments->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

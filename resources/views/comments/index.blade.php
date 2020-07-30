@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">My Comments ({{ $comments->total() }})</h3>
                            </div>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light"
                                <tr>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Post Author</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Comment Creation Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td><a href="/post/show/{{ $comment->post->id }}"><b>{{ $comment->post->title }}</b></a></td>
                                        <td>{{ $comment->post->user->name }}</td>
                                        <td>{{ $comment->description }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td class="text-right">
                                            <div class="btn-group dropleft">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right droSpdown-menu-arrow">
                                                    <a class="dropdown-item" href="/post/show/{{ $comment->post->id }}">View Comment</a>
                                                    <a class="dropdown-item" href="/comment/edit/{{ $comment->id }}">Edit Comment</a>
                                                    <a class="dropdown-item warning-confirm" href="/comment/delete/{{ $comment->id }}">Delete Comment</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $comments ->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app2')

@section('contents')
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
                <div class="card-group col col-md-6 col-12 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            {{-- <img src="" alt="image" class="img-thumbnail card-img mb-3" width="300"> --}}
                            <div class="card-text">
                                <b class="text-bold">ID:</b> {{ $user->id }}
                            </div>
                            <div class="">
                                <b class="text-bold">Name:</b> {{ $user->name }}
                            </div>
                            <div class="">
                                <b class="text-bold">Role:</b>
                                @if ($user->user_type == '1')
                                    <span class="text-danger fw-semibold">Admin</span>
                                    @else
                                    <span class="fw-semibold">User</span>
                                @endif
                            </div>
                            <div class="">
                                <b class="text-bold">Email:</b> {{ $user->email }}
                            </div>
                            <div class="">
                                <b class="text-bold">Since:</b> {{ $user->created_at->format('d M Y') }}
                            </div>
                            @auth
                                @if (Auth::user()->user_type == '1')
                                    <div class="mt-4 float-end">
                                        <a href="" class="card-link btn btn-outline-secondary">Detail</a>
                                    </div>
                                @elseif (Auth::user()->id == $user->id)
                                    <div class="mt-4 float-end">
                                        <a href="" class="card-link btn btn-outline-secondary">Detail</a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

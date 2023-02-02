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
                                <b class="text-bold">Email:</b> {{ $user->email }}
                            </div>
                            <div class="">
                                <b class="text-bold">Created at:</b> {{ $user->created_at }}
                            </div>
                            <div class="mt-4 float-end">
                                <a href="" class="card-link btn btn-outline-secondary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

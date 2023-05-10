@extends('layouts.app2')

@section('contents')
    <div class="container float-start ms-3 mt-3" style="width: 860px">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->user_type == '1')
                    <a href="{{ url("/clients/delete/$client->id") }}" onclick="return confirm('Are you sure to delete?')"
                        class="btn btn-danger float-end mx-1">Delete</a>
                    <a href="{{ url("/clients/edit/$client->id") }}" class="btn btn-warning float-end">Edit</a>
                @endif
                <h5 class="h4 card-title">
                    <b>{{ $client->company }}</b>
                </h5>
                <div class="card-subtitle mb-3">
                    <span class="">Partner Since:</span>
                    <span class="">
                        {{ $client->created_at->format('d M Y') }}
                    </span>
                </div>

                <div class="card-text">
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">VAT:</span>
                        <span class="ms-1 fw-semibold">{{ $client->vat }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Email:</span>
                        <span class="ms-1 fw-semibold">{{ $client->email }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Phone:</span>
                        <span class="ms-1 fw-semibold">{{ $client->phone }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Address:</span>
                        <span class="ms-1 fw-semibold">{{ $client->address }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

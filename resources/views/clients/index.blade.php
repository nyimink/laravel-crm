@extends('layouts.app2')

@section('contents')

    @if (session("info"))
        <div class="alert alert-info">
            {{ session("info") }}
        </div>
    @endif

    <div class="container ms-3 p-3" style="width:1060px">
        @auth
            <a href="{{ url("/clients/create") }}" class="btn btn-success mb-3">Create Client</a>
        @endauth
        <div class="container bg-white p-3">
            <h5 class="h2 mb-3">Client List</h5>
            <hr>
            <table class="table table-striped">
            <tr>
                <th>Company</th>
                <th>VAT</th>
                <th>Address</th>
                <th></th>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->company }}</td>
                    <td>{{ $client->vat}}</td>
                    <td>{{ $client->address }}</td>
                    <td>
                        @auth
                            <a href="{{ url("/clients/edit/$client->id") }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url("/clients/delete/$client->id") }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                        @endauth
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection

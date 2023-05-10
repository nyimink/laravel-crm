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
                <th>Phone No.</th>
                <th>Address</th>
                <th>Projects</th>
                <th></th>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->company }}</td>
                    <td>{{ $client->phone}}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->project->count() }}</td>
                    <td>
                        @auth
                            <a href="{{ url("/clients/detail/$client->id") }}" class="btn btn-outline-secondary">Detail</a>
                        @endauth
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection

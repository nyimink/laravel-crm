@extends('layouts.app2')

@section('contents')
    <div class="container ms-3 p-3" style="width:1060px">
        @if (session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        @auth
            <a href="{{ url('/projects/create') }}" class="btn btn-success mb-3">Create Project</a>
        @endauth
        <div class="container bg-white p-3">
            <h2 class="mb-3">Project List</h2>
            <hr>
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Assigned to</th>
                    <th>Client</th>
                    <th>Deadline</th>
                    <th></th>
                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>
                            @auth
                                @if (auth()->user()->id == $project->user_id)
                                    <b class="text-success">You</b>
                                @else
                                    {{ $project->user->name }}
                                @endif
                            @endauth
                            @guest
                                {{ $project->user->name }}
                            @endguest
                        </td>
                        <td>{{ $project->client->company }}</td>
                        <td>{{ date('d M Y', strtotime($project->deadline)) }}</td>
                        <td>
                            <a href="{{ url("projects/detail/$project->id") }}" class="btn btn-outline-secondary">Detail</a>
                            {{-- @can('project-delete', $project)
                                <a href="{{ url("/projects/edit/$project->id") }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url("/projects/delete/$project->id") }}" class="btn btn-danger">Delete</a>
                            @endcan --}}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $projects->links() }}
        </div>
    </div>
@endsection

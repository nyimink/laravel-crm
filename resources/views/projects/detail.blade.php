@extends('layouts.app2')

@section('contents')
    <div class="container float-start ms-3 mt-3" style="width: 860px">
        <div class="card">
            <div class="card-body">
                @can('project-delete', $project)
                    <a href="{{ url("/projects/delete/$project->id") }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger float-end">Delete</a>
                    <a href="{{ url("/projects/edit/$project->id") }}" class="btn btn-warning float-end me-1">Edit</a>
                @endcan
                <h5 class="h4 card-title">
                    <b>{{ $project->title }}</b> <small> by </small> <span
                        class="text-success text-uppercase">{{ $project->client->company }} </span>
                </h5>
                <div class="card-subtitle mb-3 small text-muted">
                    {{ $project->created_at }}
                </div>
                <div class="card-text">
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Description:</span>
                        <span class="ms-1">{{ $project->description }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Assigned to:</span>
                        <span class="ms-1 text-success fw-semibold">{{ $project->user->name }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Project Deadline:</span>
                        <span class="ms-1 text-success fw-semibold">{{ $project->deadline }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

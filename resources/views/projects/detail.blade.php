@extends('layouts.app2')

@section('contents')
    <div class="container float-start ms-3 mt-3" style="width: 860px">
        <div class="card">
            <div class="card-body">
                @can('project-delete', $project)
                    <a href="{{ url("/projects/delete/$project->id") }}" onclick="return confirm('Are you sure to delete?')"
                        class="btn btn-danger float-end">Delete</a>
                    <a href="{{ url("/projects/edit/$project->id") }}" class="btn btn-warning float-end me-1">Edit</a>
                @endcan
                <h5 class="h4 card-title">
                    <b>{{ $project->title }}</b>
                    <div class="mt-2">
                        <i class="small"> by </i>
                        <a href="#" class="text-success text-decoration-none">
                            {{ $project->client->company }}
                        </a>
                    </div>
                </h5>
                <div class="card-text mt-5">
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Description:</span>
                        <span class="ms-1 fw-semibold">{{ $project->description }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Assigned to:</span>
                        <span class="ms-1 fw-semibold">{{ $project->user->name }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Project Given Date:</span>
                        <span class="ms-1 fw-semibold">{{ $project->created_at->format('d M Y') }}</span>
                    </div>
                    <div class="mb-2">
                        <span class="text-decoration-underline fst-italic">Project Deadline:</span>
                        <span class="ms-1 fw-semibold">{{ $project->deadline }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

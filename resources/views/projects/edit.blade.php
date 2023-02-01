@extends('layouts.app2')

@section('contents')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif
        <form method="post" class="mt-2 p-4 bg-white border">
            @csrf
            <h5 class="mb-3">Update Project</h5>
            <hr>
            <label for="title" >Title</label>
            <input type="text" name="title" class="form-control mb-4" value="{{ $project->title }}">

            <label for="description" >Description</label>
            <textarea type="text" name="description" class="form-control mb-4">{{ $project->description }}</textarea>

            <label for="deadline" >Deadline</label>
            <input type="date" name="deadline" class="form-control mb-4" value="{{ $project->deadline }}">

            <label for="user_id" >Assigned User</label>
            <select name="user_id" class="form-select mb-4">
                @foreach ($users as $user)
                    <option value="{{ $user['id'] }}"
                    @if ($project->user_id == $user->id)
                        selected
                    @endif>
                        {{ $user["name"] }}
                    </option>
                @endforeach
            </select>

            <label for="client_id" >Assigned Client</label>
            <select name="client_id" class="form-select mb-4">
                @foreach ($clients as $client)
                    <option value="{{ $client['id'] }}"
                    @if ($project->client_id == $client->id)
                        selected
                    @endif>
                        {{ $client["company"] }}
                    </option>
                @endforeach
            </select>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

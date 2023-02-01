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
            <h5 class="mb-3">Create Project</h5>
            <hr>
            <label for="title" >Title</label>
            <input type="text" name="title" class="form-control mb-4">

            <label for="description" >Description</label>
            <textarea type="text" name="description" class="form-control mb-4"></textarea>

            <label for="deadline" >Deadline</label>
            <input type="date" name="deadline" class="form-control mb-4">

            <label for="user_id" >Assigned User</label>
            <select name="user_id" class="form-select mb-4">
                @foreach ($users as $user)
                    <option value="{{ $user['id'] }}">
                        {{ $user["name"] }}
                    </option>
                @endforeach
            </select>

            <label for="client_id" >Assigned Client</label>
            <select name="client_id" class="form-select mb-4">
                @foreach ($clients as $client)
                    <option value="{{ $client['id'] }}">{{ $client["company"] }}</option>
                @endforeach
            </select>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

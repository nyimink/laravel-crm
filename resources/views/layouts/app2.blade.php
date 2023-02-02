@extends('layouts.app')

@section('content')
    <div class="container-fluid">

            <div class="row">
                <div class="col-2">
                    <div class="container">
                        <div class="list-group">

                                <a href="{{ url("/dashboard") }}" class="text-primary list-group-item text-center text-lg-start list-group-item-action p-3 text-decoration-none ms-2">Dashboard</a>

                                <a href="{{ url("/users") }}" class="text-primary list-group-item text-center text-lg-start list-group-item-action p-3 text-decoration-none ms-2">Users</a>

                                <a href="{{ url("/clients") }}" class="text-primary list-group-item text-center text-lg-start list-group-item-action p-3 text-decoration-none ms-2">Clients</a>

                                <a href="{{ url("/projects") }}" class="text-primary list-group-item text-center text-lg-start list-group-item-action p-3 text-decoration-none ms-2">Projects</a>

                                <a href="#" class="text-primary list-group-item text-center text-lg-start list-group-item-action p-3 text-decoration-none ms-2">Tasks</a>

                            <div class="flex-grow"></div>
                            @auth
                                    <form action="{{ url("/logout" )}}" method="post">
                                        @csrf
                                        <button type="submit" onclick="return confirm('Are you sure to logout?') " class="text-primary list-group-item text-center text-lg-start list-group-item-action p-3 text-decoration-none ms-2">Logout</button>
                                    </form>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    @yield('contents')
                </div>
            </div>

    </div>
@endsection

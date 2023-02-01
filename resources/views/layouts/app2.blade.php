@extends('layouts.app')

@section('content')
    <div class="container-fluid">

            <div class="row">
                <div class="col-2">
                    <div class="container">
                        <ul class="list-group">
                            <li class="list-group-item text-center text-lg-start list-group-item-action p-3">
                                <a href="#" class="text-decoration-none ms-2">Dashboard</a>
                            </li>
                            <li class="list-group-item text-center text-lg-start list-group-item-action p-3">
                                <a href="#" class="text-decoration-none ms-2">Users</a>
                            </li>
                            <li class="list-group-item text-center text-lg-start list-group-item-action p-3">
                                <a href="{{ url("/clients") }}" class="text-decoration-none ms-2">Clients</a>
                            </li>
                            <li class="list-group-item text-center text-lg-start list-group-item-action p-3">
                                <a href="{{ url("/projects") }}" class="text-decoration-none ms-2">Projects</a>
                            </li>
                            <li class="list-group-item text-center text-lg-start list-group-item-action p-3">
                                <a href="#" class="text-decoration-none ms-2">Tasks</a>
                            </li>
                            <div class="flex-grow"></div>
                            @auth
                                <li class="list-group-item text-center text-lg-start list-group-item-action p-3">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();" class="text-decoration-none ms-2">Logout</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="col-10">
                    @yield('contents')
                </div>
            </div>

    </div>
@endsection

@extends('layouts.app2')

@section('contents')
    <div class="container ms-3 p-3" style="width:1060px">

        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif

        <form method="post" class="mt-2 p-4 bg-white border">
            <h5 class="mb-3">Create Client</h5>
            <hr>
            @csrf
            <label for="">Company Name</label>
            <input type="text" name="company" class="form-control mb-3">

            <label for="">VAT</label>
            <input type="text" name="vat" class="form-control mb-3">

            <label for="">Address</label>
            <textarea name="address" class="form-control mb-3"></textarea>

            <label for="">Phone Number</label>
            <input type="text" name="phone" class="form-control mb-3">

            <label for="">Email Address</label>
            <input type="text" name="email" class="form-control mb-3">

            <button class="btn btn-success mt-2">Save</button>
        </form>
    </div>
@endsection

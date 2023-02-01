<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $clients = Client::all();
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function add()
    {
        return view('clients.add');
    }

    public function create()
    {
        $validator = validator(request()->all(), [
            "company" => "required",
            "vat" => "required",
            "address" => "required",
            "phone" => "required",
            "email" => "required",
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $client = new Client;
        $client->company = request()->company;
        $client->vat = request()->vat;
        $client->address = request()->address;
        $client->phone = request()->phone;
        $client->email = request()->email;
        $client->save();

        return redirect("/clients")->with("info", "A client added");
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view("clients.edit", [
            "client" => $client
        ]);
    }

    public function update($id)
    {
        $validator = validator(request()->all(), [
            "company" => "required",
            "vat" => "required",
            "address" => "required",
            "phone" => "required",
            "email" => "required",
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $client = Client::find($id);
        $client->company = request()->company;
        $client->vat = request()->vat;
        $client->address = request()->address;
        $client->phone = request()->phone;
        $client->email = request()->email;
        $client->save();

        return redirect("/clients");
    }

    public function delete($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect("/clients")->with("info", "A Client \"$client->company\" Deleted.");
    }
}

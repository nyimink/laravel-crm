<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $projects = Project::latest()->paginate(15);
        return view('projects.index', [
            "projects" => $projects
        ]);
    }

    public function detail($id)
    {
        $project = Project::find($id);
        return view('projects.detail', [
            "project" => $project
        ]);
    }

    public function add()
    {
        $clients = Client::all();
        $users = User::all();
        return view("projects.add", [
            "clients" => $clients,
            "users" => $users
        ]);
    }

    public function create()
    {
        $validator = validator(request()->all(), [
            "title" => "required",
            "description" => "required",
            "deadline" => "required",
            "user_id" => "required",
            "client_id" => "required",
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $project = new Project;
        $project->title = request()->title;
        $project->description = request()->description;
        $project->deadline = request()->deadline;
        $project->user_id = request()->user_id;
        $project->client_id = request()->client_id;
        $project->save();

        return redirect("/projects")->with("info", "New Project Added.");
    }

    public function edit($id)
    {
        $project = Project::find($id);
        $users = User::all();
        $clients = Client::all();
        if (Gate::allows('project-edit', $project)) {
            return view('projects.edit', [
                "project" => $project,
                "users" => $users,
                "clients" => $clients,
            ]);
        } else {
            return back();
        }
    }

    public function update($id)
    {
        $validator = validator(request()->all(), [
            "title" => "required",
            "description" => "required",
            "deadline" => "required",
            "user_id" => "required",
            "client_id" => "required",
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $project = Project::find($id);
        $project->title = request()->title;
        $project->description = request()->description;
        $project->deadline = request()->deadline;
        $project->user_id = request()->user_id;
        $project->client_id = request()->client_id;
        $project->save();

        return redirect("/projects")->with("info", "A Project Updated.");
    }

    public function delete($id)
    {
        $project = Project::find($id);
        if (Gate::allows('project-delete', $project)) {
            $project->delete();
            return redirect("/projects")->with("info", "A Project \"$project->title\" is Deleted.");
        } else {
            return redirect("/projects");
        }
    }
}

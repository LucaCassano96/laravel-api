<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ApiController extends Controller
{
    public function testApi(){
        return response() -> json([
            "message" => "Hello world"
        ]);
    }


    public function projectsIndex(){

        $projects = Project :: with("type")-> paginate(4);
        return response() -> json([
            "projects" => $projects
        ]);
    }


    public function AppDetailsProject($id){

        $project = Project::with('type')->find($id);

        return response() -> json([
            "project" => $project
        ]);
    }
}

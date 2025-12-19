<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectAdminController extends Controller
{
    //
    public function allProjects()
    {
        return Project::all();
    }

    public function getProject($slug)
    {
        return Project::where('slug', $slug)->firstOrFail();
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class publicController extends Controller
{
    function home()
    {
        return view('public/home');
    }

    function projectInfo($id)
    {
        $project = [
            'id' => $id
        ];
        return view('public/projects/project-info')->withProject($project);
    }

    function projects()
    {
        $projects = project::all();
        return view('public/projects/projects', compact('projects'));
    }

    function login()
    {
        return view('public/login/login');
    }

    function LegalNotices()
    {
        return view('public/legal-notices');
    }
}

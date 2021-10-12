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

    function contact()
    {
        return view('public/contact/contact');
    }

    function contactConfirm()
    {
        return view('public/contact/confirm');
    }

    function login()
    {
        return view('public/login/login');
    }
}

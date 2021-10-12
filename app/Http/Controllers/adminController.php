<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function dashboard()
    {
        return view('admin/dashboard');
    }

    
    function projects()
    {
        return view('admin/projects/projects');
    }

    function addProjects()
    {
            return view('admin/projects/add-project');
    }

    function projectInfo($id)
    {       
            $project = [
                'id' => $id
            ];
            return view('admin/projects/project-info')->withProject($project);
    }
    function updateProject($id)
    {       
            $project = [
                'id' => $id
            ];
            return view('admin/projects/update-project')->withProject($project);
    }
    function projectUpdated($id)
    {       
            $project = [
                'id' => $id,
            ];
            $message = [
                'message' => 'The project has been updated.'
            ];
            return view('admin/projects/project-info')->withProject($project)->withMessage($message);
    }
    function deleteProject($id)
    {       
            $project = [
                'id' => $id
            ];
            return view('admin/projects/delete-project')->withProject($project);
    }
    function projectDeleted()
    {       
            $message = [
                'message' => 'The project has been deleted.'
            ];
            return view('admin/projects/project-deleted')->withMessage($message);
    }
    
}

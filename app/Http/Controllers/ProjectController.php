<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Repository\Eloquent\ProjectRepository;

class ProjectController extends Controller
{
    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository){
        $this->projectRepository = $projectRepository;
    }

    public function adminDashboard(){
        return view("AdminDashboard");
    }

    public function addProject(){
        return view("addproject");
    }

    public function createProject(ProjectRequest $request){
        // dd($request);
        if(!$this->projectRepository->addProject($request->validated())){
            return redirect()->back()->withErrors("Failed to Add Project");
        }

        return redirect()->back()->with('message', "Project Added Successfully");
    }

    public function updateProject($projectId, ProjectRequest $request){
        if(!$this->projectRepository->updateProject($projectId, $request->validated())){
            return redirect()->back()->withError("Update failed");
        }

        return redirect()->route('dashbaord.admin')->with('message', "Update was done succesfully");
    }

    public function deleteProject($projectID){
        if(!$this->projectRepository->deleteProject($projectID)){
            return redirect()->route("dashbaord.admin")->withErrors("Couldn't Deleet Project");
        }

        return redirect()->route("dashbaord.admin")->with("message", 'Deleted Succesfully');
    }
}
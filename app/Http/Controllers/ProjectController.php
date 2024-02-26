<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Repository\Eloquent\ProjectRepository;

class ProjectController extends Controller
{
    protected $projectRepository;
    protected $project;

    public function __construct(ProjectRepository $projectRepository, Project $project){
        $this->projectRepository = $projectRepository;
        $this->project = $project;
    }

    public function adminDashboard( ){
        return view("AdminDashboard",  ['projects' => $this->projectRepository->getAllProjects()] );
    }

    public function addProject(){
        return view("addproject");
    }

    public function createProject(Request $request){

        $this->project->name = $request->input('name');
        $this->project->description = $request->input('description');
        $this->project->category = $request->input('category');
        $this->project->client = $request->input('client');
        $this->project->date = $request->input('date');
        $this->project->github = $request->input('github');
        $this->project->url = $request->input('url');
        $this->project->image1 = $request->input('image1');
        $this->project->image2 = $request->input('image2');
        $this->project->image3 = $request->input('image3');

        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/product/', $filename);
            $this->project->image1 = $filename;
        }else{
            return $request;
            $this->project->image1 = '';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/product/', $filename);
            $this->project->image2 = $filename;
        }else{
            return $request;
            $this->project->image2 = '';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/product/', $filename);
            $this->project->image3 = $filename;
        }else{
            return $request;
            $this->project->image3 = '';
        }

        if(!$this->project->save()){
            return redirect()->route('project.add')->withErrors("Failed to Add Project");
        }

        // if(!$project = $this->projectRepository->addProject($request->validated())){
        //     return redirect()->back()->withErrors("Failed to Add Project");
        // }

        return redirect()->route('dashbaord.admin')->with('message', "Project Added Successfully");
    }

    public function updateProject($projectId, ProjectRequest $request){
        if(!$this->projectRepository->updateProject($projectId, $request->validated())){
            return redirect()->route('update.details')->withError("Update failed");
        }

        return redirect()->route('dashbaord.admin')->with('message', " Project was edited succesfully");
    }

    public function deleteProject($projectID){
        if(!$this->projectRepository->deleteProject($projectID)){
            return redirect()->route("dashbaord.admin")->withErrors("Couldn't Deleet Project");
        }

        return redirect()->route("dashbaord.admin")->with("message", 'Project Deleted Succesfully');
    }
}

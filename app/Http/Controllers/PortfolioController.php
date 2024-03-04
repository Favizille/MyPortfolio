<?php

namespace App\Http\Controllers;

use App\Models\Project;



class PortfolioController extends Controller
{
    protected $project;

    public function __construct(Project $project){
        $this->project = $project;
    }

    public function portfolio(){
        return view("mypage", ['projects' => $this->project->all()]);
    }

    public function getPortfolioDetails($id){
        return view("portfoli-details", ["project" => $this->project->find($id)]);
    }

    public function updateDetails($projectID){
        return view('updatedetails', ['project' => $this->project->find($projectID)]);
    }
}

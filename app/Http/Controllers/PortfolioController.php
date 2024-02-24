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
        return view("mypage");
    }

    public function getPortfolioDetails(){
        return view("portfoli-details");
    }

    public function updateDetails($projectID){
        return view('updatedetails', ['project' => $this->project->find($projectID)]);
    }
}

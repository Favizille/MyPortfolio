<?php
namespace App\Repository\Eloquent;

use App\Models\Project;

class ProjectRepository
{
    protected $project;
    public function __construct(Project $project){}

    public function addProject($data){
        return $this->project->create($data);
    }

    public function updateProject($id, array $data){

       return $this->project->where("id", $id)->update($data);
    }

}

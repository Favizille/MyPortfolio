<?php
namespace App\Repository\Eloquent;

use App\Models\Project;

class ProjectRepository
{
    protected $project;
    public function __construct(Project $project){
        $this->project = $project;
    }

    public function addProject(array $data): Project{
        return $this->project->create($data);
    }

    public function getProject(int $id): Project{
        return $this->project->where('id', $id)->first();
    }

    public function getAllProjects(){
        return $this->project->all();
    }

    public function updateProject(int $id, array $data): Project{

       return $this->project->where("id", $id)->update($data);
    }

    public function deleteProject(int $id):bool
    {
        if(!$this->project->where('id', $id)->delete()){
            return false;
        };

        return true;
    }

}

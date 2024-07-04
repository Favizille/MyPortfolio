<?php
namespace App\Repository\Eloquent;

use App\Models\Service;

class ProjectRepository
{
    protected $service;

    public function __construct(Service $service){
        return $this->service = $service;
    }

    public function store($data){
        
    }
}
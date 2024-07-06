<?php
namespace App\Repository\Eloquent;

use App\Models\Service;

class ServiceRepository
{
    protected $service;

    public function __construct(Service $service){
        return $this->service = $service;
    }

    public function store($data){
        return $this->service->create($data);
    }

    public function getServices(){
       return $this->service->all();
    }

    public function updateService(int $id, array $data){
        return $this->service->where('id', $id)->update($data);
    }

    public function deleteService(int $id):bool
    {
        if(!$this->service->where('id', $id)->delete()){
            return false;
        };

        return true;
    }
}
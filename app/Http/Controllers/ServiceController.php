<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Repository\Eloquent\ServiceRepository;

class ServiceController extends Controller
{
    protected $serviceRepository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function addService(){
        return view('addService');
    }

    public function getServices(){
        $services = $this->serviceRepository->getServices();
        return view ('services', ['services' => $services]);
    }

    public function store(ServiceRequest $request){
        $stored = $this->serviceRepository->store($request->validated());

        if(!$stored){
            return redirect()->route('addService')->withErrors('Service not addeded successfully');
        }

        return $this->getServices();
    }

    public function updateService(Request $request, $serviceID){
        $updated = $this->serviceRepository->updateService($serviceID,$request->validated());

        if(!$updated){
            return redirect()->route("services")->withErrors('Update failed');
        }

        return redirect()->route("services")->with('message', " Project was edited succesfully");
    }

    public function deleteService($serviceID){
        if(!$this->serviceRepository->deleteService($serviceID)){
            return redirect()->route("services")->withErrors("Couldn't Deleet Project");
        }

        return redirect()->route("services")->with("message", 'Project Deleted Succesfully');
    }
}

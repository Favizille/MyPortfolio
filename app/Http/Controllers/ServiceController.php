<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function addService(){
        return view('addService');
    }

    public function getServices(){
        $services  =$this->service->all();
        return view ('services', ['services' => $services]);
    }

    public function store(ServiceRequest $request){
        $stored = $request->validated();
    }
}

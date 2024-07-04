@extends('Layouts.master')
  @section('content')
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>

            <li class="nav-item ">
              <a class="nav-link" data-toggle="collapse" href="" >
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Project</span>
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/icons/mdi.html">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Resume</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('services')}}">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Services</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Notification</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Available Services </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route("dashbaord.admin")}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">services</li>
                </ol>
              </nav>
            </div>
           
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> ID </th>
                              <th> Image </th>
                              <th> Name </th>
                              <th> Description </th>
                                <a href="{{route('addService')}}" class="btn btn-success mb-4">Add New</a>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($services as $service)
                            @if ($user->name === "Admin")
                                <tr hidden>
                                    <td class="py-1">
                                    {{$service->id}}
                                    </td>
                                    <td> {{$service->name}}</td>
                                    <td> {{$service->email}} </td>
                                    <td> {{$service->created_at}} </td>
                                </tr>
                            @else
                                <tr>
                                    <td class="py-1">
                                    {{$service->id}}
                                    </td>
                                    <td> {{$service->name}}</td>
                                    <td> {{$service->email}} </td>
                                    <td> {{$service->created_at}} </td>
                                </tr>
                            @endif

                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          
    @endsection

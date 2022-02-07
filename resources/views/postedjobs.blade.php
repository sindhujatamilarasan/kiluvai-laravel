<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Webpixels CSS */
/* Utility and component-centric Design System based on Bootstrap for fast, responsive UI development */
/* URL: https://github.com/webpixels/css */

@import url(https://unpkg.com/@webpixels/css@1.1/dist/index.css);
#dataTable {
   
    flex-flow: row nowrap;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-align:center;
  
   
}
.truncate {
  max-width:10px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color:#1f7048;
}
table.table td a.delete {
    color: #E34724;
}

</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css">
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" 
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
</head>
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <img src="https://www.kiluvai.com/sites/default/files/kiluvai-logo.png" alt="...">
            </a>

            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admindash')}}">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('jobpost')}}">
                            <i class="bi bi-bar-chart"></i> Post a New Job
                        </a>
                    </li>
                    
                <li class="nav-item">
                        <a class="nav-link" href="{{url('postedjobs')}}">
                            <i class="bi bi-bookmarks"></i><b>Posted jobs</b>
                        </a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people"></i> Users
                        </a>
                    </li>--->
                </ul>
                <!-- Divider -->
              
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-square"></i> Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('logout')}}">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                             <h1 class="h2 mb-0 ls-tight">Admin</h1>
                        </div>
                </div>
            </div>
        </header>
        <br>
                <div class="card shadow border-0 mb-3">
                    <div class="card-header">
                        <h4 class="mb-0">Posted Jobs</h4>
                    </div>
                </div>
                    <div class="table-responsive">
                        <table class="table table-striped" width="100%" id="dataTable">
                            <thead class="thead-light">
                          
                                <tr>
                                    <th scope="col">Job_id</th>
                                    <th scope="col">Job title</th>
                                    <th scope="col">Job category</th>
                                    <th scope="col">Job Description</th>
                                    <th scope="col">Job Posted date</th>
                                    <th scope="col">Job status</th>
                                 
                                    <th scope="col">Action</th>
                                  
                                </tr>
                            </thead>
                          
                            
                            <tbody>
                           
                                 
                            @foreach($job as $data)
                         
                                <tr>
                                    <td>
                                    {{$data[('id')]}}    
                                    </td>
                                    <td>
                                    {{$data[('job_title')]}} 
                                    </td>
                                    <td>
                                    {{$data[('job_cat')]}} 
                                    </td>
                                    <td class="truncate">
                                   {{strip_tags($data[('job_desc')])}}
                                    </td>
                                    <td>
                                    {!! date('d/M/y', strtotime($data->created_at)) !!}
                                    </td>
                               
                                      <td>
                                    @if($data[('job_stat')]==1)
                                        Published
                                    @else
                                        Unpublished
                                    @endif
                                                                        
                                      </td>
                                      
                                 
                                     
                                    <td style="width: 20%;">
								<a href="{{url('view',[$data['id']])}}"  class="view">
									<span class="fa-stack" >
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="{{url('edit',[$data['id']])}}"  class="edit">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="{{route('jobs/delete',[$data['id']])}}"  onclick="return confirm('Are you sure you want to perform this action ?')"  class="delete">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>

     
<script>
    $(document).ready(function() {
          $('#dataTable').DataTable();
    });
</script>



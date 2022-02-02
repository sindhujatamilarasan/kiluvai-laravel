<head>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->
   <style>
      /* Webpixels CSS */
      /* Utility and component-centric Design System based on Bootstrap for fast, responsive UI development */
      /* URL: https://github.com/webpixels/css */
      @import url(https://unpkg.com/@webpixels/css@1.1/dist/index.css);
      .note
      {
      text-align: center;
      height: 80px;
      background: -webkit-linear-gradient(left, #0072ff, #8811c5);
      color: #fff;
      font-weight: bold;
      line-height: 80px;
      padding: 5%;
      padding-top: 2%;
      }
      .form-content
      {
      padding: 5%;
      border: 1px solid #ced4da;
      margin-bottom: 2%;
      align:center;
      }
      .form-control{
      border-radius:1.5rem;
      }
      .btnSubmit
      {
      border:none;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background: #0062cc;
      color: #fff;
      }
      #main{
      padding: 3%;
      align:center;
      }
   </style>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css">
   <!------ Include the above in your HEAD tag ---------->
   <link rel="stylesheet" 
      href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
   </style>
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
<div class="container register-form" id="main">
<div class="form">
   <div class="note">
      <h3>Edit Job Details !!!</h3>
   </div>
   <div class="form-content">
      <div class="row ">
         <div class="col-md-6">
            <form method="POST" action="{{ url('update/'. $job->id ) }} ">
               @csrf 
               <div class="form-group">
                  <label>
                     <h4 class="title">Job status <span style="color:red">*</span></h4>
                  </label>
                  <br>
                  <input type="radio" name='job_stat' value="1" {{ ($job->job_stat=="1")? "checked" : "" }}/> Published<br/>
                  <input type="radio" name='job_stat' value="0"{{ ($job->job_stat=="0")? "checked" : "" }} > Unpublished<br/>
               </div>
               <div class="form-group">
                  <label>
                     <h4 class="title">Job title <span style="color:red">*</span></h4>
                  </label>
                  <input type="text" name="job_title" value="{{$job->job_title}}"  class="form-control" class="@error('title') is-invalid @enderror form-control"/>
                  @error('title')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <label>
                     <h4 class="title">Job category <span style="color:red">*</span></h4>
                  </label>
                  <br>
                  <input type="radio" name='job_cat'  value="fresher"{{ ($job->job_cat=="fresher")? "checked" : "" }}> Fresher<br/>
                  <input type="radio" name='job_cat' value=" Experienced" {{ ($job->job_cat=="Experienced")? "checked" : "" }} > Experienced <br/>
                  <input type="radio" name='job_cat'  value="Both" {{ ($job->job_cat=="Both")? "checked" : "" }}> Both<br/>
               </div>
               <div class="form-group">
                  <label>
                     <h4 class="title">Short Description <span style="color:red">*</span></h4>
                  </label>
                  <br>
                  <textarea class="textarea"  cols="80" rows="4"  name="short_desc">{{strip_tags($job->short_desc)}}</textarea>
               </div>
               <div class="form-group">
                  <label>
                     <h4 class="title">Job Description <span style="color:red">*</span></h4>
                  </label>
                  <textarea id="summernote" name="job_desc" >{{strip_tags($job->job_desc)}}</textarea>
               </div>
         </div>
      </div>
      <button type="submit" class="btnSubmit" >Update</button>
      </form>
   </div>
</div>
<script>
   $('#summernote').summernote({
       height:250,
   toolbar: [
   ['formate', ['bold', 'italic', 'underline']],
   ['style', ['style']],
   ['para', ['ul', 'ol', 'paragraph']], 
   ['action', ['undo', 'redo']],
   ['Insert', ['picture']],
   ['link', ['link', 'clear','codeview','help']], 
   ],
   styleTags: [
   'p',
       'h2', 'h3', 'h4', 'h5', 'h6'
   ],
     });
   
   $(document).ready(function() {
         $('#dataTable').DataTable();
   });
   
   
   
   
   
   
</script>
<head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->
<style>
   
     .navbar{
     background: #fff;
     padding-top: 15px;
     padding-bottom:4px;
     box-shadow: 1px 3px 4px 0 #adadad33;
}
 .navbar-light .navbar-brand {
     color: #2196F3;

   
}
 .navbar-light .navbar-nav .nav-link {
     color: #008FD4;
}
 .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
     color: #008FD4;
}
 .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
     color: #fff;
}
 .navbar-light .navbar-nav .nav-link{
     padding-top: 22px;
     padding-bottom: 22px;
     transition: 0.3s;
     padding-left: 24px;
     padding-right: 24px;
         font-size: 14px;
}
 .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
     background: #1ebdc2;
     transition: 0.3s;
}
.dropdown-item:focus, .dropdown-item:hover {
    color: #fff;
    text-decoration: none;
    background-color: #1ebdc2 !important;
}
.sm-menu{
    border-radius: 0px;
    border: 0px;
    top: 97%;
    box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
}
.dropdown-item {
    color: #3c3c3c;
        font-size: 14px;
}
.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #2196F3;
}
.navbar-toggler{
    outline: none !important;
}
.navbar-tog{
    color: #1ebdc2;
}
.megamenu-li {
	position: static;
}

.megamenu {
	position: absolute;
	width: 100%;
	left: 0;
	right: 0;
	padding: 0px;
}
.megamenu h6{
    margin-left: 0px;
}
.megamenu i{
    width: 20px;
}
body{
    background:#f5f5f5;
    margin-top:20px;}

/* ===== Career ===== 
.career-form {

  text-align:center;
}*/

.career-form .form-control {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
}

.career-form .form-control::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #fff;
}

.career-form .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

.career-form .form-control:-ms-input-placeholder {
  /* IE 10+ */
  color: #fff;
}

.career-form .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

.career-form .custom-select {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
  width: 100%;
  border-radius: 5px;
  text-align: left;
  height: auto;
  background-image: none;
}

.career-form .custom-select:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.career-form .select-container {
  position: relative;
}

.career-form .select-container:before {
  position: absolute;
  right: 15px;
  top: calc(50% - 14px);
  font-size: 18px;
  color: #ffffff;
  content: '\F2F9';
  font-family: "Material-Design-Iconic-Font";
}

.filter-result .job-box {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
  padding: 10px 35px;
}

ul {
  list-style: none; 
}

.list-disk li {
  list-style: none;
  margin-bottom: 12px;
}

.list-disk li:last-child {
  margin-bottom: 0;
}

.job-box .img-holder {
  height: 65px;
  width: 65px;
  background-color: #4e63d7;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
  font-family: "Open Sans", sans-serif;
  color: #fff;
  font-size: 22px;
  font-weight: 700;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 65px;
}

.career-title {
  background-color: #4e63d7;
  color: #fff;
  padding: 15px;
  text-align: center;
  border-radius: 10px 10px 0 0;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
}

.job-overview {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
}

@media (min-width: 992px) {
  .job-overview {
    position: -webkit-sticky;
    position: sticky;
    top: 70px;
  }
}

.job-overview .job-detail ul {
  margin-bottom: 28px;
}

.job-overview .job-detail ul li {
  opacity: 0.75;
  font-weight: 600;
  margin-bottom: 15px;
}

.job-overview .job-detail ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}

.job-overview .overview-bottom,
.job-overview .overview-top {
  padding: 35px;
}

.job-content ul li {
  font-weight: 600;
  opacity: 0.75;
  border-bottom: 1px ;
  padding: 10px 5px;
}

@media (min-width: 768px) {
  .job-content ul li {
    border-bottom: 0;
    padding: 0;
  }
}

.job-content ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}
.mb-30 {
    margin-bottom: 30px;
}
.title{

 margin-left: 400px;
position:absolute;
font-family: inherit;
font-size:45px;
color:#008FD4;
line-height: 1.1;
}
.form-check-label2{
  margin-left: 100px;
position:absolute;
font-family: inherit;
font-weight:100px;
color:#008FD4;
font-size:30px;
line-height: 1.1;
}
.form-check-label1{
  margin-left: 65px;

font-family: inherit;
font-weight:100px;
color:#008FD4;
font-size:30px;
line-height: 1.1;
}


</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand navbar-light sticky-top">
        <a class="navbar-brand" ><img src="https://www.kiluvai.com/sites/default/files/kiluvai-logo.png"></a>
           
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="mobile_nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-centre">
        </ul>
        <ul class="navbar-nav navbar-light">
            <li class="nav-item"><a class="nav-link" href="{{url('index')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            
                    </div>
                </div>
    
        </div>

</nav>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 20ms;" src="https://www.dilipbuildcon.com/wps/wcm/connect/d43bceae-faa7-4f4b-a31b-49b3e3789f42/Join_Our_Team.jpg?MOD=AJPERES&CACHEID=ROOTWORKSPACE-d43bceae-faa7-4f4b-a31b-49b3e3789f42-mshI-x3" width="100%" height="350">
    </div>
    <div class="carousel-item">
    <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 20ms;" src="https://www.dilipbuildcon.com/wps/wcm/connect/d43bceae-faa7-4f4b-a31b-49b3e3789f42/Join_Our_Team.jpg?MOD=AJPERES&CACHEID=ROOTWORKSPACE-d43bceae-faa7-4f4b-a31b-49b3e3789f42-mshI-x3" width="100%" height="350">
    </div>
    <div class="carousel-item">
    <img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 20ms;" src="https://www.dilipbuildcon.com/wps/wcm/connect/d43bceae-faa7-4f4b-a31b-49b3e3789f42/Join_Our_Team.jpg?MOD=AJPERES&CACHEID=ROOTWORKSPACE-d43bceae-faa7-4f4b-a31b-49b3e3789f42-mshI-x3" width="100%" height="350">

     </div>
  </div>
</div>
@csrf  

<div class="container">
            <div class="row">
                 <div class="col-lg-10 mx-auto mb-4">
                    <div class="section-title text-center ">
                       
                       
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">

                        <form action="#" class="career-form mb-60">
                            <div class="row">
                                <div class="col-md-6 col-lg-5 my-3">
                                    <div>
                                    <h3  class="title">Careers</h3>
                                    </div>
                                </div>
                                
                              </div>
                         
               
                              <br><br>
                   @foreach($job as $test)
                 
               
                      
                          <div class="filter-result">
                            <p class="mb-30 ff-montserrat"></p>
                        
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                             
                                    <div class="job-content">
                                        <h4 class="text-center text-md-left"><b><u>{{$test->job_title}}</b></u></h4><br>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-pin mr-2"></i><b> {{$test->job_cat}} </b><br>
                                            
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-money mr-2"></i> <b> Location :</b> Chennai<br>
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-time mr-2"></i> Full Time
                                            </li>
                                        </ul>
                                   
                                     
                              
                                        <div class="job-content">
                                   <h5 class="text-center text-md-left">
                                     Job description</h5>
                                          <p>{{strip_tags($test->job_desc)}}</p>
                                  </div> 
                                </div>
                                </div>
                               
                               
                              
                             
                                <button type="button" class="btn btn-primary"    data-toggle="modal" data-target="#job_type_{{$test->id}}">
                                Apply Now
                                </button>
                             
                                <!-- Modal -->
                               
                                <div class="modal fade" id="job_type_{{$test->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                
                                    <h3 class="modal-title"><b>Select  an option</h3></b>
                                      
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                  
                                    <div class="modal-body">
                                    
                                    <a href="job/{{$test->id}}/{{('fresher')}}">
                            
                                    <img class="rounded-circle float-left" style ='width :170px; margin-top:10px; margin-left:40px' src="https://thumbs.dreamstime.com/b/education-icon-eligibility-149246089.jpg" data-holder-rendered="true">
                                    </a>
                                    <a href="job/{{$test->id}}/{{('exp')}}">
                                    <img class="rounded-circle float-right" style ='width :210px; margin-bottom:50px;' src="https://thumbs.dreamstime.com/b/experience-icon-experience-147077789.jpg" data-holder-rendered="true">
                                    </a>
                                      <div class="form-check form-check-inline">
                                                  <label class="form-check-label1" for="inlineCheckbox1">Fresher</label>
                                                  </div>
                                       <div class="form-check form-check-inline">
                      
                                  <label class="form-check-label2" for="inlineCheckbox2">Experienced</label>
                                  
                                      </div>
                                  
                                    </div>
                             
                                 
                                    </div>
                                    </div>
                           
                                    
                                 
                               
                                    </div>
                                </div>
                                </div>
                            
                          @endforeach 
                       
                     
                    </div>
                    </form>
                   
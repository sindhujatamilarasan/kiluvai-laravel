
<head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style>
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
.navbar-light .navbar-nav .nav-link {
     color: #008FD4;
}
#main{
  
}
#dvtext {
  display: none;
}
#chkYes:checked ~ #dvtext {
  display:inline-block;
}
</style>
</head>
<body>
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


<div class="container register-form" id="main">
    
<div class="card" style="width: 69.5rem;">
  
  <div class="card-body">
  <h4 class="card-title">Job Description</h4>
                         <p> The role is responsible for designing, coding and modifying websites, from layout to function and according to a client’s specifications. Strive to create visually appealing sites that feature user-friendly design and clear navigation.</p>
                        <div id="collapse" style="display:none">
                            <h4 class="title">Web Developer Job Duties:</h4>
                                <p>Regular exposure to business stakeholders and executive management, as well as the authority and scope to apply your expertise to many interesting technical problems.
                                    Candidate must have a strong understanding of UI, cross-browser compatibility, general web functions and standards.
                                    The position requires constant communication with colleagues.
                                    Experience in planning and delivering software platforms used across multiple products and organizational units.
                                    Strong grasping knowledge in coding.</p>
                            <h4 class="title">Web Developer Skills and Qualifications:</h4>
                                <p>JavaScript, JQuery, HTML, HTML5, CSS, CSS3, Web Programming Skills, E-Commerce, Teamwork, Verbal Communication, cross-browser compatibility, Web User Interface Design (UI), Security Principles, Object-Oriented Design, Web Services (REST/SOAP), Multimedia Content Development, API’s</p>
                        </div>
                <a href="#collapse" class="nav-toggle">Read More</a>
   
  </div>
</div>

            <div class="form">
                <div class="note">
         
                    <h3>Fresher</h3>
                </div>
               
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                        <form method="POST" action="{{url('store-form')}}" enctype="multipart/form-data">
                            @csrf                                                                                                                                   
                            <div class="form-group">
                           
                                <label><h4 class="title">Name <span style="color:red">*</span></h4></label>
                                <input type="text" name="name" placeholder="Your Full Name"  value="{{ Request::old('name') }}" class="form-control" class="@error('name') is-invalid @enderror form-control"/>
                                @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                            <div class="form-group">
                            <label><h4 class="title">Graduation <span style="color:red">*</span> </h4></label>
                                <input type="text"  name="Graduation" class="form-control"   value="{{ Request::old('Graduation') }}" class="@error('Graduation') is-invalid @enderror form-control" placeholder="Your Graduation details"/>
                                @error('Graduation')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                           
                        </div>
                        <div>
                        <input type="hidden" name='hidden' value="{{$id}}"/>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label><h4 class="title">Email <span style="color:red">*</span></h4></label>
                                <input type="text" class="form-control" name="email" value="{{ Request::old('email') }}" placeholder="Your Email"class="@error('email') is-invalid @enderror form-control" >
                                @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                            <div class="form-group">
                            
                            <label><h4 class="title"> Post Graduation</h4></label>
                                <input type="text" class="form-control" name="pg" value="{{ Request::old('pg') }}" placeholder="your Post Graduation details if applicable...." >
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label><h4 class="title">Current Location <span style="color:red">*</span></h4></label><br>
                            <input type="radio" id="chennai" value="chennai" name="location" checked="checked">
                            <label for="chennai"> I live in chennai</label>
                            <br>
                            <input type="radio" id="outside_chennai" value="outside_chennai" name="location">
                            <label for="outside_chennai">  I'm outside of Chennai, willing to relocate chennai</label><br>
                                            <input type="radio" id="chkYes"  name="location">
                            <label for="outside_chennai"> others : </label>
                            <div id="dvtext"><input type="text" value="" name="other_location" /></div>
                              </div>
                            <div class="form-group">
                            
                            <label><h4 class="title">Phone Number <span style="color:red">*</span></h4></label>
                            <input  type="num" class="form-control" aria-label="Card Holder" value="{{ Request::old('phone') }}"class="@error('phone') is-invalid @enderror form-control"placeholder="Your Contact Number" name="phone" aria-describedby="basic-addon1"  />
                            @error('phone')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                   
                        </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label><h4 class="title" class="@error('skill') is-invalid @enderror form-control">Skills <span style="color:red">*</span></h4></label><br>
                            <input type="checkbox" name='skill[]'  value="PHP" > PHP  <br/>
                        <input type="checkbox" name='skill[]' value="JavaScript"> JavaScript <br/>
                        <input type="checkbox" name='skill[]' value="jQuery" > jQuery <br/>
                        <input type="checkbox"  name='skill[]' value="Angular JS " > Angular JS <br/>
                        @error('skill')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                            <div class="form-group">
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                           
                            </div>
                           
                            <div class="form-group">
                            
                            <label><h4 class="title"> Upload your resume(accept only pdf) <span style="color:red">*</span></h4></label>
                                <input type="file" class="form-control" name="file" value="{{ Request::old('file') }}"class="@error('file') is-invalid @enderror form-control" accept="application/pdf, application/vnd.ms-excel">
                                @error('file')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                            
                        </div>
</div>
                       
                    <button type="submit" value="" class="btnSubmit">Submit</button>
                    </div>
</form>
              
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.nav-toggle').click(function () {
                var collapse_content_selector = $(this).attr('href');
                var toggle_switch = $(this);
                $(collapse_content_selector).toggle(function () {
                    if ($(this).css('display') == 'none') {
                        toggle_switch.html('Read More');
                    } else {
                            toggle_switch.html('Read Less');
                        }
                    });
               // });

            });
        
        });
            </script>
            
            
  
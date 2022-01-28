
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- include summernote css/js -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- include plugin -->
    <script src="[folder where script is located]/[plugin script].js"></script>
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
.navbar-light .navbar-nav .nav-link {
     color: #008FD4;
}
#main{
    padding: 5%;
    align:center;
    width:40%;
}
</style>
</head>
<body>



<div class="container register-form" id="main">
    

  

            <div class="form">
                <div class="note">
                    <h3> Admin Login </h3>
                </div>

                <div class="form-content">
                    <div class="row ">
                        <div class="col-md-8">
                        <form method="POST" action="{{url('adlogin-form')}}">
                            @csrf                                                                                                                                   
                            <div class="form-group">
                      
                                <label><h4 class="title">Email</h4></label>
                                <input type="text" name="adminemail" placeholder="Email *"  class="form-control" class="@error('adminemail') is-invalid @enderror form-control"/>
                                @error('adminemail')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                            <div class="form-group">
                            <label><h4 class="title">Password</h4></label>
                                <input type="text"  name="password" id="summernote" class="form-control" class="@error('password') is-invalid @enderror form-control" placeholder="password *"/>
                                @error('password')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                            </div>
                           
                        </div>
                       
                            
                        </div>
                                    <div class="forgot">
                    <a href="reset.html">Forgot password?</a>
            </div>
                       
                   <br> <button type="submit" class="btnSubmit">Submit</button>
                   
</form>
              
            
    
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
            <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);


        $(document).ready(function() {
  $('#summernote').summernote({
    toolbar:[

     
    ]
  });
});
        

    </script>
            
  
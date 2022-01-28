<!DOCTYPE html>
<html>
<head>
  <title>experienced/form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
                #more {display: none;}
                .payment-form{
                padding-bottom: 50px;
                font-family: 'Montserrat', sans-serif;
            }
            p {
            color: navy;
            text-indent: 25px;
            text-transform: lowercase;
            }
            p:first-letter {
             text-transform: uppercase;
            }

            .payment-form.dark{
                background-color: #f6f6f6;
            }

            .payment-form .content{
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
                background-color: white;
            }

            .payment-form .block-heading{
                padding-top: 50px;
                margin-bottom: 40px;
                text-align: center;
            }

            .payment-form .block-heading p{
                text-align: center;
                max-width: 420px;
                margin: auto;
                opacity:0.7;
            }

            .payment-form.dark .block-heading p{
                opacity:0.8;
            }

            .payment-form .block-heading h1,
            .payment-form .block-heading h2,
            .payment-form .block-heading h3 {
                margin-bottom:1.2rem;
                color: #3b99e0;
            }

            .payment-form form{
                border-top: 2px solid #5ea4f3;
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
                background-color: #ffffff;
                padding: 0;
                max-width: 600px;
                margin: auto;
            }

            .payment-form .title{
                font-size: 1em;
                border-bottom: 1px solid rgba(0,0,0,0.1);
                margin-bottom: 0.8em;
                font-weight: 600;
                padding-bottom: 8px;
            }

            .payment-form .products{
                background-color: #f7fbff;
                padding: 25px;
            }

            .payment-form .products .item{
                margin-bottom:1em;
            }

            .payment-form .products .item-name{
                font-weight:600;
                font-size: 0.9em;
            }

            .payment-form .products .item-description{
                font-size:0.8em;
                opacity:0.6;
            }

            .payment-form .products .item p{
                margin-bottom:0.2em;
            }

            .payment-form .products .price{
                float: right;
                font-weight: 600;
                font-size: 0.9em;
            }

            .payment-form .products .total{
                border-top: 1px solid rgba(0, 0, 0, 0.1);
                margin-top: 10px;
                padding-top: 19px;
                font-weight: 600;
                line-height: 1;
            }

            .payment-form .card-details{
                padding: 25px 25px 15px;
            }

            .payment-form .card-details label{
                font-size: 12px;
                font-weight: 600;
                margin-bottom: 15px;
                color: #79818a;
                text-transform: uppercase;
            }

            .payment-form .card-details button{
                margin-top: 0.6em;
                padding:12px 0;
                font-weight: 600;
            }

            .payment-form .date-separator{
                margin-left: 10px;
                margin-right: 10px;
                margin-top: 5px;
            }

            @media (min-width: 576px) {
                .payment-form .title {
                    font-size: 1.2em; 
                }

                .payment-form .products {
                    padding: 40px; 
                }

                .payment-form .products .item-name {
                    font-size: 1em; 
                }

                .payment-form .products .price {
                    font-size: 1em; 
                }

                .payment-form .card-details {
                    padding: 40px 40px 30px; 
                }

                .payment-form .card-details button {
                    margin-top: 2em; 
                } 
            }
     </style>
    </head>
    <body>
            @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <main class="page payment-page">
             <section class="payment-form dark">
                <div class="container">
                    <div class="block-heading">
                        <h2><b>UI Developer</b></h2>
                </div>
                 <form action="" method="POST">
                <div class="products">
                     <div class="row">
                         <h3 class="title">Job Description</h3>
                         <p> The role is responsible for designing, coding and modifying websites, from layout to function and according to a client’s specifications. Strive to create visually appealing sites that feature user-friendly design and clear navigation.</p>
                        <div id="collapse" style="display:none">
                            <h3 class="title">Web Developer Job Duties:</h3>
                                <p>Regular exposure to business stakeholders and executive management, as well as the authority and scope to apply your expertise to many interesting technical problems.
                                    Candidate must have a strong understanding of UI, cross-browser compatibility, general web functions and standards.
                                    The position requires constant communication with colleagues.
                                    Experience in planning and delivering software platforms used across multiple products and organizational units.
                                    Strong grasping knowledge in coding.</p>
                            <h3 class="title">Web Developer Skills and Qualifications:</h3>
                                <p>JavaScript, JQuery, HTML, HTML5, CSS, CSS3, Web Programming Skills, E-Commerce, Teamwork, Verbal Communication, cross-browser compatibility, Web User Interface Design (UI), Security Principles, Object-Oriented Design, Web Services (REST/SOAP), Multimedia Content Development, API’s</p>
                        </div>
                <a href="#collapse" class="nav-toggle">Read More</a>
	            </div>
                        <br>
            <h3 class="title">Name<span style="color:red"> *</span></h3>
                <div class="item">
                    <input id="card-holder" type="text" class="form-control" placeholder="Enter your Full Name.." aria-label="Card Holder" aria-describedby="basic-addon1">
                </div>
            <h3 class="title">Email<span style="color:red"> *</span></h3>
                <div class="item">
                    <input id="card-holder" type="text" class="form-control" placeholder="Enter your Email.." aria-label="Card Holder" aria-describedby="basic-addon1">
                </div>
            <h3 class="title">Phone Number<span style="color:red"> *</span></h3>
                <div class="item">
                    <input id="card-holder" type="text" class="form-control" placeholder="Enter your contact number.." aria-label="Card Holder" aria-describedby="basic-addon1">
                </div>
            <h3 class="title">Current Location<span style="color:red"> *</span></h3>
                <div class="item">
                <input type="radio" id="chennai" value="chennai" name="current_location">
                <label for="chennai"> I live in chennai</label>
            <br>
            <input type="radio" id="outside_chennai" value="outside_chennai" name="current_location">
            <label for="outside_chennai">  I'm outside of Chennai, willing to relocate chennai</label>
           
                </div>
                <h3 class="title">Select Interview Date<span style="color:red"> *</span></h3>
                <div class="item">
                    <input type="date" class="form-control" id="date_picker"  value="{{$date}}">
                </div>
                <h3 class="title">Select Interview Time<span style="color:red"> *</span></h3>
                <div class="item">
                    <input type="radio" name='time' value="1">
                    <label> 10:00:00 am </label></br>
                    <input type="radio" name='time' value="2">
                    <label> 12:00:00 pm </label></br>
                    <input type="radio" name='time' value="3">
                    <label> 02:00:00 pm </label></br>
                    <input type="radio" name='time' value="4">
                    <label> 03:00:00 pm </label></br>
                    <input type="radio" name='time' value="5">
                    <label> 05:00:00 pm </label></br>

                </div>
                
              
               <h3 class="title">Current Company Name<span style="color:red"> *</span></h3>
                    <div class="item">
                   <input id="card-holder" type="text" class="form-control" placeholder="Enter current company name..." aria-label="Card Holder" aria-describedby="basic-addon1">
                </div>
                <h3 class="title">Working in Current Company From<span style="color:red"> *</span></h3>
                    <div class="item">
                    <input type="date" class="form-control" id="datepicker" value="{{$date}}">
        </div>
                <h3 class="title">Current CTC <span style="color:red"> *</span></h3>
                    <div class="item">
                   <input id="card-holder" type="text" class="form-control" placeholder="Enter current CTC..." aria-label="Card Holder" aria-describedby="basic-addon1">
                </div>
                <h3 class="title">Expected CTC <span style="color:red"> *</span></h3>
                    <div class="item">
                   <input id="card-holder" type="text" class="form-control" placeholder="Enter Expected CTC..." aria-label="Card Holder" aria-describedby="basic-addon1">
                </div>
                <h3 class="title">Notice Period <span style="color:red"> *</span></h3>
                    <div class="item">
                   <input id="card-holder" type="text" class="form-control" placeholder="Enter notice period..." aria-label="Card Holder" aria-describedby="basic-addon1">
                </div>
                <h3 class="title">Total Experience <span style="color:red"> *</span></h3>
                <div class="item">
                    <input type="radio" name='exp' value="1">
                    <label>0-6 months</label></br>
                    <input type="radio" name='exp' value="2">
                    <label>1 year </label></br>
                    <input type="radio" name='exp' value="3">
                    <label> 2 years </label></br>
                    <input type="radio" name='exp' value="4">
                    <label> 3 years</label></br>
                   
              

                </div>
            <h3 class="title">Upload your resume<b>(accept only pdf) <span style="color:red"> *</span></h3>
                    <div class="item">
                        <input  type="file" class="form-control" aria-label="Card Holder" aria-describedby="basic-addon1" accept="application/pdf, application/vnd.ms-excel" />
                    </div>
                    <div class="form-group col-sm-12">
                        <a href="" class="btn btn-primary btn-block" aria-label="Card Holder" aria-describedby="basic-addon1">Submit</a>
                    </div>      
                
              
            
             </div>
          </div>
        </form>
      </div>
    </section>
  </main>
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


        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#datepicker').attr('max',today);
    </script>
            
  
</body>
</html>

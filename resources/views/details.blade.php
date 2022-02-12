<html>
    <head>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />


<style>

@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);


.darken-grey-text {
    color: #2E2E2E;
}

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background: linear-gradient(45deg, #304FFE 50%, #EEEEEE 50%);
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 2px
}

.card1 {
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px
}

.logo {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin-top: 20px;
    margin-left: 25px
}



.card2 {
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px
}

.login {
    cursor: pointer
}

.fa-google {
    background-color: #fff;
    color: #df4b37;
    padding: 10px 12px;
    font-size: 20px
}

.fa-facebook {
    background-color: #fff;
    color: #3b5998;
    padding: 10px 15px;
    font-size: 20px
}

.google {
    background-color: #df4b37;
    color: #fff;
    padding: 3px 0px 3px 3px;
    border-radius: 2px;
    cursor: pointer
}

.fb {
    background-color: #3b5998;
    color: #fff;
    padding: 3px 0px 3px 3px;
    border-radius: 2px;
    cursor: pointer
}

.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px
}

.or {
    width: 100%
}

.text-sm {
    font-size: 14px !important
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 2px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 2px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
    background-color: #ECEFF1
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn-blue {
    background-color: #304FFE;
    width: 100%;
    color: #fff;
    border-radius: 6px
}

.btn-blue:hover {
    background-color: #0D47A1;
    cursor: pointer
}

@media screen and (max-width: 991px) {
    .card1 {
        border-bottom-left-radius: 0px;
        border-top-right-radius: 10px
    }

    .card2 {
        border-bottom-left-radius: 10px;
        border-top-right-radius: 0px
    }
}
body{
    font-size: 16px;
    color: #6f6f6f;
    font-weight: 400;
    line-height: 28px;
    letter-spacing: 0.8px;
    margin-top:20px;
}
.font-size38 {
    font-size: 38px;
}
.team-single-text .section-heading h4,
.section-heading h5 {
    font-size: 36px
}

.team-single-text .section-heading.half {
    margin-bottom: 20px
}

@media screen and (max-width: 1199px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 32px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 15px
    }
}

@media screen and (max-width: 991px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 28px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 10px
    }
}

@media screen and (max-width: 767px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 24px
    }
}


.team-single-icons ul li {
    display: inline-block;
    border: 1px solid #02c2c7;
    border-radius: 50%;
    color: #86bc42;
    margin-right: 8px;
    margin-bottom: 5px;
    -webkit-transition-duration: .3s;
    transition-duration: .3s
}

.team-single-icons ul li a {
    color: #02c2c7;
    display: block;
    font-size: 14px;
    height: 25px;
    line-height: 26px;
    text-align: center;
    width: 25px
}

.team-single-icons ul li:hover {
    background: #02c2c7;
    border-color: #02c2c7
}

.team-single-icons ul li:hover a {
    color: #fff
}

.team-social-icon li {
    display: inline-block;
    margin-right: 5px
}

.team-social-icon li:last-child {
    margin-right: 0
}

.team-social-icon i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 15px;
    border-radius: 50px
}

.padding-30px-all {
    padding: 30px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.text-center {
    text-align: center!important;
}
img {
    max-width: 100%;
    height: auto;
}


.list-style9 {
    list-style: none;
    padding: 0
}

.list-style9 li {
    position: relative;
    padding: 0 0 15px 0;
    margin: 0 0 15px 0;
    border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
}

.list-style9 li:last-child {
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0
}


.text-sky {
    color: #02c2c7
}
.text-red {
    color: #DC143C
}

.text-orange {
    color: #e95601
}

.text-green {
    color: #5bbd2a
}
.text-black {
    color: black
}

.text-yellow {
    color: #f0d001
}

.text-pink {
    color: #ff48a4
}

.text-purple {
    color: #9d60ff
}

.text-lightred {
    color: #ff5722
}

a.text-sky:hover {
    opacity: 0.8;
    color: #02c2c7
}

a.text-orange:hover {
    opacity: 0.8;
    color: #e95601
}

a.text-green:hover {
    opacity: 0.8;
    color: #5bbd2a
}

a.text-yellow:hover {
    opacity: 0.8;
    color: #f0d001
}

a.text-pink:hover {
    opacity: 0.8;
    color: #ff48a4
}

a.text-purple:hover {
    opacity: 0.8;
    color: #9d60ff
}

a.text-lightred:hover {
    opacity: 0.8;
    color: #ff5722
}

.custom-progress {
    height: 10px;
    border-radius: 50px;
    box-shadow: none;
    margin-bottom: 25px;
}
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #FF8C00
}
.bg-red {
    background-color: #DC143C
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}

@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

html,
body {
    height: 100%
}

body {
    display: grid;
    place-items: center;
    font-family: 'Manrope', sans-serif;
    background: #000
}

.cross {
    padding: 10px;
    color: #d6312d;
    cursor: pointer;
    font-size: 23px
}

.cross i {
    margin-top: -5px;
    cursor: pointer
}


.comment-area textarea {
   
    border: 2px solid #ff0000;
    border-radius: 20px;
    height:100px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
}

.send {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000
}

.send:hover {
    color: #fff;
    background-color: #f50202;
    border-color: #f50202
}

.rating {
    display: inline-flex;
    margin-top: -10px;
    flex-direction: row-reverse
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 28px;
    font-size: 35px;
    color: #ff0000;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0;
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}

.rating-edit {
    display: inline-flex;
    margin-top: -10px;
    flex-direction: row-reverse
}

.rating-edit>input {
    display: none
}

.rating-edit>label {
    position: relative;
    width: 28px;
    font-size: 35px;
    color: #ff0000;
    cursor: pointer
}

.rating-edit>label::before {
    content: "\2605";
    position: absolute;
    opacity: 1;
}

.rating-edit>label:hover:before,
.rating-edit>label:hover~label:before {
    opacity: 1 !important
}

.rating-edit>input:checked~label:before {
    opacity: 1
}

.rating-edit:hover>input:checked~label:before {
    opacity: 0.4
}
.checkbox label:after,
.radio label:after {
  content: '';
  display: table;
  clear: both;
}

.checkbox .cr,
.radio .cr {
  position: relative;
  display: inline-block;
  border: 1px solid #a9a9a9;
  border-radius: .25em;
  width: 1.3em;
  height: 1.3em;
  float: left;
  margin-right: .5em;
}

.radio .cr {
  border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
  position: absolute;
  font-size: .8em;
  line-height: 0;
  top: 50%;
  left: 13%;
}

.radio .cr .cr-icon {
  margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
  display: none;
}

.checkbox label input[type="checkbox"]+.cr>.cr-icon,
.radio label input[type="radio"]+.cr>.cr-icon {
  opacity: 0;
}

.checkbox label input[type="checkbox"]:checked+.cr>.cr-icon,
.radio label input[type="radio"]:checked+.cr>.cr-icon {
  opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled+.cr,
.radio label input[type="radio"]:disabled+.cr {
  opacity: .5;
}
.modal-content{ 
    font-family: 'Poppins', sans-serif; 
    color:#4e4f48;
    border-radius:10px;
   font-weight:500;
   display: flex;
    padding: 10px 15px;
    margin: 80px auto 0;
    border:1px;
    border-color:#fff;
    transition: all 0.3s ease 0s;
    width:1000px;
    
   
}
.modal-header{
  
    background:#ee9ca7;
    font-size: 30px;
    align:center;
    font-weight:900;
    color:#fff;
}
.btn{
    border-radius:10px;
}
.star-edit{
color:red;
}
</style>

</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 bg-light pb-5">
             
          
                @foreach($total_records as $data)
             
                
                    <div class="row px-3 justify-content-center mt-4 mb-5"> <embed src="{{ asset($data[('file')])}}" class="image"  style="width:850px; height:950px;"> </div>
                    <div class="row px-3 text-center justify-content-center">
                 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-1 px-4 py-5">
                <h4 class="font-size38 sm-font-size32 xs-font-size30"><b>{{$data[('name')]}}</b></h4><br><br>

                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                        <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-check-square text-black"></i>
                                        <strong class="margin-10px-left text-black">Applied for:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$data[('posted_for')]}}</p>
                                    </div>
                                </div>

                                </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Email:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$data[('email')]}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-mobile-alt text-purple"></i>
                                        <strong class="margin-10px-left text-purple">Phone Number :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$data[('phone')]}}</p>
                                    </div>
                                </div>

                            </li>
                              
                              
                          
                            @if(!empty($data[('Graduation')]))
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Graduation :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$data[('Graduation')]}}</p>
                                    </div>
                                </div>

                            </li>
                            
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-user-graduate text-green"></i>
                                        <strong class="margin-10px-left text-green">Post Graduation :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        @if(!empty($data[('pg')]))
                                        <p>{{$data[('pg')]}}</p>
                                        @else
                                        <p>Null</p>
                                        @endif
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-user-plus text-pink"></i>
                                        <strong class="margin-10px-left text-pink">Skills :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        @foreach($skill as $skill_set)
                                        {{$skill_set}}, @endforeach
                                       
                                    </div>
                                </div>

                            </li>
                            @else
                           <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-building text-green"></i>
                                        <strong class="margin-10px-left text-green">Current Company Name :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$data[('Current_Company_Name')]}}</p>
                                    </div>
                                </div>

                                </li>
                                <li>

                            <div class="row">
                                <div class="col-md-5 col-5">
                                    <i class="fas fa-calendar-alt text-yellow"></i>
                                    <strong class="margin-10px-left text-yellow">Working Since :</strong>
                                </div>
                                <div class="col-md-7 col-7">
                                    <p> {!! date('d/M/y', strtotime($data[('date_from')])) !!}</p>
                                </div>
                            </div>

                            </li>
                            <li>

                        <div class="row">
                            <div class="col-md-5 col-5">
                                <i class="fas fa-money-bill-alt text-pink"></i>
                                <strong class="margin-10px-left text-pink">Current CTC :</strong>
                            </div>
                            <div class="col-md-7 col-7">
                                <p>{{$data[('currentctc')]}}</p>
                            </div>
                        </div>

                        </li>
                        <li>

                        <div class="row">
                            <div class="col-md-5 col-5">
                                <i class="fas fa-money-bill-alt text-Blue"></i>
                                <strong class="margin-10px-left text-Blue">Expected CTC :</strong>
                            </div>
                            <div class="col-md-7 col-7">
                                <p>{{$data[('expctc')]}}</p>+
                            </div>
                        </div>

                        </li>
                        <li>

                        <div class="row">
                            <div class="col-md-5 col-5">
                                <i class="fas fa-exclamation-triangle text-lightred"></i>
                                <strong class="margin-10px-left text-lightred">Notice Period (in days) :</strong>
                            </div>
                            <div class="col-md-7 col-7">
                                <p>{{$data[('noticeperiod')]}}</p>
                            </div>
                        </div>

                        </li>
                         <li>

                            <div class="row">
                                <div class="col-md-5 col-5">
                              
                                    <i class="fas fa-star text-red"></i>
                                    <strong class="margin-10px-left text-red">Experience (in Years) :</strong>
                                </div>
                                <div class="col-md-7 col-7">
                                    <p>{{$data[('exp')]}}</p>
                                </div>
                            </div>

                            </li>
                            @endif
                           
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-map-marker-alt text-sky"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-sky">Location :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$data[('location')]}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-calendar-check text-black"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-black">Applied on :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p> {!! date('d/M/y', strtotime($data[('created_at')])) !!}</p>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div><br>
                   
                <div class="card-body">
                    <a href="{{url('admindash')}}">
                    <button type="button" class="btn btn-elegant">Back</button></a>
                    
                    <a href="#">
                    <button type="button" class="btn btn-dark-green">View</button></a>
                
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form" > Feedback </button>
          
                    
                
                </div>
          
    @if(!empty($feedback))
            
           @foreach($feedback as $feed)  
            <!--- Edit feedback to fetch dynamic values--->
            <form method="POST" action="{{ url('feed-update/'. $feed[('id')] ) }} ">
               @csrf 
            <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" >
                        <div class="modal-header">
                            <h3 class="modal-title"><strong> Feedback</strong></h3>
                            <div class="text-right cross" data-dismiss="modal"> <i class="fa fa-times mr-2"></i> 
                            </div>
                        </div>
                       <div class="card-body" > 
                            <div class="comment-box">
                                <h4>Candidate Rating</h4><br>
                                @for ($i = 1; $i <= $feed[('rating')]; $i++)
                                    <div class="rating-edit" > 
                                    <input type="radio" name="rating" value="{{ $i }}" id={{$i}}><label for="5">☆</label> 
                                    </div>
                                @endfor
                                <div class="rating" > 
                                @for ($i = 1; $i <= 5-$feed[('rating')]; $i++)
                                   
                                    <input type="radio" name="rating" value="{{ $i + $feed[('rating')]}}" id="{{ $i + $feed[('rating')]}}"/><label for="{{ $i + $feed[('rating')]}}">☆</label> 
                                   
                                @endfor
                                </div>
                                
                                 <br><br>
                                 <h4>Candidate Status</h4>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" value="selected" {{ ($feed[('status')]=="selected")? "checked" : "" }}>
                                        <span class="cr" style="color:Green;"><i class="cr-icon fas fa-check-circle"></i></span>
                                        Selected
                                    </label>
                                 </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="status" value="unselected" {{ ($feed[('status')]=="unselected")? "checked" : "" }}/>
                                    <span class="cr" style="color:red;" ><i class="cr-icon fas fa-check-circle"></i></span>
                                    Unselected
                                    </label>
                                </div>
                                <div>
                                  <input type="hidden" name='from' value="{{$data[('from')]}}"/>
                               </div>
                               <div>
                                 <input type="hidden" name='candidate_id' value="{{$data[('id')]}}"/>
                              </div>
                                 <br>
                                 <h4>Candidate Remarks</h4>
                                <div class="comment-area">
                                    <textarea class="form-control"  name="remark" rows="8" column="6"> {{$feed[('remark')]}}</textarea>
                                </div>
                   
                               <div class="modal-footer">
                                        
                               <button type="submit" class="btn btn-green" >Update</button>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endforeach
    @endif  
      <form method="POST" action="{{url('feedback')}}"> 
        @csrf      
           <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content" >
                  <div class="modal-header">
                     <h3 class="modal-title"><strong> Feedback</strong></h3>
                   <div class="text-right cross" data-dismiss="modal"> <i class="fa fa-times mr-2"></i> </div>
                 </div>
            <div class="card-body" > 
                <div class="comment-box">
                    <h4>Candidate Rating</h4><br>
                       <div class="rating"> 
                           <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                             <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                             <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> 
                            </div>
                    <br><br>
                       <h4>Candidate Status</h4>
                    <div class="radio">
                       <label>
                             <input type="radio" name="status" value="selected">
                                  <span class="cr" style="color:Green;"><i class="cr-icon fas fa-check-circle"></i></span>
                                          Selected
                       </label>
                    </div>
                    <div>
                        <input type="hidden" name='from' value="{{$data[('from')]}}"/>
                        </div>
                        <div>
                        <input type="hidden" name='candidate_id' value="{{$data[('id')]}}"/>
                    </div>
<!-- Checked radio -->
                    <div class="radio">
                    <label>
                        <input type="radio" name="status" value="unselected" checked/>
                        <span class="cr" style="color:red;" ><i class="cr-icon fas fa-check-circle"></i></span>
                        Unselected
                    </label>
                    </div><br>
                        <h4>Candidate Remarks</h4>
                    <div class="comment-area"> <textarea class="form-control" placeholder="  what is your view ?" name="remark" rows="8" column="6"></textarea> </div>
                    <div class="text-center mt-4"></div>
                    <div class="modal-footer">
                  
                        <button type="submit" class="btn btn-green" >Submit</button>
     
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                                        
   </div>
         </div>
            </div>
    </div>
</div>

</form>
@endforeach 
</body>
 </html>                    
   

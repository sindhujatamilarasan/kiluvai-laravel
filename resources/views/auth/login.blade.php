

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


   

</head>
<body>






<div class="container register-form" id="main">
   <div class="container">
      <div class="row justify-content-center" style="padding:100px;">
         <div class="col-md-8">
           <div class="form">
               <div class="card" class="note" >
                  <div class="card-header"style="background:-webkit-linear-gradient(left, #0072ff, #8811c5);"  ><h3>{{ __('Login') }}</h3></div>

                       <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                              @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left"><h5>{{ __('E-Mail Address') }}</h5></label>
                   <div class="col-md-8">
               
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left"><h5>{{ __('Password') }} </h5></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 col-form-label text-md-left   offset-md-4">
                                <div class="form-check" style="align:left;">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary align-left">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </div>
                    </form>
             </div>
            </div>
        </div>
    </div>
</div>
</body>

       
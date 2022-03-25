<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .login,
        .image {
        min-height: 100vh;
        }

        .bg-image {
        background-image: url('assets/img/003.png');
        background-size: cover;
        background-position: center center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
    
    
            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
    
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">Register</h3>
                                <p class="text-muted mb-4">Silahkan Registrasi untuk membuat akun web E-HISTAB </p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        {{-- <input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> --}}
                                        <input id="name" type="text" placeholder="Username" class="form-control rounded-pill border-0 shadow-sm px-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                                    <div class="form-group mb-3">
                                        {{-- <input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> --}}
                                        <input id="email" type="email" placeholder="Email address" class="form-control rounded-pill border-0 shadow-sm px-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                                    <div class="form-group mb-3">
                                        {{-- <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary"> --}}
                                        <input id="password" type="password" placeholder="Password" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        {{-- <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary"> --}}
                                        <input id="password-confirm" placeholder="Password-Confirm" type="password" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group mb-3">
                                        {{-- <input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> --}}
                                        <select style="font-family: 'Open Sans', sans-serif;font-size: 14px; font-weight: 400; " type="text" name="kelas" id="kelas" placeholder="Kelas" class="form-control rounded-pill border-0 shadow-sm px-4 @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}" required autocomplete="kelas" autofocus>
                                         
                                            <optgroup style="color: #666; " label="MIPA">
                                                <option value="11 MIPA 1"> <p>11 MIPA 1</p> </option>
                                                <option value="11 MIPA 2">11 MIPA 2</option>
                                                <option value="11 MIPA 3">11 MIPA 3</option>
                                                <option value="11 MIPA 4">11 MIPA 4</option>
                                            </optgroup>
                                            <optgroup style="color: #666;" label="IPS">
                                                <option value="11 IPS 1">11 IPS 1</option>
                                                <option value="11 IPS 2">11 IPS 2</option>
                                                <option value="11 IPS 3">11 IPS 3</option>
                                                <option value="11 IPS 4">11 IPS 4</option>
                                            </optgroup>
                                            
                                        </select>
                                        {{-- <input id="kelas" type="text" placeholder="Kelas" class="form-control rounded-pill border-0 shadow-sm px-4 @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required autocomplete="kelas" autofocus> --}}

                                        @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                                    <button style="background-color:orangered; border-color:orangered " type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Register</button>
                                    <div class="text-center d-flex justify-content-between mt-4"><p>Sudah punya akun <a href="{{ route('login') }}" class="font-italic text-muted"> 
                                            <u>Login</u></a></p>
                                    </div>
                                    

                                </form>
                            </div>
                        </div>
                    </div><!-- End -->
    
                </div>
            </div><!-- End -->
    
        </div>
    </div>
</body>
</html>
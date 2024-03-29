<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Data Mahasiswa | Login</title>
    <!-- Favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      {{-- CSS Local --}}
  <link rel="stylesheet" href="{{URL::asset('/assets/css/styleLogin.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login">
        <div class="row justify-content-lg-start justify-content-center">
            {{--col-lg-5 col-md-6 content-left --}}
            <div class="col-md-6 w45">
                <div class="container px-lg-5 px-md-3 d-flex flex-column justify-content-between "
                    style="height: 100vh;">
                    <div class="top">
                        <div class="login-header py-5">
                            <img src="https://hafecs.id/wp-content/uploads/2019/05/Hasnur-Centre-Logo.png" style="width:150px;" alt="">
                        </div>
                        <div class="login-body py-lg-5">
                            <div class="mb-5">
                                    <h1 class="title mx-0 px-0">Pengolahan Data Mahasiswa</h1>
                                    <p class="mx-0 px-0 mt-3" style="color: rgba(0,0,0,0.5);">Silahkan Login Sebagai
                                        Admin
                                    </p>
                            </div>
                            <form action="/login" method="post">
                                @csrf
                                

                                {{-- alert if error or success --}}
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div> 
                                @endif
                                @if (session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" style="margin-top: -1.2rem" role="alert">
                                        {{session('loginError')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                {{-- end alert --}}

                                <div class="row pb-4">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                                            autofocus required value="{{ old('email') }}" placeholder="email">
                                            <label for="floatingInput"  class="floating-label">Email</label>
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-floating">
                                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword"  class="floating-label">Password</label>
                                            @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-between">
                                    <div class="d-flex justify-content-end mt-lg-0 mt-3">
                                        <div class="d-grid d-lg-block">
                                        <a href="/register" class="btn btn-register rounded-1 fw-bold px-4 py-2">Register</a>
                                            <button class="btn btn-login rounded-1 fw-bold px-4 py-2">LOGIN</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--col-lg-7 col-md-6 d-none d-lg-block content-right --}}
            <div class="col-md-6 d-none d-lg-block w55">
                <div class="login-bg" style="background-image: url('{{URL::asset('/assets/img/bg.png')}}');">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
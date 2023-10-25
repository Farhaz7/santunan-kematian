<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<title>Halaman</title>
<body>
    <section class="vh-100">
        <style>
            section.vh-100 {
                background-image: url('assets/img/bgbalai.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
        </style>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 2rem; height: 540px; background-color: rgba(255, 255, 255, 0.927);">
                <div class="row g-0">
                  <div class="col-md-5 col-lg-5 d-none d-md-block">
                    <img src="assets/img/bjb.png" style="height: 550px; align-items-center;" class="mx-auto"
                      alt="login form" class="img-fluid" style="border-radius: rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5" style="color: rgb(134, 134, 134);">


                        <div class="d-flex align-items-center mb-3 pb-1 justify-content-center">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ffff;"></i>
                            <div class="text-center">
                                <style>
                                    .custom-font {
                                        font-family: 'Bebas Neue', sans-serif;
                                        letter-spacing: 5px;
                                    }
                                  </style>
                                <span class="h1 fw-bold mb-0 custom-font">Login layanan</span><br>
                                <span class="h1 fw-bold mb-0 custom-font">Santunan Kematian</span>
                            </div>
                        </div>


                        <form action="{{ route('actionlogin') }}" method="post">

                        @if(session('error'))
                        <div class="alert alert-danger">
                        <b>Opps!</b> {{session('error')}}
                        </div>
                         @endif
                         @csrf
                        {{-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>    --}}

                        <div class="form-outline mb-4">
                          <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>

                        <div class="pt-1 mb-4">
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #00b51b;">Masuk</button>

                        </div>

                        <a class="small text-muted" href="#!">Lupa Password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum punya akun? <a href="register"
                            style="color: #393f81;">Daftar disini</a></p>
                        {{-- <a href="#!" class="small text-muted">Terms of use.</a> --}}
                        {{-- <a href="#!" class="small text-muted">Privacy policy</a> --}}
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

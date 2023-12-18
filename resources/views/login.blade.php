<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/loginregis.css">
    <title>Login</title>
    <link rel="shortcut icon" href="/assets/img/bjb.ico" />
</head>
<style>
    body {
        background-image: url('assets/img/bgbalaix.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('actionregister') }}" method="post">
                @csrf
                <h3 style="margin-bottom: 1rem; text-align: center;">Buat Akun</h3>
                <img src="/assets/img/bjb.png" style="height: 120px; width: 105px; text-align: center;" class="img-fluid" />
                <input type="text" name="nik" class="form-control" placeholder="NIK Yang Meninggal" required="">
                <input type="text" name="name" class="form-control" placeholder="Nama Yang Meninggal" required="">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                <!-- <input type="text" name="role" class="form-control" value="User" readonly style="font-weight: bold;"> -->
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #00ea23;"><i class="fa fa-user"></i> Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('actionlogin') }}" method="post">

                @if (session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{ session('error') }}
                </div>
                @endif
                @csrf
                <h3 style="margin-bottom: 1rem">LOGIN LAYANAN<br>SMS-ON</h3>
                <img src="/assets/img/bjb.png" style="height: 120px; width: 110px; text-align: center;" class="img-fluid" />
                <input type="text" name="nik" class="form-control" placeholder="NIK Yang Meninggal" required="">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                <a href="#">Forgot your password?</a>
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #2ce958;">Masuk</button>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat Datang!</h1>
                    <p>Silahkan Login disini</p>
                    <button class="ghost" id="signIn">Masuk</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Selamat Datang</h1>
                    <p>Anda belum memiliki akun?, silahkan daftar disini!</p>
                    <button class="ghost" id="signUp">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> --}}
    <script src="/assets/js/pembataslogin.js"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>
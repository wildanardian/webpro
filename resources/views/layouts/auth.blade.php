<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="sign-in-sign-up">
            <form method="POST" action="" class="sign-in-form">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>  
                <div class="input-button">
                    <input type="submit" value="login" class="btn">
                </div>
            </form>
            <form method="POST" action="" class="sign-up-form">
                @csrf
                <h2 class="title">Sign Up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>  
                <div class="input-button">
                    <input type="submit" value="Sign Up" class="btn">
                </div>
            </form>
        </div>
        <div class="panel-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Ingin bergabung dengan kami?</h3>
                    <p>Bergabunglah dengan kami dan pesan tempat restauran agar tidak perlu reservasi manual lagi!</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="{{ asset('image/signin.svg') }}" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Member of Brand?</h3>
                    <p>Masuk ke dalam akun anda</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="{{ asset('image/signup.svg') }}" alt="" class="image">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>
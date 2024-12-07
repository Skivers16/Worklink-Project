<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background-color: #ceeaf7;">

    <div class="container-fluid vh-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-12 col-md-7 d-flex justify-content-center align-items-center">
                <img src="/img/2024-10-21.png" alt="Illustration" class="w-75">
            </div>
            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                <!-- Kotak putih untuk formulir login -->
                <div class="login-form w-75 p-4">

                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
        
                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    
                    <!-- Tambahkan logo di sini -->
                    <div class="text-center mb-3">
                        <img src="/img/logoworklink.png" alt="Logo Worklink" width="50">
                    </div>
                    <h2 class="text-center mb-4">Welcome back!</h2>
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid
                            @enderror" id="email" 
                            placeholder="Enter your email" autofocus required value="{{ old ('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" 
                            placeholder="Enter your password" required>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember for 30 days</label>
                            </div>
                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <!-- Tombol login dengan warna #fd8916 -->
                        <button type="submit" class="btn w-100 mb-3" style="background-color: #fd8916; color: white;">Login</button>
                        <!-- Tambahkan tombol untuk "Log in with Google" -->
                        <button type="button" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center mb-3">
                            <img src="/img/Google-Logo 1.png" alt="Google" width="20" class="me-2">
                            Login with Google
                        </button>
                        <div class="text-center mt-3">Not registered?
                            <a href="/regis"><strong>Register Now!</strong></a>
                        </div>
                        <div>
                        <a href="/" class="text-decoration-none text-center d-block">Back to homepage</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

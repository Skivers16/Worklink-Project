<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }
        .register-container {
            background-color: #f5f9fe;
            border-radius: 10px;
            padding: 20px; /* Mengurangi padding */
            max-width: 350px; /* Ukuran kotak */
            width: 90%; /* Memastikan lebar responsif */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Menambah bayangan */
        }
        .register-button {
            background-color: #fd8916;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 0;
        }
        .pattern-background {
            background-image: url('pattern.png'); /* Ganti dengan path gambar yang benar */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Bagian Gambar di Kiri -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="img/pattern.png.png" alt="Illustration" class="img-fluid">
            </div>

            <!-- Bagian Register di Kanan -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="register-container shadow">
                    <div class="text-center mb-3">
                        <img src="img/logoworklink.png" alt="Logo" width="50">
                    </div>
                    <h3 class="text-center mb-4">Register</h3>
                    <form action="/regis" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control rounded-top @error('email')
                            is-invalid @enderror" id="email" placeholder="Enter your email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control rounded-top @error('name')
                            is-invalid @enderror" id="name" placeholder="Enter your name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Password</label>
                            <input type="password" name="password"  class="form-control rounded-top @error('password')
                            is-invalid @enderror" id="password" placeholder="Create new password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                       <!--<div class="mb-3">
                            <label for="skill" class="form-label">Skill</label>
                            <input type="text" name="skill"  class="form-control" id="skill" placeholder="Enter your skills">
                        </div>
                        <div class="mb-3">
                            <label for="passion" class="form-label">Passion</label>
                            <input type="text" name="passion"  class="form-control" id="passsion" placeholder="Enter your passion">
                        </div>
                        <div class="mb-3">
                            <label for="riwayat_pekerjaan" class="form-label">Riwayat Pekerjaan</label>
                            <input type="text" name="riwayat_pekerjaan"  class="form-control" id="riwayat_pekerjaan" placeholder="Enter your work history">
                        </div>-->
                        <button type="submit" class="btn register-button w-100">Register</button>
                    </form>
                    <div class="text-center mt-3">Already a member?
                        <a href="login" class="text-decoration-none"><strong>Login now</strong></a>
                    </div>
                    <div class="text-center mt-2">
                        <a href="/" class="text-decoration-none">Back to homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

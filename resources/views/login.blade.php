<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #436bfa;
            font-family: 'Roboto', sans-serif;
        }
        .row-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 0 15px;
        }
        .card {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .card-body label {
            font-weight: 500;
            font-size: 14px;
        }
        .form-control {
            border-radius: 6px;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #0056b3;
            border: none;
            width: 100%;
            padding: 10px;
            font-weight: 500;
            border-radius: 6px;
            font-size: 14px;
        }
        .btn-primary:hover {
            background-color: #004399;
        }
        .login-link {
            margin-top: 20px;
            text-align: center;
        }
        .login-link p {
            color: #333;
            font-size: 14px;
            font-weight: 400;
        }
        .login-link a {
            color: #0056b3;
            font-weight: 500;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        .logo {
            font-family: 'Satisfy', cursive;
            font-size: 36px;
            color: #0056b3;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .text-danger {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container-fluid row-container">
        <div class="row justify-content-center align-items-center w-100">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body text-start">
                        <div class="logo">E-Pinjam SMANSA</div>
                       

                            <form action="{{ url('/login-proses') }}" method="GET">
                            <label for="nip_nis">NIP/NIS:</label>
                            <input type="text" name="nip_nis" id="nip_nis" class="form-control mb-3" placeholder="Masukkan NIP/NIS" required>
                            @error('nip_nis')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Masukkan password" required>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            
                            <button class="btn btn-primary" type="submit">
                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                Login
                            </button>
                        </form>
                        
                        <div class="login-link">
                            <p>Belum punya akun? <a href="{{ route('registrasi') }}">Daftar sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function() {
            const button = this.querySelector('button');
            const spinner = button.querySelector('.spinner-border');
            button.setAttribute('disabled', 'true');
            spinner.classList.remove('d-none');
        });
    </script>
</body>
</html>
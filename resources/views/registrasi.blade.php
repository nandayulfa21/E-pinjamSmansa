<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
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
        .dropdown-wrapper {
            position: relative;
        }
        .dropdown-wrapper select {
            padding-right: 30px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        .dropdown-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #aaa; 
        }
        .logo {
            font-family: 'Satisfy', cursive; 
            font-size: 36px; 
            color: #0056b3; 
            margin-bottom: 10px; 
            text-align: center; 
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
                        <form action="{{ route('registrasi.submit') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama :</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NIP/NIS:</label>
                                <input type="text" name="nip_nis" class="form-control" value="{{ old('nip_nis') }}" required>
                                @error('nip_nis')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status:</label>
                                <div class="dropdown-wrapper">
                                    <select name="status" class="form-control" required>
                                        <option value="" disabled selected>Pilih Status</option>
                                        <option value="guru" {{ old('status') == 'guru' ? 'selected' : '' }}>Guru</option>
                                        <option value="siswa" {{ old('status') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                                    </select>
                                    <i class="fas fa-chevron-down dropdown-icon"></i>
                                </div>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button class="btn btn-primary">Submit Registrasi</button>
                        </form>
                        
                        <div class="login-link">
                            <p>Sudah punya akun? <a href="{{ route('login') }}">Silahkan login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

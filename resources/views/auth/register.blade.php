@extends('auth.layout')

@section('content')
    
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-5 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <label>Register</label>
                    <hr>

                <form action="{{ route('register-proses')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" value="{{ old('name')}}">
                        @error('name')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email" value="{{ old('email')}}">
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                        @error('password')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>

                    <button class="btn btn-login btn-block btn-success">REGISTER</button>
                  </form>
                </div>
            </div>

            <div class="text-center" style="margin-top: 15px">
                Sudah punya akun? <a href="{{ route('login')}}">Silahkan Login</a>
            </div>

        </div>
    </div>
</div>
@endsection
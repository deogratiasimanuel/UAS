@extends('auth.layout')

@section('content')
    
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-5 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <label>Login</label>
                    <hr>

                <form action="{{ route('login-proses')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email">
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

                    <button class="btn btn-login btn-block btn-success">Login</button>
                  </form>
                </div>
            </div>

            <div class="text-center" style="margin-top: 15px">
                Belum punya akun? <a href="{{ route('register')}}">Silahkan Register</a>
            </div>

        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('success'))
<script>
    Swal.fire('{{ $message }}');
</script>
@endif
@if ($message = Session::get('failed'))
<script>
    Swal.fire('{{ $message }}');
</script>
    
@endif
@endsection
@extends('user.signIn.layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <form method="POST" action="/signIn">
                    @csrf
                    <div class="text-center">
                        <img class="mb-4" src="/assets/images/lambang_kota_kupang.png" alt="" width="57" height="60">
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center">Silahkan masuk akun</h1>
                    <div class="form-floating">
                        <input type="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                            placeholder="name@example.com">
                        <label for="email">Alamat email</label>
                        @error('email')
                            <div id="email" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div id="password" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Ingat Saya
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                    <p class="mt-5 mb-3 text-muted text-center">&copy; Hak Cipta E-Hac Kota Kupang {{ date('Y') }}</p>
                </form>
            </main>
        </div>
    </div>

@endsection

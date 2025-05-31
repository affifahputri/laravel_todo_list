@extends('layouts.app')

@section('content')
    <div style="min-height: 100vh; background-color: #fff0f5;" class="d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card shadow-sm" style="border: 1px solid #ffb6c1; background-color: #fff;">
                        <div class="card-body p-4 p-md-5">
                            <!-- Alert Message -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="text-center mb-4">
                                <h2 class="fw-bold mb-4" style="color: #ff69b4;">To-Do-List</h2>
                                <p class="text-muted">Masuk ke akun Anda</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text border-end-0" style="background-color: #ffe4ec;">
                                            <i class="bi bi-person" style="color: #ff69b4;"></i>
                                        </span>
                                        <input type="text" name="login"
                                            class="form-control border-start-0 @error('login') is-invalid @enderror"
                                            placeholder="Email atau Username" value="{{ old('login') }}" required autofocus>
                                    </div>
                                    @error('login')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text border-end-0" style="background-color: #ffe4ec;">
                                            <i class="bi bi-key" style="color: #ff69b4;"></i>
                                        </span>
                                        <input type="password" name="password"
                                            class="form-control border-start-0 @error('password') is-invalid @enderror"
                                            placeholder="Password" required>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="w-100 mb-3 position-relative overflow-hidden"
                                    style="background-color: #ff69b4; color: white; border: none; padding: 0.75rem; border-radius: 0.375rem;">
                                    <span class="d-flex align-items-center justify-content-center">
                                        Masuk
                                        <i class="ms-2">➜</i>
                                    </span>
                                </button>

                                <div class="text-center">
                                    <a href="{{ route('register') }}" style="color: #ff69b4; text-decoration: none;">
                                        Belum Punya Akun? Daftar Sekarang
                                    </a>
                                </div>

                                <div class="mt-4 pt-4 border-top">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"><i class="bi bi-check-circle" style="color: #ff69b4;"></i></div>
                                                <span class="small text-muted">Task Management</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"><i class="bi bi-check-circle" style="color: #ff69b4;"></i></div>
                                                <span class="small text-muted">Progress Tracking</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"><i class="bi bi-check-circle" style="color: #ff69b4;"></i></div>
                                                <span class="small text-muted">Team Collaboration</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"><i class="bi bi-check-circle" style="color: #ff69b4;"></i></div>
                                                <span class="small text-muted">Priority Settings</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

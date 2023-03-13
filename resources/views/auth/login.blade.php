@extends('admin.layouts.auth-app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <b>Yagona Milliy Mehnat Tizimi</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">LOGIN</p>
                @if ($errors->any())
                    <div class="alert alert-default-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('adm.login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Login" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Parol" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Meni eslab qol
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-block btn-primary" type="submit">
                            <i class="fa fa-key mr-2"></i> Kirish
                        </button>
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection

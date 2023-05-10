<!DOCTYPE html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .container {
        padding: 0;
        margin: 0;
        background-color: #03080e;
        /*background: url('./bg3.jpg') no-repeat 49% 76%;*/
        /*background-size: cover;*/
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: poppins;
        position: relative;
        height: 100vh;
        display: grid;
        align-items: center;
        justify-content: center;
        background-image: url('{{ asset('imports/assets/images/wallpaperflareom_wallpaper.jpg') }}');
        background-size: cover;
    }

    * {
        box-sizing: border-box;
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #fff;
        opacity: 1; /* Firefox */
    }

    body {

    }

    .login_form {
        display: flex;
        flex-direction: column;
        color: #fff;
        padding: 40px 26px;
        width: 300px;
        /*height: 300px;*/
        background-color: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 10px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.18);
    }


    .login_form h1 {
        font-size: 25px;
        margin-top: 0;
        margin-bottom: 8px;
    }

    .login_form p {
        margin-top: 0;
        margin-bottom: 26px;
    }


    .login_form input {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 6px;
        padding: 14px 16px;
        margin-bottom: 30px;
    }

    .login_form input:focus {
        outline: none;
        border-color: #fff;
    }

    .login_form button {
        background: linear-gradient(45deg, #ff0d45, #ff01eb);
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 14px 16px;
        margin-top: 10px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease-in-out, text-shadow 0.3s ease-in-out;
    }

    .login_form button:hover {
        background-color: #8b008b;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    /*.login_form button:focus {
        outline: none;
        box-shadow: 0 0 15px #ff0d45;
    }*/
</style>
<html>

<div class="container">
    <form  method="post" action="{{ route('login') }}" class="login_form">
        @csrf
        <h1 style="text-align:center;"><img style="vertical-align: middle;" src="{{asset('imports/assets/images/logoDASHBOARD.png')}}" alt="your-logo-alt-text-here" width="50px" /> GREEN LIFE
            </h1>
        <p style="text-align:center;">
            Sign in.</p>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="username">

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="password">

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
        <button type="submit">{{ __('Login') }}</button>
        <div class="col-sm-5 mt-3">
            <a href="{{route('register')}}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
        </div>
    </form>
</div>
</html>

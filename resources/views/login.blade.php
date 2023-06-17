<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="{{ asset('images/wave.png') }}">
    <div class="container">
        <div class="img">
            <img src="{{ asset('images/bg.svg') }}">
        </div>
        <div class="login-content">
            @if (Request::is('admin/login'))
                <form method="POST" action="{{ route('admin.login.submit') }}">
                @elseif(Request::is('dentiste/login'))
                    <form method="POST" action="{{ route('dentiste.login.submit') }}">
                @elseif(Request::is('assistant/login'))
                    <form method="POST" action="{{ route('assistant.login.submit') }}">
                    @else
                        <form method="POST" action="{{ route('login.submit') }}">
            @endif
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <img src="{{ asset('images/avatar.png') }}">
                <h2 class="title">BIENVENUE</h2>
                <h2 class="title"></h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        @if (Request::is('admin/login'))
                            <input type="email" class="input" name="email_admin">
                        @elseif(Request::is('dentiste/login'))
                            <input type="email" class="input" name="email_dent">
                        @elseif(Request::is('assistant/login'))
                            <input type="email" class="input" name="email_assist">
                        @else
                            <input type="email" class="input" name="email">
                        @endif
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Mot de Passe</h5>
                        <input type="password" class="input" name="password">
                        {{-- value="{{bcrypt('test1234')}}" --}}
                    </div>
                </div>
                <a href="#">Mot de Passe oublié ?</a>
                <button type="submit" class="btn">Se connecter</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>

</html>

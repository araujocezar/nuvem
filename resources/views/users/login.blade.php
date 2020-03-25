<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/e73d22a929.js" crossorigin="anonymous"></script>
        
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5"><i class="fab fa-cloudversify">Nuvem</i></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        {!!Form::open(['method' => 'post', 'route' => 'user.auth', 'id' => 'login-form', 'class' => 'form'])!!}
                            <h3 class="text-center text-info">Login</h3>

                            @if($message ?? null)
                                <div class="alert alert-danger" role="alert">{{$message}}</div>
                            @endif

                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Senha">
                            </div>
                            
                            <div class="form-group">
                                <label for="remember-me" class="text-info">
                                    <span>Lembrar</span>
                                    <span>
                                        <input name="lembrar" type="checkbox" value="true">
                                    </span>
                                </label>
                                <br>
                                {{Form::submit('Entrar',['class' => "btn btn-info btn-md", 'name' => 'submit', 'type' => "submit"])}}
                            </div>

                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Registrar-se</a>
                            </div>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
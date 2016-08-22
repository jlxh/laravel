<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>管理员登陆</title>

    <link rel="stylesheet" href="{{ elixir('css/lib.css') }}">
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('admin-assets/gentallela/css/custom.min.css') }}">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                {!! Form::open(['url' => url('admin/login'), 'method' => 'post']) !!}
                <h1>登陆</h1>
                <div>
                    <input type="text" class="form-control" placeholder="邮箱" required="" name="email"/>
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="密码" required="" name="password"/>
                </div>
                <div class="checkbox" style="text-align: left">
                    <label>
                        <input type="checkbox" name="remember"/>
                        remember me
                    </label>
                </div>
                <div>
                    <button class="btn btn-default submit" type="submit">登陆</button>
                    <a class="reset_pass" href="#">Lost your password?</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <div class="clearfix"></div>
                    <br/>
                </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>管理员登录</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('admin-assets/gentallela/css/custom.min.css') }}">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ url('dashboard/login') }}" method="post">
                    {!! csrf_field() !!}
                    <h1>登录</h1>
                    <div>
                        <input type="email" class="form-control" placeholder="邮箱" required="" name="email"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="密码" required="" name="password"/>
                    </div>
                    <div class="checkbox" style="text-align: left">
                        <label>
                            <input type="checkbox" name="remember"/>
                            记住我
                        </label>
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">登录</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br/>
                    </div>

                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>

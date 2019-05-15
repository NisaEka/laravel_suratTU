<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>
<body>

    <div class="main-agileits">
        <h1 class="text-center">Please sign in</h1>
        <div class="mainw3-agileinfo form" id="login">
        <form method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <div class="field-wrap">
                <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" placeholder="email">
            </div>
            <div class="field-wrap">
                <input class="form-control" type="password" name="password" placeholder="Password" id="password" placeholder="password">
            </div>
            <div class="col-md-12 mt-3">
                <div class="btn-toolbar justify-content-between">
                    <button class="button button-block" type="submit">Login</button>
                    <p class="forgot"><a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Password</a></p>
                    
                </div>
            </div>

            @if (config('cms.registration-available'))
                <div class="col-md-12 mt-3">
                    <a class="btn raw100 btn-info btn-block" href="{{ url('/register') }}">Register</a>
                </div>
            @endif
        </form>
    </div>
    </div>

</body>
</html>

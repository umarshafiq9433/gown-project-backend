<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Language" content="en"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Wedding Gowns | The Gown Connoisseur | Singapor</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta
        name="description"
        content="This is an example dashboard created using build-in elements and components."
    />
    <meta name="msapplication-tap-highlight" content="no"/>
    <link href="{{  asset('assets/css/admin.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="h-100 py-5 bg-dark">
    <div class=" col-md-6 mx-auto p-3 bg-white rounded">
        <h1 class="text-center">LOGIN</h1>
        <div class="col-md-10 mx-auto">
            @include('partials.success')
            @include('partials.error')
            <form action="/login/check" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username" class="font-weight-bolder">Username</label>
                    <input class="form-control" name="email" id="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password" class="font-weight-bolder">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

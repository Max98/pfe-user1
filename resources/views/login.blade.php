<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body class="vh-100">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password" />
                    </div>
                    <button class="btn btn-primary w-100 mb-3" type="submit">Login</button>
                </form>
                <a href="#">Create an account</a>
            </div>
        </div>
    </div>
</body>

</html>

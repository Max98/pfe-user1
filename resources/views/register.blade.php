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
                Register
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your email" />
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username" id="username"
                            placeholder="Username" />
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Password repeat:</label>
                                <input type="password_confirmation" class="form-control" name="password_confirmation"
                                    id="password_confirmation" placeholder="Password confirmation" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-3">Account type:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Customer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Salesman
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100 mb-3" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

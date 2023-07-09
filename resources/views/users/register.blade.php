<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration</title>
</head>
<body>

    <h1 class="container text-center mb-5">User Registration</h1>
    <div class="container bg-dark text-white col-md-6 p-5">
    

    <form method="POST" action="/registration">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        

        

        <div class="mb-6">
            <label
                for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password"/>
        </div>

        <div class="mb-6">
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation"/>
        </div>

        <div class="mb-6 mt-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

        <div class="mt-8">
            <p>
                Already have an account?
                <a href="login.html" class="text-laravel"
                    >Login</a
                >
            </p>
        </div>
    </form>
</div>
</body>
</html>
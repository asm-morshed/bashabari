<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>

    <h1 class="container text-center mb-5 mt-5">মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ</h1>
    <h1 class="container text-center mb-5">শিক্ষা মন্ত্রণালয়</h1>
    <div class="container bg-dark text-white col-md-6 p-5">
    

    <form method="POST" action="/authenticate">
        @csrf
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        
        <div class="mb-6">
            <label
                for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password"/>
        </div>


        <div class="mb-6 mt-3">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>
</div>
</body>
</html>
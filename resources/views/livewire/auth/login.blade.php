<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styl.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .custom-bg {
            background-color: #95d0d8;
        }
        .custom-btn {
            background-color: #333;
            color: white; 
        }
        .custom-btn:hover {
            background-color: #555;
        }
        .custom-link {
            color: #000; 
            text-decoration: underline;
        }
        .custom-link:hover {
            color: #007bff;
        }
    </style>
    @livewireStyles
    <title>Online Library</title>
</head>

<body>
    <div class="navbar">
        <img class="book-open" src="{{ asset('img/book-open.svg') }}" />

        <a href="/homer">Home</a>
        <a href="#genre">Genre</a>
        <a href="#borrow">Borrow</a>
        <a href="#wishlist">Wishlist</a>

        <div class="search">
            <div class="text-wrapper">Value</div>
            <img class="x" src="{{ asset('img/x.svg') }}" />
        </div>
        <div class="button-grup">
            <button class="button" onclick="window.location.href='/login'">Login</button>
            <button class="button-wrapper" onclick="window.location.href='/register'">Register</button>
        </div>
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Login</h1>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 custom-bg" method="post" action="/login">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?= $_POST['email'] ?? "" ?>">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg custom-btn" type="submit">Sign In</button>
                    <div class="mt-3 text-center">
                        <a href="#" class="custom-link">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
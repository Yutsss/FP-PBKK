<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Link your CSS files -->
    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @livewireStyles  <!-- If you're using Livewire -->
    <title>Your Application</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    
    @livewireScripts  <!-- If you're using Livewire -->
</body>
</html>

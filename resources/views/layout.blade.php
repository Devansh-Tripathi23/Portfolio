<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('header') 

        @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script>

    // Animation of 10+ Projects

$(document).ready(function() {
    let stopValue = 10;
    let counterElement = $('<div class="project  mx-auto" id="projectCounter"></div>');
    $('.projects').append(counterElement); // Add the single element initially

    for (let i = 1; i <= stopValue; i++) {
        setTimeout(function() {
            counterElement.html(`<p>${i}+</p>`); // Update content within the single element
            counterElement.fadeIn(1000); // Animate the single element
        }, (i - 1) * 500);
    }
});

$(document).ready(function() {
    let stopValue = 6
    let counterElement = $('<div class="experience  mx-auto" id="projectCounter"></div>');
    $('.experience').append(counterElement); // Add the single element initially

    for (let i = 1; i <= stopValue; i++) {
        setTimeout(function() {
            counterElement.html(`<p>${i}+ Months</p>`); // Update content within the single element
            counterElement.fadeIn(1000); // Animate the single element
        }, (i - 1) * 500);
    }
});

</script>
</body>
</html>

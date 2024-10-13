@extends('components.layouts.app')
@section('content')
<div class="borrow-page">
        <div class="borrow-1">
                <div class="group-parent">
                        <div class="group-container">
                                <img class="group-child" alt="" src="images/Star.svg">

                                <div class="div">5.1/5</div>
                        </div>
                        <div class="gadis-rusa-nokotan">Gadis Rusa Nokotan</div>
                        <div class="group-div">
                                <div class="group-wrapper">
                                        <div class="group-wrapper">
                                                <div class="group-item">
                                                </div>
                                        </div>
                                </div>
                                <img class="image-5-icon" alt="" src="images/image 5.png">

                        </div>
                </div>
                <div class="group-parent1">
                        <div class="rectangle-parent">
                                <div class="group-item">
                                </div>
                                <img class="image-4-icon" alt="" src="images/image 4.png">

                        </div>
                        <div class="group-parent2">
                                <img class="group-child" alt="" src="images/Star.svg">

                                <div class="div">3.9/5</div>
                        </div>
                        <div class="gadis-rusa-nokotan">Kentang gedagedi</div>
                </div>
                <div class="group-parent3">
                        <div class="group-wrapper">
                                <div class="group-item">
                                </div>
                        </div>
                        <div class="sigma-toilet">Sigma Toilet</div>
                        <div class="group-parent4">
                                <img class="group-child" alt="" src="images/Star.svg">

                                <div class="div">3.9/5</div>
                        </div>
                        <img class="image-11-icon" alt="" src="images/image 1.png">

                </div>
                <div class="group-parent5">
                        <div class="group-wrapper">
                                <div class="group-item">
                                </div>
                        </div>
                        <div class="skibidi-sigma">Skibidi Sigma</div>
                        <div class="group-parent6">
                                <img class="group-child" alt="" src="images/Star.svg">

                                <div class="div">4.2/5</div>
                        </div>
                        <img class="image-10-icon" alt="" src="images/image 3.png">

                </div>
                <div class="group-parent7">
                        <div class="group-wrapper">
                                <div class="group-item">
                                </div>
                        </div>
                        <div class="group-parent8">
                                <img class="group-child" alt="" src="images/Star.svg">

                                <div class="div">3.9/5</div>
                        </div>
                        <div class="kai-cenat">Kai Cenat</div>
                        <img class="image-12-icon" alt="" src="images/image 1.png">

                </div>
                <div class="group-parent9">
                        <div class="rectangle-parent">
                                <div class="group-item">
                                </div>
                                <img class="image-4-icon" alt="" src="images/image 4.png">

                        </div>
                        <div class="kentang-gedagedi1">Kentang gedagedi</div>
                        <div class="group-parent4">
                                <img class="group-child" alt="" src="images/Star.svg">

                                <div class="div">3.9/5</div>
                        </div>
                </div>
                <div class="group-parent11">
                        <div class="rectangle-parent">
                                <div class="group-wrapper">
                                        <div class="group-wrapper">
                                                <div class="group-item">
                                                </div>
                                        </div>
                                        <img class="group-child9" alt="" src="images/image 4.png">

                                </div>
                        </div>
                        <div class="kentang-gedagedi1">Kentang gedagedi</div>
                        <div class="group-parent6">
                                <img class="group-child" alt="" src="images/Star.svg">

                                <div class="div">3.9/5</div>
                        </div>
                </div>
                <div class="rectangle-parent1">
                        <div class="group-child11">
                        </div>
                        <div class="group-child12">
                        </div>
                        <b class="available">Available</b>
                        <div class="a-z">A-Z</div>
                        <div class="rating">Rating</div>
                        <div class="year">Year</div>
                </div>
                <div class="rectangle-parent2" id="groupContainer8">
                        <div class="group-child13">
                        </div>
                        <div class="success">success</div>
                </div>
                <div class="rectangle-parent3" id="groupContainer9">
                        <div class="group-child13">
                        </div>
                        <div class="fail">fail</div>
                </div>
                <div class="search">
                        <div class="value">Value</div>
                        <img class="x-icon" alt="" src="X.svg">

                </div>
                <div class="whaddya-wanna-borrow" id="whaddyaWannaBorrow">Whaddya wanna borrow?</div>
                <div class="book-open-parent">
                        <img class="book-open-icon" alt="" src="images/Book open.svg">

                        <div class="group-child15">
                        </div>
                        <div class="home" id="homeText">Home</div>
                        <div class="genres" id="genresText">Genres</div>
                        <div class="borrow">Borrow</div>
                        <div class="wishlist">Wishlist</div>
                        <img class="user-icon" alt="" src="images/User.svg">

                        <div class="user">User</div>
                </div>
        </div>
</div>

<script>
        var groupContainer8 = document.getElementById("groupContainer8");
        if (groupContainer8) {
                groupContainer8.addEventListener("click", function(e) {
                        window.location.href = '/group8'; // Replace '/group8' with the desired URL for this element
                });
        }

        var groupContainer9 = document.getElementById("groupContainer9");
        if (groupContainer9) {
                groupContainer9.addEventListener("click", function(e) {
                        window.location.href = '/group9'; // Replace '/group9' with the desired URL for this element
                });
        }

        var whaddyaWannaBorrow = document.getElementById("whaddyaWannaBorrow");
        if (whaddyaWannaBorrow) {
                whaddyaWannaBorrow.addEventListener("click", function(e) {
                        window.location.href = '/borrow'; // Navigate to the borrow page
                });
        }

        var homeText = document.getElementById("homeText");
        if (homeText) {
                homeText.addEventListener("click", function(e) {
                        window.location.href = '/'; // Navigate to the default home page
                });
        }

        var genresText = document.getElementById("genresText");
        if (genresText) {
                genresText.addEventListener("click", function(e) {
                        window.location.href = '/genres'; // Navigate to the genres page
                });
        }
</script>

@endsection
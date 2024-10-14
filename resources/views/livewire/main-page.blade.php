
@extends('components.layouts.app')
@section('content')
    <div class="homer-page">
        <div class="page">
            <div class="navbar">
                <img class="book-open" src="{{ asset('images/Book open.svg') }}"/>

                <a href="/">Home</a>
                <a href="/genre">Genre</a>
                <a href="/borrow">Borrow</a>
                <a href="#wishlist">Wishlist</a>

                <div class="search">
                    <div class="text-wrapper">Value</div>
                    <img class="x" src="{{ asset('images/X.svg') }}"/>
                </div>
                @if(auth()->check())
                <div class="button-grup">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="button">Logout</button>
                    </form>
                    <button class="button-wrapper" onclick="window.location.href='/profile'">Profile</button>
                @else
                <div class="button-grup">
                    <button class="button" onclick="window.location.href='/login'">Login</button>
                    <button class="button-wrapper" onclick="window.location.href='/register'">Register</button>
                </div>
                @endif
            </div>
            <div class="Highlight">
                <div class="rectangle-2">
                    <div class="image-2"></div>
                    <img class="image-4" src="{{ asset('images/image 1.png') }}"/>
                    <div class="rectangle-6">
                        <div class="content">
                            <div class="title">Miss Peregrine's Home for Peculiar Children</div>
                            <div class="genre">Fantasy, Fiction, Horror</div>
                            <div class="rating">Rating: 4.5/5</div>
                            <div class="synopsis">
                                A mysterious island. An abandoned orphanage. A strange collection of very curious
                                photographs. It all waits to be discovered in Miss Peregrine’s Home for Peculiar
                                Children, an unforgettable novel that mixes fiction...
                            </div>
                            <div class="author">By Ransom Riggs</div>

                            {{-- <div class="title"><?php echo $title; ?></div>
                            <div class="genre"><?php echo $genre; ?></div>
                            <div class="rating">
                                Rating: <?php echo $rating; ?>/5
                                <?php
                                // Loop to print stars
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= floor($rating)) {
                                    // Display filled stars for the rating value
                                    echo '<i class="fas fa-star"></i> ';
                                    } elseif ($i - $rating < 1 && $rating - floor($rating) > 0) {
                                    // Display half star if the rating is in between
                                    echo '<i class="fas fa-star-half-alt"></i> ';
                                    } else {
                                    // Display empty stars for the remaining
                                    echo '<i class="far fa-star"></i> ';
                                    }
                                }
                                ?>
                            </div>
                            <div class="synopsis"><?php echo $synopsis; ?></div>
                            <div class="author">By <?php echo $author; ?></div> --}}
                        </div>
                    </div>
                    <div class="rectangle-7">
                        <div class="group-34">
                            <a href="#details" class="text-wrapper-21">Details</a>
                        </div>
                    </div>
                </div>
                <div class="scroll">
                    <div class="ellipse"></div>
                    <div class="ellipse-2"></div>
                    <div class="ellipse-3"></div>
                    <div class="ellipse-4"></div>
                </div>
            </div>
            <div class="Popular">
                <div class="rectangle-3"></div>
                <div class="rectangle-8"></div>
                <a class="text-popular">Popular</a>
                <div class="List-Popular">
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="images/image 4.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Gedagedi</a>
                        <a class="rate">4.5/5</a>
                    </div>
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="images/image 5.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Bakar</a>
                        <a class="rate">4.5/5</a>
                    </div>
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="images/image 9.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Rebus</a>
                        <a class="rate">4.5/5</a>
                    </div>
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="images/image 9.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Goreng</a>
                        <a class="rate">4.5/5</a>
                    </div>
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="images/image 5.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Manis</a>
                        <a class="rate">4.5/5</a>
                    </div>
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="img/image-1.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Jagung</a>
                        <a class="rate">4.5/5</a>
                    </div>
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="img/image-1.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Gatau</a>
                        <a class="rate">4.5/5</a>
                    </div>
                    <div class="border">
                        <div class="img-wrapper">
                            <img class="contohimage" src="img/image-1.png" alt="Kentang Gedagedi"/>
                        </div>
                        <a class="judul">Kentang Ya gitulah</a>
                        <a class="rate">4.5/5</a>
                    </div>
                </div>
                <div class="arrow-right-wrapper">
                    <img class="arrow-right" src="{{ asset('images/Arrow right.svg') }}"/>
                </div>
            </div>
            {{-- <?php
            if ($result->num_rows > 0) {
                // Loop through all the book data
                while($row = $result->fetch_assoc()) {
                $title = $row["title"];
                $rating = $row["rating"];
                $image = $row["image"]; // The path to the image in your database
            ?>

                <div class="book-card">
                    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                    <div class="book-title"><?php echo $title; ?></div>
                    <div class="book-rating">
                    Rating: <?php echo $rating; ?>/5
                    <?php
                    // Display stars based on the rating
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= floor($rating)) {
                        // Display filled stars for the rating value
                        echo '<i class="fas fa-star"></i>';
                        } elseif ($i - $rating < 1 && $rating - floor($rating) > 0) {
                        // Display half star if the rating is a fraction (e.g., 4.5)
                        echo '<i class="fas fa-star-half-alt"></i>';
                        } else {
                        // Display empty stars for the remaining
                        echo '<i class="far fa-star"></i>';
                        }
                    }
                    ?>
                    </div>
                </div>

            <?php
                }
            } else {
                echo "No books found.";
            }

            // Close the connection
            $conn->close();
            ?> --}}
        </div>
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <img class="instagram" src="{{ asset('images/Instagram.svg') }}"/>
                <img class="twitter" src="{{ asset('images/Twitter.svg') }}"/>
                <img class="github" src="{{ asset('images/Github.svg') }}"/>
                <img class="location" src="{{ asset('images/location_on.svg') }}"/>
                <div class="text-wrapper-2">Contact</div>
                <div class="text-wrapper-3">About</div>
                <div class="text-wrapper-4">Help</div>
                <div class="text-wrapper-5">Feedback</div>
            </div>
        </div>
    </div>
@endsection

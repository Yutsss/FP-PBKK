@extends('app')
@section('content')

{{-- Eksperimen pas manggil buku --}}
{{-- <?php
// Connect to the database
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "book_database"; // Replace with your DB name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch the book data (assuming you have a table `books` with relevant columns)
$sql = "SELECT title, genre, rating, synopsis, author FROM books WHERE id = 1"; // Change ID as per the record you want to fetch
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output the data of the selected row
  while($row = $result->fetch_assoc()) {
    $title = $row["title"];
    $genre = $row["genre"];
    $rating = $row["rating"];
    $synopsis = $row["synopsis"];
    $author = $row["author"];
  }
} else {
  echo "0 results";
}

$conn->close();
?> --}}

<div class="homer-page">
    <div class="page">
        <div class="navbar">
            <img class="book-open" src="{{ asset('img/book-open.svg') }}" />
            <!-- <div class="text-wrapper-7">Home</div>
            <div class="text-wrapper-8">Genres</div>
            <div class="text-wrapper-9">Borrow</div>
            <div class="text-wrapper-10">Wishlist</div> -->

            <a href="#home">Home</a>
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
        <div class="Highlight">
            <div class="rectangle-2">
                <div class="image-2"></div>
                <img class="image-4" src="{{ asset('img/image-1.png') }}" />
                <div class="rectangle-6">
                    <div class="content">
                        <div class="title">Miss Peregrine's Home for Peculiar Children</div>
                        <div class="genre">Fantasy, Fiction, Horror</div>
                        <div class="rating">Rating: 4.5/5</div>
                        <div class="synopsis">
                            A mysterious island. An abandoned orphanage. A strange collection of very curious photographs. It all waits to be discovered in Miss Peregrine’s Home for Peculiar Children, an unforgettable novel that mixes fiction...
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
                <div class="border">
                    <div class="img-wrapper">
                        <img class="contohimage" src="{{ asset('img/image-1.png') }}" />
                    </div>
                    <a class="judul">Kentang Gedagedi</a>
                    <a class="rate">4.5/5</a>
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
                <img class="instagram" src="{{ asset('img/instagram.svg') }}" />
                <img class="twitter" src="{{ asset('img/twitter.svg') }}" />
                <img class="github" src="{{ asset('img/github.svg') }}" />
                <img class="location" src="{{ asset('img/location.svg') }}" />
                <div class="text-wrapper-2">Contact</div>
                <div class="text-wrapper-3">About</div>
                <div class="text-wrapper-4">Help</div>
                <div class="text-wrapper-5">Feedback</div>
            </div>
        </div>
    </div>


@endsection

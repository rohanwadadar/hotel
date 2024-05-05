<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relieved Daring Beaver</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
   <style>
        
    /* Navbar styles */
        
    /* Navbar styles */
    .navbar {
        background-color: sienna; /* Slate gray color for a cool, mountain look */
        color: #e6e6e6; /* Light gray color for text */
        padding: 10px 0;
        font-size: 1.1em;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.8); /* Lighter shadow */
        transition: all 0.3s ease;
    }

    .navbar-brand {
        font-family: 'Damion', cursive; /* Cursive font for the brand */
        font-size: 2em;
        font-weight: bold;
        color: inherit;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Lighter text shadow */
    }

   



.navbar-brand img {
    max-height: 80px;
    transition: transform 0.3s ease;
}

.navbar-brand img:hover {
    transform: scale(1.1);
}

/* Navbar Links Styling */
.navbar-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    margin-left: auto;
}

.navbar-links li {
    margin-right: 30px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links li a {
        font-family: 'Damion', cursive; /* Cursive font for navbar links */
        color: inherit;
        text-decoration: none;
        font-size: 1.0em;
        font-weight: bold;
        padding: 10px 15px;
        position: relative;
        transition: all 0.3s ease;
    }

/* Hover and Active States Styling */
.navbar-links li a:hover,
.navbar-links li a:focus,
.nav-item.login a.nav-link:hover,
.nav-item.login a.nav-link:focus {
    color: #e6e6e6; /* Light gray color on hover */
    background-color: rgba(230, 230, 230, 0.2); /* Semi-transparent light gray background on hover */
}

/* Stylish Underline Effect on Hover */
.navbar-links li a:hover::after,
.navbar-links li a:focus::after,
.nav-item.login a.nav-link:hover::after,
.nav-item.login a.nav-link:focus::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background-color: #e6e6e6; /* Light gray color for underline */
    border-radius: 2px;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

/* Keyframes for Underline Slide Effect */
.navbar-links li a:hover::after,
.nav-item.login a.nav-link:hover::after {
    transform: scaleX(1);
}

/* Adjustments for Dropdown Toggle */
.nav-item.dropdown a.dropdown-toggle {
    color: inherit;
    font-weight: bold;
    font-family: 'Damion', cursive;
    
}

.nav-item.dropdown a.dropdown-toggle:hover,
.nav-item.dropdown a.dropdown-toggle:focus {
    color: #e6e6e6;
   
    font-family: 'Damion', cursive;
}

/* Customizing Dropdown Menu */
.dropdown-menu {
    background-color: slategray; /* Dark slate gray background for dropdown menu */
    
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Lighter shadow */
    padding: 10px 0;
}

.dropdown-item {
    color: #ffffff; /* White color for dropdown items */
    font-weight: bold;
    font-size: 0.9em;
    
    padding: 8px 20px;
     font-family: 'Damion', cursive;
    transition: all 0.3s ease;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background-color: rgba(230, 230, 230, 0.2); /* Semi-transparent light gray background on hover */
    color: #e6e6e6;
}

.dropdown-divider {
    border-top: 1px solid #e6e6e6; /* Light gray color for divider */
}




    </style>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="logoremove.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-links">
                <li class="nav-item"><a class="nav-link" href="#welcome-section">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="rooms.html">ROOMS</a></li>
                <li class="nav-item"><a class="nav-link" href="cancel.php">BOOKING STATUS</a></li>
                <li class="nav-item"><a class="nav-link" href="service.php">SERVICE</a></li>
                <li class="nav-item"><a class="nav-link" href="darjeeling.php">PLACES TO VISIT</a></li>
                
            </ul>
            <ul class="navbar-nav">
                
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        More
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="booking.php"></a>
        <a class="dropdown-item" href="index.php">Log Out</a>
        <a class="dropdown-item" href="adminlogin.html">ADMIN</a>
    </div>
</li> <!-- Add this closing tag -->

                <li class="nav-item"><a class="nav-link" href="login.php"> Log in Successful</a></li>
                
            </ul>
        </div>
 <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>   </div>
</nav>

<head>
    
    <style>
       .welcome-section {
    background-image: url('201604151513476616-32a7f51a9ac511eba7cc0242ac110004.avif');
    background-size: cover; /* Adjust background size to cover the entire section */
    /* Prevent background image from repeating */
    box-shadow: 0 2px 60px rgba(0, 0, 0, 0.8); 
    font-family: 'Arial', sans-serif;
}

        .container1 {
    display: flex;
    justify-content: center;  /* Centers children horizontally */
    align-items: center;      /* Centers children vertically */
    height: 90vh;            /* Full viewport height to enable vertical centering */
    flex-direction: column;   /* Stacks children vertically */
}
     }

        .carousel {
            position: relative;
            background: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .carousel-content {
            text-align: center;
            padding: 20px;
        }
        
        .carousel-content h2 {
            font-size: 24px;
            color: goldenrod;
            margin-bottom: 15px;
        }
        .carousel-content h1 {
    color: white; /* Replace with your preferred color */
}
.carousel-content {
  color: white;
}

        .carousel-content p {
            font-size: 40px;
            color: white;
        }
        .carousel-content h2 {
            font-size: 40px;
            color: white;
        }
        .carousel-content h1 {
            font-size: 24px;
            color: gold;
        }
        .carousel-indicators li {
            background-color: #555;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .carousel-indicators .active {
            background-color: #007bff;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 45px;
            height: 45px;
            background-color: none;
            border-radius: 100%;
            border: none;
            opacity: 0.5;
            margin-top: 75px;
            align-items: center;
            justify-content: center;
        }
        .button-container {
           display: flex;
           justify-content: center;
           width:  20%;
            margin-top: 30px;
            padding: 10px 30px;
            background-color: slateblue;
            color: white;
            align-items: center;
            text-decoration: gold;
            border-radius: 20px;
            transition: background-color 0.7s ease; /* Move the margin from the button to the container for better control */
         }

        .button-container:hover {
            background-color: lightblue;
            border-radius: 60px
            

        }
    </style>
</head>
<body>

<section id="welcome-section" class="welcome-section">
    <div class="container1">
    
  </video>
        <h1 class="carousel-content1"></h1>
        <div id="welcome-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#welcome-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#welcome-carousel" data-slide-to="1"></li>
                <li data-target="#welcome-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-content">
                    <h2>Welcome to Our Hotel</h2>
                        <h2>Experience luxury and comfort like never before</h2>
                        <p>Book now and get 20% off on your stay. Limited time offer!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                        <h2>Unlock exclusive discounts by booking directly through our website</h2>
                        <p>Don't miss out on our special deals. Book now and save!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                        <h2>Sign up for our newsletter to receive updates on promotions and offers</h2>
                        <p>Subscribe now and be the first to know about our latest discounts!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#welcome-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#welcome-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <a href="booking.php" class="button-container">Check For Rooms</a>
    </div>
</section>

<!-- jQuery and Bootstrap JS -->

</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Latest Food section styles */
        .latest-food {
            background-color: sienna;
            padding: 10px 0;
            box-shadow: 0 2px 60px rgba(0, 0, 0, 0.8);
            border-bottom: 1px solid lightpink;
        }

        .latest-food h2 {
            color: white;
            text-align: center;
            margin-bottom: 50px;
        }
        .latest-food h1 {
            color: white;
            text-align: center;
            margin-bottom: 10px;
        }
        #food-carousel .carousel-inner .carousel-item img {
            border-radius: 60px; /* Adjust the border radius for round corners */
            transition: transform 3.9s ease;
        }

        #food-carousel .carousel-inner .carousel-item img:hover {
            transform: scale(1.1); /* Increase scale on hover for a reactive effect */
        }

        #food-carousel .carousel-control-prev,
        #food-carousel .carousel-control-next {
            background: none;
            border: none;
            width: 5%;
            padding: 200px;
            color: transparent;
        }

        #food-carousel .carousel-control-prev-icon,
        #food-carousel .carousel-control-next-icon {
            background-color: transparent;
            background-size: contain;
            position: absolute;
            opacity: 1;
            transition: opacity 0.9;
        }

        #food-carousel .carousel-control-prev-icon {
            background-image: url('previous-icon.png');
        }

        #food-carousel .carousel-control-next-icon {
            background-image: url('next-icon.png');
        }

        #food-carousel .carousel-control-prev:hover .carousel-control-prev-icon,
        #food-carousel .carousel-control-next:hover .carousel-control-next-icon {
            opacity: 0.7;
        }
    </style>
</head>
<body>

<section id="latest-food" class="latest-food">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Capture the Enchantment of Darjeeling</h2>
                
            </div>
        </div>
        <div id="food-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="4b925461.webp" class="d-block w-100" alt="Food 1" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="dining-table-with-tasty-food-restaurant_219968-17.avif" class="d-block w-100" alt="Food 2" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="Terraco-view-1.jpg" class="d-block w-100" alt="Food 3" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="310106896.jpg" class="d-block w-100" alt="Food 4" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="guided-hike_h.webp" class="d-block w-100" alt="Food 5" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="bangalore-mountain-festival-mtb-event-cross-country-olympic.avif" class="d-block w-100" alt="Food 6" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="all-in-getaway.jpg" class="d-block w-100" alt="Food 7" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#food-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#food-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h1 class="text-center mb-4">Explore our captivating gallery and immerse yourself in the beauty of Raj Hotel and its surroundings.</h1>
    </div>
</section>

<!-- Bootstrap JS -->

<!-- Custom JavaScript for automatic image change -->
<script>
    // Automatically advance carousel every 5 seconds
    $('#food-carousel').carousel({
        interval: 3000
    });
</script>

</body>
</html>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raj Hotel - Luxurious Stay in Darjeeling</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-FvBECIWA1iIl8فافH8T2c2BQbEGwLE6gkRDgnwgvTJaNGwR0mNxBzWEv9nEtJ4B/i" crossorigin="anonymous">

  <style>
    /* About section styles */
    #about {
      background-color: #fff;
      padding: 50px 0;
      box-shadow: 0 2px 60px rgba(0, 0, 0, 0.8);
    }

    .about-text h2 {
      font-family: 'Playfair Display', serif; /* Stylish font for "About Us" heading */
      font-size: 2.5em;
      font-weight: 700;
      color: #333;
    }

    .about-text {
      color: #333;
    }

    .about-image {
      text-align: center;
    }

    .about-image img {
      max-width: 100%;
      height: auto;
    }

    /* Owner photos styles */
    .owner-photos {
      list-style-type: none;
      padding: 0;
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .owner-photos li {
      margin: 0 10px;
    }

    .owner-photos li img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .owner-photos li img:hover {
      transform: scale(1.2);
    }

    /* Hotel amenities styles */
    .amenities {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 30px;
    }

    .amenity {
      text-align: center;
      padding: 15px;
      
      margin: 10px;
      width: 220px;
    }

    .amenity img {
      width: 200px;
      height: 200px;
     
    }

    .amenity p {
      font-weight: bold;
    }

    /* Special offer styles */
   
/* Owner photos styles */
.owner-photos {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.owner-photos li {
    margin: 0 10px;
}

.owner-photos li img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.owner-photos li img:hover {
    transform: scale(1.2);
}









/* Existing styles */
.special-offer {
    background-color: #e74c3c;
    color: #fff;
    padding: 20px;
    text-align: center;
    margin-top: 30px;
    border-radius: 5px;
    animation: zoomIn 1s ease;
}

.special-offer h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
}

.special-offer p {
    font-weight: bold;
}

/* Zoom-in animation */
@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.5);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Touch responsive styles */
@media (max-width: 767px) {
    .special-offer {
        padding: 15px;
        font-size: 14px;
    }

    .special-offer h3 {
        font-size: 1.4em;
    }
}

.parallax {
    /* Set a specific height */
    min-height: 500px;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative; /* Added to position the video */
    overflow: hidden; /* Added to ensure the video stays within the container */
}

.parallax-video {

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1; /* Added to position the video behind the content */
}

.lottie-animation {
    position: absolute; /* Positions the Lottie animation absolutely within the .parallax container */
    right: 20px; /* Adjusts the horizontal position */
    bottom: 200px; /* Adjusts the vertical position */
    width: 150px; /* Reduces the width of the Lottie animation */
    height: 150px; /* Reduces the height of the Lottie animation */
    z-index: 1; /* Ensures the Lottie animation is on top of other elements */
}
.lottie-animation2 {
    position: absolute; /* Positions the Lottie animation absolutely within the .parallax container */
    left: 20px; /* Adjusts the horizontal position */
    bottom: 200px; /* Adjusts the vertical position */
    width: 150px; /* Reduces the width of the Lottie animation */
    height: 150px; /* Reduces the height of the Lottie animation */
    z-index: 1; /* Ensures the Lottie animation is on top of other elements */
}
  </style>
</head>
<html>
<body>

  <section id="about">
  <div class="parallax">
        <div class="lottie-animation">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/5aae5402-c2c5-465e-8a32-2f8a58679d8f/0TzrdsyOmR.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
        
        <div class="lottie-animation2">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/5aae5402-c2c5-465e-8a32-2f8a58679d8f/0TzrdsyOmR.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
        <video class="parallax-video" autoplay loop muted>
            <source src="2yqT.gif" type="video/gif">
        </video>
        
    <div class="container">
      <div class="row">
        <div class="col-lg-6 about-text">
          <h2>About Star-View - Your Gateway to Darjeeling's Enchantment</h2>
          <p>Nestled amidst the breathtaking Himalayan foothills, Star-View  Hotel welcomes you to experience the magic of Darjeeling. Our luxurious hotel offers stunning panoramic views, impeccable service, and a haven of tranquility, perfect for an unforgettable getaway.</p>
          <p>Steeped in rich history
            <p>Steeped in rich history and colonial charm, Raj Hotel has been a beloved destination for travelers for generations. We are dedicated to preserving this legacy while providing modern amenities and unparalleled guest experiences.</p>
            <p>Indulge in our world-class hospitality, where every detail is meticulously crafted to ensure your comfort and satisfaction. Our dedicated staff is passionate about creating a memorable stay, catering to your every need with warm smiles and genuine care.</p>
            <ul class="amenities">
              <P class="amenity">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbJ05atdiHJQiRFzOx33hIW_Tri6jtFAch0Q7lfX6QNg&s" alt="Free Wifi">
                <p></p>
              </P>
              <P class="amenity">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQstyusiaYBJVt1uAMDsbAx2zjBQXGED26EEG3ctPOGEA&s" alt="Spa Treatments">
                <p></p>
              </P>
              <p class="amenity">
                <img src="sanrst-athletic-club.jpg" alt="Fitness Center">
                <p></p>
              </p>
              <p class="amenity">
                <img src="https://3.imimg.com/data3/KD/BJ/MY-16243222/var-m_5-53-53f-5019-56335-service-250x250.jpg" alt="24/7 Room Service">
                <p></p>
              </p>
            </ul>
          </div>
          <div class="col-lg-6 about-image">
            <img src="97305.jpg" class="img-fluid rounded-end" alt="Raj Hotel Darjeeling">
          </div>
        </div>
        <ul class="owner-photos">
      <li><img src="file.enc" alt="Owner 1">Rohan </li>
      <li><img src="Image.jpg" alt="Owner 2">Rusha</li>
      <li><img src="Image.jpg" alt="Owner 3">Sayandeep</li>
      <li><img src="Image.jpg" alt="Owner 4">Barshan</li>
  </ul>
  </div>
        <div class="row">
          <div class="col-lg-12 special-offer">
            <h3>Exclusive Summer Discount!</h3>
            <p>Book your stay during the Summer season  and enjoy 20% off your room rate. Escape the hustle and bustle of city life and immerse yourself in the beauty of Darjeeling's lush greenery, rejuvenated by the refreshing monsoon showers.</p>
            <p>**Limited time offer! Book now and don't miss out.**</p>
          </div>
        </div>
        
      </div>
  

    </section>
  

   <!-- Bootstrap CSS -->



</body>
  
</html>



<!-- Contact section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Contact Information</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="contact-info">
                    <h4>Address</h4>
                    <p>123 Hilltop Road,<br>Darjeeling, India</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="contact-info">
                    <h4>Phone & Email</h4>
                    <p>Phone: +91 7595921010<br>Email: rajhotelj@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="contact-info">
                    <h4>Follow Us</h4>
                    <ul class="list-unstyled social-media">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact section styles */
.contact-section {
    background-color: sienna; /* Slate gray background color */
    padding: 80px 0; /* Increase padding for spacing */
    box-shadow: 0 2px 60px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
}

.contact-section h2 {
    color: #ffffff; /* White text color for heading */
    font-weight: 700; /* Bold heading */
    text-transform: uppercase; /* Uppercase heading */
    letter-spacing: 2px; /* Add letter spacing for a luxury look */
}

.contact-info {
    text-align: center; /* Center align contact info */
    padding: 20px; /* Add padding for spacing */
}

.contact-info h4 {
    color: #ffffff; /* White color for subheadings */
    font-weight: 600; /* Semi-bold subheadings */
    margin-bottom: 15px; /* Add space below subheadings */
}

.contact-info p {
    color: #ffffff; /* White color for text */
    font-size: 16px; /* Increase font size for better readability */
    line-height: 1.6; /* Increase line height for better spacing */
}

.social-media {
    display: flex; /* Display social media icons in a row */
    justify-content: center; /* Center align social media icons */
    list-style-type: none; /* Remove bullet points */
    padding: 0; /* Remove default padding */
}

.social-media li {
    margin: 0 10px; /* Add spacing between social media icons */
}

.social-media li a {
    color: #ffffff; /* White color for social media icons */
    font-size: 24px; /* Increase icon size */
    transition: all 0.3s ease; /* Add transition for smooth hover effect */
}

.social-media li a:hover {
    color: #d4d4d4; /* Slightly darker gray color on hover */
    transform: scale(1.2); /* Increase icon size on hover */
}

</style>


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

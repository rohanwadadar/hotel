<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darjeeling Tourism</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40; /* Dark gray background */
        }

        .navbar-brand {
            color: #ffffff; /* White text */
        }

        .container {
            max-width: 1200px;
        }

        .segment {
            
        }

        .place-to-visit {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .place-to-visit img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .place-to-visit:hover img {
            transform: scale(1.1); /* Enlarge image on hover */
        }

        .place-info {
            padding: 20px;
        }

        .place-info h3 {
            font-size: 1.5rem;
            margin-top: 0;
        }

        .place-info p {
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        h2.activities-heading {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            color: #007bff; /* Blue color */
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <header class="bg-dark text-white py-3 mb-4">
            <div class="container">
                <h1>Darjeeling Tourism</h1>
            </div>
        </header>
        
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Places to Visit in Darjeeling
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Activities in Darjeeling
                        </label>
                    </div>
                </div>
            </div>
            
            <div id="places-to-visit" class="segment show">
            <h2 class="activities-heading">Places to Visit in Darjeeling</h2>
                <div class="row">
                    <!-- Adding places inside the row as provided in your last message -->
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="Tiger_Hill_i1xvel.avif" alt="Tiger Hill" class="img-fluid">
                            <div class="place-info">
                                <h3>Tiger Hill</h3>
                                <p>One of the best tourist destinations in Darjeeling for nature lovers is Tiger Hill. The captivating sight of the sun's rays hitting the Himalayas just requires a small amount of climbing and enduring the bitter cold. Remember to bring your camera so you can capture this breathtaking scene.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="Batasia_Loop_esvu2m.avif" alt="Batasia Loop" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Batasia Loop</h3>
            <p>Batasia Loop is an engineering marvel but more than that it is a paramount tourist attraction to view the glorious Mount Kanchenjunga and other associated Himalayan Peaks. The war memorial of Batasia stands witness to the courage of brave Gorkha soldiers who laid down their lives in a line of duty to protect the sovereignty and integrity of the nation.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="shutterstock_1471402307_iu0b6j.avif" alt="Peace Pagoda" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Peace Pagoda</h3>
            <p>This monument reflects the 4 avatars of Lord Buddha that attract a lot of tourists who come here to meditate and experience spiritual serenity. When visiting Darjeeling, don't miss out on the spectacular bird's eye view of Darjeeling from the summit of the Peace Pagoda.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_25,w_800,h_450,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/chowrasta_darjeeling_suy5ft" alt="Chowrasta" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Chowrasta</h3>
            <p>Nestled at the heart of Darjeeling Chowrasta beholds the testimony of Himalayan Hospitality. A go-to place for the populace of Darjeeling, it is where love stories are written and immortalized whereas the elderly devote their time discussing the future of Darjeeling comparing it with a glorious past.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="Happy_Valley_Tea_Estate_seng7w.avif" alt="Happy Valley Tea Estate" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Happy Valley Tea Estate</h3>
            <p>Any trip to this land of golden beverage is incomplete without visiting tea estates that are the pride of Darjeeling. This tea estate is of the oldest in the town. Experience the beauty of tea gardens and also the process of tea making. Don't forget to take some souvenirs home.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_60,w_1200,h_675,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/Darjeeling-Observatory-Hill-Mahakal-Temple_hish3t" alt="Observatory Hill" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Observatory hill</h3>
            <p>Blessed by the might of Lord Shiva and the Lord Buddha, the observatory hill is a living testimony of how Hindu and Buddhist communities live in peace and harmony to celebrate the true essence of fraternity.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_36,w_592,h_333,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/Shrubbery_Nightingale_Park_uuopdm" alt="Shrubbery Nightingale Park" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Shrubbery Nightingale Park</h3>
            <p>On the way to Darjeeling Zoological Park, the Shrubbery Nightingale Park is a place underrated but a moment here will certainly overwhelm you with a majestic view of Mount Kanchenjunga. The lush green environment of the park is a go-to hangout place for locals and you may also expect a young bunch enjoying the serenity in joy and harmony.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_113,w_1200,h_675,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/tenzing-rock_ok584n" alt="Tenzing Rock" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Tenzing Rock</h3>
            <p>Named after a legendary Mountaineer Tenzing Norgay Sherpa, the Tenzing Rock is a famous tourist attraction in Darjeeling. It is a known fact that the rock served as a training ground for Mr. Sherpa and for that reason alone, the traveler comes from a distance to witness the history that still stands and aspires young mountaineers to be like Mr. Sherpa.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_28,w_550,h_310,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/Darjeeling_Himalayan_Railway_d8llkj" alt="Darjeeling Himalayan Railway" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Darjeeling Himalayan Railway</h3>
            <p>DHR is a piece of heritage left by colonials for the people of Darjeeling. The chronology associated with the engineering marvels itself needs a special introduction but to understand the timeline one must visit because unless you won't take a ride you will never know how legendary the Darjeeling Himalayan Railway is.</p>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="place-to-visit">
        <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_84,w_1600,h_900,r_0,c_crop,q_90,fl_progressive/w_825,f_auto,c_fit/summit-hotels-resorts/Himalayan_Mountaineering_Institute_wxtno1" alt="Himalayan Mountaineering Institute" class="img-fluid">
        <div class="place-info">
            <h3 class="mt-3">Himalayan Mountaineering Institute</h3>
            <p>Hosting a wonderful collection of mountaineering gears used during the historic expeditions to Everest and other important peaks, the HMI accords the legacy and preserves for aspiring mountaineers and travelers to behold. Amongst the prosperous collection, the mountaineering gears worn by great Tenzing Norgay Sherpa are a must-see collection from their archives.</p>
        </div>
    </div>
</div>

                    <!-- Add other places similarly -->
                </div>
            </div>
            
           <div id="activities" class="segment">
            <h2 class="activities-heading">Activities in Darjeeling</h2>
            <img src="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_1535/x_0,y_0,w_3170,h_1357,r_0,c_crop,q_90,fl_progressive/w_1650,f_auto,c_fit/summit-grace-hotel-darjeeling/Darjeeling_Summit_Hotel_and_" class="img-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2 >Adventure Activities</h2>
                        <ul>
                            <li>Mountain Biking Park in Senchal Wildlife Sanctuary</li>
                            <li>Jeep Safari to Sandakphu and Phalut</li>
                            <li>Darjeeling Rangit Valley Passenger Ropeway</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2> Family Activities</h2>
                        <ul>
                            <li>Toy train ride- Darjeeling Himalayan Railway (UNESCO Heritage site)</li>
                            <li>Visit Japanese Peace Pagoda</li>
                            <li>Visit Padmaja Naidu Himalayan Zoological Park</li>
                            <li>Tourist Activities</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>Tourist Activities</h2>
                        <ul>
                            <li>Sightseeing from Tiger Hill Sunrise Observatory Deck</li>
                            <li>Stroll in Chowrasta & Mall Road</li>
                            <li>Tour of Happy Valley Tea Estate</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
 

    <script>
        $(document).ready(function() {
            $('input[type=radio][name=options]').change(function() {
                if (this.id == 'option1') {
                    $('#places-to-visit').show();
                    $('#activities').hide();
                } else if (this.id == 'option2') {
                    $('#places-to-visit').hide();
                    $('#activities').show();
                }
            });
        });
    </script>
</body>
</html>

<html>
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
                    <li class="nav-item"><a class="nav-link" href="index2.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="rooms.html">ROOMS</a></li>
                    <li class="nav-item"><a class="nav-link" href="cancel.php">BOOKING STATUS</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">SERVICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="">contact</a></li>
                    
                </ul>
                <ul class="navbar-nav">
                    
                <li class="nav-item dropdown">
        
        
    </li> <!-- Add this closing tag -->
    
                    
                </ul>
            </div>

        </div>
    </nav>
    </body>
    </html>  
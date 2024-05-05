
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mountain Adventure Services</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f4f4f9;
    }

    .container {
      background: white;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    p {
      text-align: center;
      font-size: 1.1rem;
      color: #666;
    }

    .service-card {
      border: none;
      border-radius: 8px;
      transition: box-shadow 0.3s ease;
    }

    .service-card:hover {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    
    /* Add animation to the card images */
.card-img-top {
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  max-height: 200px;
  object-fit: cover;
  transition: transform 0.3s ease; /* Add transition for smooth animation */
}

/* Add hover effect to the card images */
.card-img-top:hover {
  transform: scale(1.1); /* Increase scale on hover for animation effect */
}

    .card-img-top {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      max-height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
      color: #333;
    }

    .card-text {
      font-size: 1rem;
      color: #666;
    }

    .text-muted {
      font-size: 1rem;
      color: #999;
      display: none; /* Hide the price initially */
    }

    .form-check-input {
      margin-top: 15px;
      width: 30px;
      height: 30px;
    }

    button {
      background-color: #5c67f2;
      color: white;
      border: none;
      padding: 15px 30px;
      font-size: 1rem;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 20px;
    }

    button:hover {
      background-color: #4a54e1;
    }
    .custom-form {
  background-color: transparent;
  padding: 20px;
  border-radius: 8px;
}
  </style>
</head>
<body>
  <!-- Background video -->
  <video autoplay muted loop id="bg-video" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1;">
    <source src="169951-842348732_small.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <form id="serviceForm" method="post" class="custom-form">
  <div class="container mt-5">
    <h1 class="display-4 mb-4"> Services</h1>
    <p class="lead mb-5">Experience the thrill of the mountains with our personalized services.</p>
    
      <div class="row">
        <!-- Laundry Service -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="laundry.php">
            <img src="laundri_services.jpg" alt="Laundry Service" class="card-img-top">
          </a>
            <div class="card-body">
              <h5 class="card-title">Laundry Service</h5>
              <p class="card-text">Take the hassle out of laundry during your mountain adventure.</p>
              <div class="form-check">
          <!--      <input type="checkbox" class="form-check-input" id="laundry" name="services[]" value="Laundry">  -->
                <label class="form-check-label" for="laundry"></label>
              </div>
              <p class="text-muted" data-price="700">₹700</p>
            </div>
          </div>
        </div>
        <!-- Food Service -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="food.php">
  <img src="021a2f3d-a075-41c9-a6ed-5083a7e62cde_expgal.jpg" alt="Food Service" class="card-img-top">
</a>

            <div class="card-body">
              <h5 class="card-title">Food Service</h5>
              <p class="card-text">Enjoy delicious and hearty meals prepared by experienced chefs.</p>
              <div class="form-check">
          <!--      <input type="checkbox" class="form-check-input" id="food" name="services[]" value="Food">    -->
                <label class="form-check-label" for="food"></label>
              </div>
              <p class="text-muted" data-price="1500">₹1500</p>
            </div>
          </div>
        </div>
        <!-- Bonfire Arrangement -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="bornfire.php">
            <img src="021a2f3d-a075-41c9-a6ed-5083a7e62cde_expgal.jpg" alt="Bonfire Arrangement" class="card-img-top">
          </a>
            <div class="card-body">
          
              <h5 class="card-title">Bonfire Arrangement</h5>
              <p class="card-text">Gather around a cozy bonfire under the stars for unforgettable evenings.</p>
              <div class="form-check">
           <!--     <input type="checkbox" class="form-check-input" id="bonfire" name="services[]" value="Bonfire">  -->
                <label class="form-check-label" for="bonfire"></label>
              </div>
              <p class="text-muted" data-price="2000">₹2000</p>
            </div>
          </div>
        </div>
        <!-- Guided Hiking Tours -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="bornfire.php">
            <img src="guided-hike_h.webp" alt="Guided Hiking Tours" class="card-img-top">
          </a>
            <div class="card-body">
              <h5 class="card-title">Guided Hiking Tours</h5>
              <p class="card-text">Explore breathtaking trails with experienced guides for a safe and memorable adventure.</p>
              <div class="form-check">
              <!--  <input type="checkbox" class="form-check-input" id="hiking" name="services[]" value="Guided Hiking Tours">  -->
                <label class="form-check-label" for="hiking"></label>
              </div>
              <p class="text-muted" data-price="2500">₹2500</p>
            </div>
          </div>
        </div>
        <!-- Tent Rental 
        <div class="col-md-6 mb-4">
          <div class="card service-card">
            <img src="4b925461.webp" alt="Tent Rental" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Tent Rental</h5>
              <p class="card-text">Rent comfortable and spacious tents for a cozy night's sleep in the mountains.</p>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tent" name="services[]" value="Tent Rental">
                <label class="form-check-label" for="tent"></label>
              </div>
              <p class="text-muted" data-price="1200">₹1200</p>
            </div>
          </div>
        </div> 
        <!-- Mountain Biking -->       -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="bornfire.php">
            <img src="bangalore-mountain-festival-mtb-event-cross-country-olympic.avif" alt="Mountain Biking" class="card-img-top">
          </a>
            <div class="card-body">
              <h5 class="card-title">Mountain Biking</h5>
            <!--  <p class="card-text">Embark on thrilling mountain biking adventures through rugged terrain.</p> -->
              <div class="form-check">
         <!--       <input type="checkbox" class="form-check-input" id="biking" name="services[]" value="Mountain Biking">   -->
                <label class="form-check-label" for="biking"></label>
              </div>
              <p class="text-muted" data-price="1800">₹1800</p>
            </div>
          </div>
        </div>
      </div>
      
      <a href="index2.php" class="btn btn-secondary home-btn">Go to Home</a>
    </form>
    <!-- Notification bar for displaying selected service price -->
    <div id="notification" class="alert alert-info mt-4" style="display: none;"></div>
  </div>

  <!-- JavaScript code 
  <script>
    function submitForm() {
      var selectedServices = [];
      var selectedPrices = [];
      var checkboxes = document.querySelectorAll('input[name="services[]"]:checked');
      checkboxes.forEach((checkbox) => {
        selectedServices.push(checkbox.value);
        var price = checkbox.parentNode.nextElementSibling.getAttribute('data-price');
        selectedPrices.push(price);
      });
      if (selectedServices.length > 0) {
        var notification = document.getElementById('notification');
        notification.style.display = 'block';
        notification.innerHTML = 'You have selected: ' + selectedServices.join(', ') + '.<br>';
        notification.innerHTML += 'Total Price: ₹' + selectedPrices.reduce((acc, curr) => parseInt(acc) + parseInt(curr), 0);
      } else {
        alert("Please select at least one service.");
      }
    }
  </script>
</body>
  -->
</html>











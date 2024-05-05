<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Service</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #8b0000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        main {
            flex: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 28px;
            color: #8b0000;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 24px;
            color: #8b0000;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #8b0000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin-bottom: 10px;
        }
        .timing-display {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            border-radius: 5px;
        }

        .timing-display h3 {
            font-size: 18px;
            color: #8b0000;
            margin-bottom: 10px;
        }

        .timing-display p {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .contact-info {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            border-radius: 5px;
        }

        .contact-info h3 {
            font-size: 18px;
            color: #8b0000;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="timing-display">
            <h3>Timings</h3>
            <p>Drop-off: 7:00 AM - 10:00 PM</p>
            <p>Pick-up: 9:00 AM - 8:00 PM</p>
        </div>
        <div class="contact-info">
            <h3>Room Service</h3>
            <p>Contact: +91 123 456 7890</p>
        </div>
    <header>
        <h1>Laundry Service</h1>
    </header>
    <main>
        <section>
            <h2>Wash and Fold Service</h2>
            <p>Our professional laundry service offers a convenient wash and fold option for your garments. Simply drop off your laundry, and we'll take care of the rest.</p>
            <h3>Pricing</h3>
            <ul>
                <li>Shirts: ₹50 each</li>
                <li>Trousers: ₹80 each</li>
                <li>Dresses: ₹120 each</li>
                <li>Bed Linen: ₹150 per set</li>
                <li>Towels: ₹30 each</li>
            </ul>
        </section>
        <section>
            <h2>Dry Cleaning</h2>
            <p>For your delicate garments, we offer professional dry cleaning services. Our experienced staff will ensure your clothes are cleaned and handled with utmost care.</p>
            <h3>Pricing</h3>
            <ul>
                <li>Suits: ₹400 each</li>
                <li>Blazers: ₹300 each</li>
                <li>Dresses: ₹250 each</li>
                <li>Coats: ₹400 each</li>
            </ul>
        </section>
        <section>
            <h2>Additional Services</h2>
            <ul>
                <li>Shoe Cleaning: ₹100 per pair</li>
                <li>Laundry Bag Rental: ₹50 per bag</li>
                <li>Express Service (24-hour turnaround): Additional 25% charge</li>
            </ul>
        </section>
        <section>
            <h2>Contact Us</h2>
            <p>For any inquiries or to place an order, please call our laundry service at:</p>
            <p><strong>+91 123 456 7890</strong></p>
            <p>You can also visit our laundry service counter located in the hotel lobby.</p>
        </section>
    </main>
    <footer>
        <p>Prices are subject to change without prior notice.</p>
        <p>Taxes will be applied as applicable.</p>
    </footer>
</body>
</html>
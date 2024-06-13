<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .sub-header {
            height: 50vh;
            width: 100%;
            background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(img/p3.jpg);
            background-position: center;
            background-size: cover;
            text-align: center;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sub-header h1 {
            margin: 0;
        }

        .sub-header p {
            margin: 10px 0 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }

        .header a:hover {
            background-color: #555;
        }

        .about {
            width: 80%;
            margin: auto;
            padding-top: 80px;
            padding-bottom: 50px;
            display: flex;
            justify-content: space-between;
        }

        .about-col {
            flex-basis: 48%;
            padding: 30px 2px;
        }

        .about-col img {
            width: 100%;
            height: auto;
            max-height: 500px;
        }

        .about-col h1 {
            padding-top: 0;
        }

        .about-col p {
            padding: 15px 0 25px;
            font-size: 16px;
            line-height: 1.6;
        }

        .red-btn {
            border: 1px solid #f44336;
            background: transparent;
            color: #f44336;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .red-btn:hover {
            color: #fff;
            background: #f44336;
        }

        .about-right {
            flex-basis: 48%;
            padding: 30px 2px;
            background: #f9f9f9;
            border-radius: 10px;
        }

        .about-right h3 {
            background: #f44336;
            color: #fff;
            padding: 10px 15px;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .about-right div {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #101010;
            padding: 8px;
            box-sizing: border-box;
        }

        .about-right div img {
            width: 40%;
            max-height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .about-right div p {
            flex-basis: 50%;
            padding: 10px;
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="index.php">Home</a>
        <a href="blog.php">Blog</a>
        <a href="guide.php">Guide</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </div>

    <div class="sub-header">
        <h1>About Us</h1>
        <p>Welcome to our flower shop!</p>
    </div>

    <!-- About Section -->
    <div class="about">
        <div class="about-col">
            <img src="img/home_flower.jpg" alt="Banner Image">
            <h1>About Our Company</h1>
            <p>"Step into our ornamental flower shop and immerse yourself in a world of beauty, where each bloom tells a story and every arrangement is a work of art."</p>
            <a href="#" class="red-btn">Read More</a>
        </div>
        <div class="about-right">
            <h3>Why Choose Us</h3>
            <div>
                <img src="img/a1.jpg" alt="Quality Products">
                <p>Quality Products</p>
            </div>
            <div>
                <img src="img/a2.jpg" alt="Customer Service">
                <p>Great Customer Service</p>
            </div>
            <div>
                <img src="img/a3.jpg" alt="Fast Delivery">
                <p>Fast Delivery</p>
            </div>
        </div>
    </div>
</body>
</html>

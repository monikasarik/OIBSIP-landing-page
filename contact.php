<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ornamental Flowers</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Additional styling for contact page */
        .contact-form {
            margin-top: 50px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            max-width: 600px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form textarea {
            height: 150px;
        }

        .contact-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<header>
        <nav class="navbar container">
            <div class="logo">
                <img src="./img/flower.jpg" alt="logo">
                <a href="#">Ornamental Flowers</a>
            </div>

            <button class="toggle_btn" id="toggle_btn">
                <i class="ri-menu-line"></i> 
            </button>
            
            <div class="nav_menu" id="nav_menu"> 
                <button class="close_btn" id="close_btn">
                    <i class="ri-close-line"></i>
                </button>
                <ul class="nav_menu_list"> 
                    <li class="nav_menu_item"><a href="index.php" class="nav_menu_item_link active">home</a></li>
                    <li class="nav_menu_item"><a href="blog.php" class="nav_menu_item_link">blog</a></li>
                    <li class="nav_menu_item"><a href="guide.php" class="nav_menu_item_link">guide</a></li>
                    <li class="nav_menu_item"><a href="about.php" class="nav_menu_item_link">about</a></li>
                    <li class="nav_menu_item"><a href="#" class="nav_menu_item_link">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    

    <section class="contact-form">
        <h2><br><br><br>Contact Us</h2>
        <form action="submit_order.php" method="POST" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
        <script>
            function validateForm() {
                var name = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                var address = document.getElementById("address").value;
                var message = document.getElementById("message").value;
                if (name == "" || email == "" || phone == "" || address == "" || message == "") {
                    alert("Please fill out all fields.");
                    return false;
                }
                else {
                    alert("Thank you, " + name + "!");
                    return true;
                }
            }
        </script>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="footer_section">
                    <h3>About Us</h3>
                    <p>"Step into our ornamental flower shop and immerse yourself in a world of beauty, where each bloom tells a story and every arrangement is a work of art."</p>
                    <ul class="social_links">
                        <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="#"><i class="ri-instagram-fill"></i></a></li>
                    </ul>
                </div>
                <div class="footer_section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="guide.php">Guide</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer_section">
                    <h3>Contact Us</h3>
                    <p>123 Ornamental St, Flowerland</p>
                    <p>Email: info@ornamentalflowers.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p>&copy; 2024 Ornamental Flowers. All rights reserved. | Designed by Monika Deokar</p>
        </div>
    </footer>

    <script src="./js/main.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
</body>
</html>

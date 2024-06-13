<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornamental Flowers</title>
    <link rel="stylesheet" href="./css/style.css">
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
                    <li class="nav_menu_item"><a href="#" class="nav_menu_item_link active">home</a></li>
                    <li class="nav_menu_item"><a href="blog.php" class="nav_menu_item_link">blog</a></li>
                    <li class="nav_menu_item"><a href="guide.php" class="nav_menu_item_link">guide</a></li>
                    <li class="nav_menu_item"><a href="about.php" class="nav_menu_item_link">about</a></li>
                    <li class="nav_menu_item"><a href="contact.php" class="nav_menu_item_link">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="hero">
        <section class="wrapper">
            <div class="hero_content">
                <div class="hero_img_wrapper">
                    <div class="hero_img">
                        <img src="./img/home_flower.jpg" alt="img">
                    </div>
                </div>
                <div class="hero_about_wrapper">
                    <div class="hero_about">
                        <h4 class="title"><br><br><br>Flowers can be grown in gardens or pots and can enhance the beauty of any place.</h4>
                        <div class="main_title">
                            <h3>“ We love flowers because they make everything so pretty!”
                                <br> <span class="author_name">Monika Deokar</span>
                            </h3>
                        </div>
                        <div class="tagline">
                            <p>Flowers are one of the most beautiful gifts given to us by Nature.</p>
                        </div>
                        <div class="btn_wrapper">
                            <form action="submit_order.php" method="POST" onsubmit="return validateForm()">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required><br>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required><br>
                                <label for="message">Message:</label><br>
                                <textarea id="message" name="message" rows="5" cols="30" required></textarea><br>
                                <input type="submit" value="Submit">
                            </form>
                            <script>
                                function validateForm() {
                                    var name = document.getElementById("name").value;
                                    var email = document.getElementById("email").value;
                                    var message = document.getElementById("message").value;
                                    if (name == "" || email == "" || message == "") {
                                        alert("Please fill out all fields.");
                                        return false;
                                    }
                                    else {
                                        alert("Thank you, " + name + "!");
                                        return true;
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

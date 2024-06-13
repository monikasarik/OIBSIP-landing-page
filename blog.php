<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornamental Flowers - Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .blogs .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap:1.5rem;
        }

        .blogs .box-container .box{
            overflow: hidden;
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            background:#fff;
        }

        .blogs .box-container .box img{
            height:25rem;
            width:100%;
            object-fit: cover;
        }

        .blogs .box-container .box .content{
            padding:2rem;
        }

        .blogs .box-container .box .content .icons{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 1.5rem;
            margin-bottom: 1rem;
            border-bottom: var(--border);
        }

        .blogs .box-container .box .content .icons a{
            color:var(--light-color);
            font-size: 1.5rem;
        }

        .blogs .box-container .box .content .icons a:hover{
            color:var(--black);
        }

        .blogs .box-container .box .content .icons a i{
            color:var(--orange);
            padding-right: .5rem;
        }

        .blogs .box-container .box .content h3{
            line-height: 1.8;
            color:var(--black);
            font-size: 2.2rem;
            padding:.5rem 0;
        }

        .blogs .box-container .box .content p{
            line-height: 1.8;
            color:var(--light-color);
            font-size: 1.5rem;
            padding:.5rem 0;
        }
        .about-col {
            flex-basis: 48%;
            padding: 30px 2px;
        }

        .about-col img {
            width: 50%;
            height: 80%;
            display: block;
            margin: 0 auto;
            max-height: 500px;
        }

        .about-col h1 {
            padding-top: 0; text-align: center;
            
        }

        .about-col p {
            padding: 15px 0 25px;
            font-size: 16px;
            line-height: 1.6;
            text-align: center;
        }

        .footer{
            background: #fff;
        }

        .footer .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap:1.5rem;
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
                    <li class="nav_menu_item"><a href="#" class="nav_menu_item_link">blog</a></li>
                    <li class="nav_menu_item"><a href="guide.php" class="nav_menu_item_link">guide</a></li>
                    <li class="nav_menu_item"><a href="about.php" class="nav_menu_item_link">about</a></li>
                    <li class="nav_menu_item"><a href="contact.php" class="nav_menu_item_link">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    

    <section class="blogs">
    <div class="about-col">
            <img src="img/blog-photo.jpg" alt="Banner Image"><br><br>
            <h1>Blogs</h1>
            <p>"Discover inspiration, tips, and insights on gardening, landscaping, and floral design in our blog."</p>
            
        </div>
        <div class="container">
            <h2>Our Latest Blogs</h2>
            <div class="box-container">
                <div class="box">
                    <img src="img/p1.jpg" alt="Blog Image">
                    <div class="content">
                        <div class="icons">
                            <a href="#"><i class="ri-heart-line"></i> 50 Likes</a>
                            <a href="#"><i class="ri-chat-3-line"></i> 25 Comments</a>
                        </div>
                        <h3>Table Designing</h3>
                        <p>"Elevate your table decor with our blog, where we share expert tips,<br> creative ideas, and inspiration for designing beautiful and memorable table settings. <br>From seasonal themes to elegant centerpieces, discover how to create a stunning dining experience for any occasion."</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/p2.jpg" alt="Blog Image">
                    <div class="content">
                        <div class="icons">
                            <a href="#"><i class="ri-heart-line"></i> 40 Likes</a>
                            <a href="#"><i class="ri-chat-3-line"></i> 20 Comments</a>
                        </div>
                        <h3>Marriage place Desining</h3>
                        <p>"Unlock the secrets to perfect wedding venue design with our blog. Discover expert tips, trends, and inspiration for creating the ultimate setting for your special day, from stunning decorations to personalized touches that reflect your style and love story."</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/p3.jpg" alt="Blog Image">
                    <div class="content">
                        <div class="icons">
                            <a href="#"><i class="ri-heart-line"></i> 35 Likes</a>
                            <a href="#"><i class="ri-chat-3-line"></i> 15 Comments</a>
                        </div>
                        <h3>Gallary Designing</h3>
                        <p>"Enhance your gallery with the enchanting touch of ornamental flowers. Explore our blog for tips and ideas on incorporating vibrant blooms into your gallery space, creating stunning displays that complement your artwork and add natural beauty to the ambiance. From floral arrangements to living walls, elevate your gallery design with the timeless charm of flowers."</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/p4.jpg" alt="Blog Image">
                    <div class="content">
                        <div class="icons">
                            <a href="#"><i class="ri-heart-line"></i> 30 Likes</a>
                            <a href="#"><i class="ri-chat-3-line"></i> 10 Comments</a>
                        </div>
                        <h3>Design Your Favourite Place</h3>
                        <p>"Transform your favorite space with the beauty of ornamental flowers. Discover how to design enchanting gardens, vibrant balconies, or inviting indoor spaces using a variety of colorful blooms. From roses to tulips, create a haven of natural beauty that reflects your personal style and brings joy to every moment."</p>
                    </div>
                </div>
            </div>
        </div>
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
                    <h3>Blog</h3>
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

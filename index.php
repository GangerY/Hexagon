<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <script src="script/index.js"></script>
</head>
<body class="main-wrapper">
    <div class="header-main">
        <div class="navbar">
            <a href="#portfolio">PORTFOLIO</a>
            <div class="divider"></div>
            <a href="#about-us">ABOUT</a>
        </div>
        <div class="logo">
            <ul class="cell clear">
                <li> 
                    <div class="hexagon">
                        <img src="image/logo.png" alt="">
                    </div> 
                </li>
            </ul>
        </div>
        <div class="navbar">
            <a href="#blog">BLOG</a>
            <div class="divider"></div>
            <a href="#get-in-touch">GET IN TOUCH</a>
        </div>
    </div>
    <div id="portfolio" class="portfolio">
        <div class="top-rib">
            <div class="rib-little"></div>
            <div class="rib-little"></div>
        </div>
        <div class="portfolio-wrapper">            
            <ul class="grid clear v2">
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio1.png" alt="">
                        <div class="color-filter"></div>
                    </div> 
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio2.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio3.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio4.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio5.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio6.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio7.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio8.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio9.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio10.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio11.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio12.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
                <li class="element"> 
                    <div class="hexagon">
                        <img src="image/portfolio13.png" alt="">
                        <div class="color-filter"></div>
                    </div>
                </li>
            </ul>
            <div class="pages">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot select"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="rib"></div>
        </div>
    </div>
    <div id="about-us" class="about-us">
        <div class="about-us-wrapper">
            <div class="implementer-photo">
                <ul class="cell clear">
                    <li> 
                        <div class="hexagon">
                            <img src="image/about-us.png" alt="">
                            <div class="color-filter"></div>
                        </div> 
                    </li>
                </ul>
            </div>
            <div class="main-text">
                <p class="implementer">Smith Anderson</p>
                <p class="career">Illustrator & Character Designer</p>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor, nibh at sagittis tristique, enim magna pretium augue, eget consectetur sem dui non urna. Integer gravida, diam congue molestie fringilla, elit odio rhoncus turpis, ac dictum libero elit vel metus. Morbi egestas sit amet velit eget venenatis. Mauris porttitor, nibh at sagittis tristique, enim magna pretium augue, eget consectetur sem dui non urna</span>
                <div class="social-button">
                    <div class="social-gradient">
                        <div class="facebook"></div>
                        <div class="color-filter"></div>
                    </div>
                    <div class="social-gradient">
                        <div class="twitter"></div>
                        <div class="color-filter"></div>
                    </div>
                    <div class="social-gradient">
                        <div class="google-plus"></div>
                        <div class="color-filter"></div>
                    </div>
                    <div class="social-gradient">
                        <div class="pinterest"></div>
                        <div class="color-filter"></div>
                    </div>
                    <div class="social-gradient">
                        <div class="linkedin"></div>
                        <div class="color-filter"></div>
                    </div>
                    <div class="social-gradient">
                        <div class="dribble"></div>
                        <div class="color-filter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="get-in-touch" class="get-in-touch">
        <div class="get-in-touch-wrapper">
            <div class="get-in-touch-header">
                <p>Get In Touch</p>
                <span>In order to get in touch use the contact form below:</span>
            </div>
            <div class="container">
                <form action="" method="post" id="ajax_form">
                    <input type="text" name="name" placeholder="Name (Required)" required>
                    <input type="email" name="email" placeholder="Email (Required)" required>
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" placeholder="Write your message here..." cols="30" rows="10"></textarea>
                    <button class="send" id="btn">SEND</button>
                </form>
                <div class="contact-information">
                    <p><strong>Quisque Hendrerit:</strong> purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus morbi vitae. </p>
                    <ul class="contacts">
                        <li class="location">
                            <!-- <div class="location"></div> -->
                            <span>Elm St. 14/05 Lost City</span>
                        </li>
                        <li class="cellphone">
                            <!-- <div class="cellphone"></div> -->
                            <span>+ 3528 331 86 35</span>
                        </li>
                        <li class="mail">
                            <!-- <div class="mail"></div> -->
                            <span>info@hexalcorp.com</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>          
    <div class="footer">
        <span>© Copyright 2013 by PSDchat</span>
    </div>
</body>
</html>
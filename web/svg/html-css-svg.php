<!DOCTYPE html>
<html>
    <head>
        <title>| SEAN BICKMORE |</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- JS -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        
        <!-- Tab Icon -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Quicksand|Cuprum|Amatic+SC|Indie+Flower|Pompiere' rel='stylesheet' type='text/css'>
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/PACK/CSS/style.css"/>
    </head>
    <body>
        <div class="navigation">
            <div class="logo">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/PACK/SVG/logo.svg'); ?>
            </div>
            
            <div class="dropNav">
                <div class="home-menu text-center">
                    <a class="navbtn" href="/index.php">Home</a>
                    
                    <div class="dropdown-content1">
                        <!-- Links Here -->
                        
                    </div>
                </div>
                
                <div class="web-menu text-center">
                    <a class="navbtn" href="/web.php">Web</a>
                    
                    <div class="dropdown-content2">
                        <!-- Links Here -->
                        <a href="#">CSS3</a>
                        <a href="#">SVG</a>
                    </div>
                </div>  
                
                <div class="other-menu text-center">
                    <a class="navbtn" href="#">Other</a>
                    
                    <div class="dropdown-content3">
                        <!-- Links Here -->
                        
                    </div>
                </div>
            </div>
        </div>

         <!-- Main Content Container -->
        <div class="content-background">
            <div class="left-content">
                <button>
                    <div class="blackbox">
                        <div class="caption">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/PACK/SVG/HTMLCSS.svg'); ?>
                        </div>
                    </div>
                </button>
            </div>
            
            <div class="right-content">
                <!-- Rightmost Content|Desktop&Mobile -->
                <div class="welcome">
                    <p class="header-medium text-orange">Welcome!</p>
                    <p class="text-small text-neon_pink">Welcome to my portfolio, where I hope to encapsulate all the things I learn and make in one neat and (hopefully) aesthetically pleasing place</p>
                    <p class="text-link"><span class="arr arrTransitionLeft">&darr;</span><button data-text-swap=" Less About Me " href="#" role="button"> More About Me </span></button><span class="arr arrTransitionRight">&darr;</span></p>
                </div>
                
                <div class="hobbies right-content-transition">
                    <p class="header-medium text-purple">Hobbies</p>
                    <p class="text-small text-neon_pink">In an unprofessional sense my hobbies are Music Production, Drawing, Digital Design, Web Design, and tinkering in Games Development. 
                    And in a professional sense these hobbies channel great creative energy into projects with many, in most cases, being extremely beneficial and relevant. Everyday (even in making this portfolio) I'm 
                    </br><span class="boldFontSwap">Learning new things!</span></p>
                </div>
                
                <div class="web-design right-content-transition">
                    <p class="header-medium text-purple">Web Design</p>
                    <p class="text-small text-neon_pink">What really gets my blood pumping is the opportunity to work on new and exciting things with people who are equally passionate about the prospects of 
                    their ideas as I am in my interest to help. Creating expressive, interactive online platforms to advertise and host your idea 
                    without sacrificing its tangible image is a </br><span class="boldFontSwap">true joy!</span></p>
                </div>
                
                <div class="methodology right-content-transition">
                    <p class="header-medium text-purple">Methodology</p>
                    <p class="text-small text-neon_pink">When it comes to close-up collaboration and consolidation on projects I thoroughly believe in the application of Agile Methodolgies. 
                    It's functioned especially effectively in many of my college projects. Here's to you; </br><span class="boldFontSwap">Scrum!</span></p>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <div class="footerLeft">
                <p class="text-center footerLogo">Thanks for Looking!</p>
            </div>
            
            <div class="footerRight">
                <div class="innerRight">
                    <p class="innerRightTop">&copy;2016-20XX Sean Bickmore</p>
                    <p class="innerRightMid">Site is Powered by my own Wondrous Hands and made reality thanks to the wonderful Cloud 9 IDE!</p>
                    <div class="socialLinks">
                        <a href="https://goo.gl/JBdBTF" target="_blank"><img class="linkedIn" src="/PACK/IMG/LinkedIn_Icon.jpg" alt="LinkedIn Icon"/></a>
                        <a href="https://goo.gl/rxJa4V" target="_blank"><img class="youTube" src="/PACK/IMG/YouTube_Icon.jpg" alt="YouTube Icon"/></a>
                        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Javascript File -->
        <script src="/PACK/JS/main.js"></script>
    </body>
</html>
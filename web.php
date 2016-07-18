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
        <link rel="stylesheet" href="/PACK/CSS/additional.css"/>
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
        <div class="section-background">
            <div class="section-content">
                <div class="sub-header">
                    <p class="header-medium text-neon_pink">WEB</p>
                </div>
                
                <div class="section-content-box">
                    <a href="#">
                        <div class="preview">
                            <!-- Images Here -->
                        </div>
                    </a>
                    <div class="sub-caption">
                        <p class="header-medium"><a class="section-link text-orange"href="#">CSS3</a></p>
                        <p class="text-small text-white">Neat CSS Tricks!</p>
                        <div class="divider"></div>
                    </div>
                </div>
                
                <div class="section-content-box">
                    <a href="#">
                        <div class="preview">
                            <!-- Images Here -->
                        </div>
                    </a>
                    <div class="sub-caption">
                        <p class="header-medium"><a class="section-link text-orange" href="#">SVG</a></p>
                        <p class="text-small text-white">Self-drawing content!</p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Sean Bickmore</title>
        
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

            </div>
            
            <div class="dropNav">
                <div class="home-menu text-center">
                    <a class="navbtn" href="/">Home</a>
                    
                    <div class="dropdown-content1">
                        <!-- Links Here -->
                        
                    </div>
                </div>
                
                <div class="web-menu text-center">
                    <a class="navbtn" href="/web/web-section">Web</a>
                    
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
                <div class="sub-header"></div>
                
                <div class="section-content-box group">
                    <a href="#">
                        <div class="section-preview">
                            <!-- Images Here -->
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/PACK/SVG/CSS3_Icon.svg'); ?>
                        </div>
                    </a>
                    <div class="sub-caption">
                        <p class="header-medium"><a class="section-link" href="#">CSS3</a></p>
                        <p class="text-small text-white">Nifty CSS3 Looks, Tricks, and Animations!</p>
                        <div class="divider"></div>
                    </div>
                </div>
                
                <div class="section-content-box">
                    <a href="#">
                        <div class="preview">
                            <!-- Images Here -->
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/PACK/SVG/SVG_Icon.svg'); ?>
                        </div>
                    </a>
                    <div class="sub-caption">
                        <p class="header-medium"><a class="section-link" href="#">SVG</a></p>
                        <p class="text-small text-white">Scalable Vector Graphics for Interactivity and Animation!</p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
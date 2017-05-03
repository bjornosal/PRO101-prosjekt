<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" type="text/css" href="../css/forside.css">



        <title>Forside</title>



    </head>

    <body>

        <?php 
        require 'db-login.php';
        require 'header.php'; 
        require 'search.php';
        require 'tip-box.php';


        ?>
        <!--

TO-DO: 

Ha framviseren til å være midstilt; ca 80% av skjermstørrelsen. 
Du kan eventuelt ha faste størrelser på det. 




-->
        <div class="slideshow-main-container">
        <div class='slideshow'>
            <div class='slideshow-info'> Phasellus sagittis nunc eu diam facilisis dignissim. Donec pulvinar, enim dignissim gravida condimentum, sem dolor euismod felis, vitae sollicitudin ligula ex a justo. Pellentesque eget pretium nulla, sed dictum odio. Fusce eget eros sollicitudin, feugiat arcu sed, congue tellus. Nam consequat vestibulum dolor, laoreet fringilla nibh sodales ac. Duis blandit, metus malesuada vulputate ultrices, tortor ipsum ornare orci, eu egestas lorem ipsum non est. Sed dapibus gravida sapien, vel aliquet libero. Fusce scelerisque tempus purus sed efficitur. Phasellus et nisl aliquet, tincidunt sapien nec, posuere lacus. In hac habitasse platea dictumst. Mauris suscipit eros eu pharetra pharetra. Donec vel lectus non lacus euismod viverra. In imperdiet posuere nisi vitae ultricies.
                <br>
               <div class='social-fb'>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=">
                        <img src="../photos/facebook-icon.svg" alt="Facebook"> 
                    </a>
                </div>



                <div class='social-tw'>
                    <a href="https://twitter.com/home?status=">
                        <img src="../photos/twitter-icon-square-logo.png" alt="Twitter"> 
                    </a>
                </div>



                <div class='social-email'>
                    <a href="#">
                        <img src="../photos/email-icon.svg" alt="Email"> 
                    </a>

                </div>
            </div>



            <div class='slide'>
                <div class='image01'>
                    <img src="../photos/we-event01.jpg">
                </div>
            </div>

            <div class='slide'>
                <div class='image02'> </div>
                <div class='info'> Halla </div>
            </div>
            <div class='slide'>
                <div class='image03'> </div>
                <div class='info'> Yo </div>
            </div>
            
            <a href="#" class="button back grey"><span></span>Back</a>
            <a href="#" class="button next grey"><span></span>Next</a>

            <!--<div class='button back'>Back</div>
            <div class='button forward'>Forward</div> -->
        </div>
            </div>



    </body>
</html>

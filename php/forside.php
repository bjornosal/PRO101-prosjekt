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
                <div class='slideshow-info'> 
                    <div class="slideshow-info-text">
                        <h3>Tittel</h3>
                        <p>Vi som mennesker er i et samspill med naturen. Det er så mye vi kan ta del i og som vi i dag mister, fordi vi hele tiden er på vei til det neste i livet. I mine sandbilder er fokuset samspillet mellom bølger og sandkorn. Stopp opp - og bli med på oppdagelsen du også. Da blir du en del av interaksjonen mellom bølger og sand. 
                        </p>
                    </div>
                    <div class="slideshow-info-social">
                        <div class="social">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=">
                               <img src="../photos/fb_icon.png" alt="Facebook">
                            </a>
                        </div>

                        <div class="social">
                            <a href="https://twitter.com/home?status=">
                                <img src="../photos/twitter_icon.png" alt="Twitter"> 
                            </a>
                        </div>
                        
                        <div class="social">
                            <a href="#">
                                <img src="../photos/email_icon.png" alt="Email"> 
                            </a>

                        </div>
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
            </div>

        </div>
    </body>
</html>

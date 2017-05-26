
<script>
    $('.menu-dropdown').children().hide();
    $('.menu-dropdown').children().show();
    

    $(document).ready(function(){
        $('.menu-hamburger').click(function() {
            $('.menu-dropdown').children().show();
            $('.menu-dropdown').slideDown();
            $('.menu-hamburger').hide();
            $('.menu-x').show();
        });
    });

    $(document).ready(function(){
        $('.menu-x').click(function() {
            $('.menu-dropdown').children().hide();
            $('.menu-dropdown').slideUp();
            $('.menu-hamburger').show();
            $('.menu-x').hide();
        });
    });

    //Takes the menu away if one clicks outside the dropdown menu/menu bar
    $(document).mouseup(function (ev) {
        var container = $('.menu-dropdown');
        if (!container.is(ev.target) && container.has(ev.target).length === 0) 
        {
            $('.menu-dropdown').slideUp();
            $('.menu-hamburger').show();
            $('.menu-x').hide();
            $('.menu-dropdown').children().hide();
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop()>75) {
            $('.menu-dropdown').slideUp();
            $('.menu-hamburger').show();
            $('.menu-x').hide();
            $('.menu-dropdown').children().hide();
        }   

    });

</script>

<div class="header-container">
    <!--Container with hamburgermenu-->
    <!--Disappears if viewport too small-->
    <div class="menu-container"> 
        <div class="menu-button menu-hamburger">
            <div class="menu-line"></div>            
            <div class="filler menu-line "></div>            
            <div class="menu-line"></div>            
            <div class="filler menu-line"></div>            
            <div class="menu-line"></div>
        </div>

        <div class="menu-button menu-x">
            <div class="x-line"></div>
            <div class="x-line x-line-two"></div>

        </div>
    </div>


    <div class="logo-container">
        <div class="logo-filler"></div>
        <a href="index.php">
            <div class="logo"><strong>WEVENT</strong></div>
            <div class="tag-line-container"><p>event<br>finder</p></div>
        </a>
    </div>

    <div class="language-container">
        <a href=""><div class="language-button">ENGLISH</div></a>
    </div>


</div>

<!--MenuDropdown-->
<div class="menu-dropdown">
    <a href="index.php">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/home-icon.png">
            </div>
            <div class="menu-choice-text">HJEM</div>
        </div>
    </a>
    <a href="campusInfo.php">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/uni-icon.png">
            </div>
            <div class="menu-choice-text">CAMPUS</div>
        </div>
    </a>
    <a href="event-calendar.php">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/cal-icon.png">
            </div>
            <div class="menu-choice-text">KALENDER</div>
        </div>
    </a>
    <a href="aboutWevent.php">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/about-us.png">
            </div>
            <div class="menu-choice-text">OM WEVENT</div>
        </div>
    </a>
    <a href="login.php">
        <div class="navigation-container login-link">
            <div class="icon">
                <img src="../photos/icons/login-icon.png">
            </div>
            <div class="menu-choice-text">ADMINISTRATOR</div>
        </div>
    </a>
</div>



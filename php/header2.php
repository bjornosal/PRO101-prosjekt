<div class="header-container">

    <!--Container with hamburgermenu-->
    <!--Disappears if viewport too small-->
    <div class="menu-container"> 
        <div class="menu-button">
            <div class="menu-line"></div>            
            <div class="filler menu-line "></div>            
            <div class="menu-line"></div>            
            <div class="filler menu-line"></div>            
            <div class="menu-line"></div>
        </div>
    </div>

    <div class="logo-container">
        <div class="logo"><strong>WEVENT</strong></div>
        <div class="tag-line-container"><p>event<br>finder</p></div>
    </div>
</div>
<div class="menu-dropdown">
    <a href="#">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/home-icon.png">
            </div>
            <div class="menu-choice-text">HJEM</div>
        </div>
    </a>
    <a href="#">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/uni-icon.png">
            </div>
            <div class="menu-choice-text">CAMPUS</div>
        </div>
    </a>
    <a href="#">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/cal-icon.png">
            </div>
            <div class="menu-choice-text">KALENDER</div>
        </div>
    </a>
    <a href="#">
        <div class="navigation-container">
            <div class="icon">
                <img src="../photos/icons/about-us.png">
            </div>
            <div class="menu-choice-text">OM WEVENT</div>
        </div>
    </a>
</div>


<script>
    /**Make changes to js so that it animates the movement to be more clean. Also add gray overlay on rest of screen when dropdown is shown.*/

    //Shows the menu on toggle of the button
    $(document).ready(function(){
        $('.menu-button').click(function() {
            $('.menu-dropdown').toggle();
        });
    });

    //Takes the menu away if one clicks outside the dropdown menu/menu bar
    $(document).mouseup(function (e) {
        var container = $(".menu-dropdown");

        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            container.hide();
        }
    });
</script>
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
    <a href="#">CAMPUS</a>
    <a href="#">EVENTS</a>
    <a href="#">OM OSS</a>                
    <a href="#">KALENDER</a>
</div>


<script>
    /**Make changes to js so that it animates the movement to be more clean. Also add gray overlay on rest of screen when dropdown is shown.*/
    $(document).ready(function(){
        $('.menu-button').click(function() {
            $('.menu-dropdown').toggle();
        });
    });

    $(document).mouseup(function (e) {
        var container = $(".menu-dropdown");

        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            container.hide();
        }
    });
</script>
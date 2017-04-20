<div class="header-container">
    <div class="nav-container">

        <div class="nav-button">
            <div class="dropdown-container">
                <div class="nav-dropdown">
                    <a href="#">CAMPUS</a>
                    <a href="#">EVENTS</a>
                    <a href="#">OM OSS</a>                
                    <a href="#">KALENDER</a>
                </div>
                <div>
                    <span class="nav-text"><strong>MENY</strong></span>
                </div>
                <div class="nav-button-line">
                    <div class="linedivider"></div>
                </div>
                <div class="nav-button-line">
                    <div class="linedivider"></div>
                </div>

                <div class="nav-button-line">
                    <div class="linedivider"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="filler-container"></div> 
    <div class="logo-container">
        
        <!--<p><strong>WEVENT</strong></p>-->
    </div>
    <div class="language-container">
    </div>
</div>

<script>
    /**Make changes to js so that it animates the movement to be more clean. Also add gray overlay on rest of screen when dropdown is shown.*/
    $(document).ready(function(){
        $('.nav-button').click(function() {
            $('.nav-dropdown').toggle();
        });
    });

    $(document).mouseup(function (e) {
        var container = $(".nav-dropdown");

        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            container.hide();
        }
    });
</script>
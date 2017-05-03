
<div class="slideshow-container">
    <div class="slideshow-event-container">
        <a class="slideshow-btn slideshow-left">&#10094;</a>
        <a class="slideshow-btn slideshow-right">&#10095;</a>
        <?php
        $statement = $connection -> prepare('SELECT * FROM event JOIN category AS ca ON event.category_id = ca.category_id LIMIT 3');

        $statement -> execute();
        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {?>

        <div class="event-slide">
            <!--Needs to be put outside of event-slide! Needs fixing (tomorrow?)-->
            <!--<a href="#">-->
            <div class="slideshow-photo-container">
                <img src="../photos/slideshow-default.png">
            </div>
            <!--</a>-->
            <!--Start info container-->
            <div class="event-info-container">
                <div class="event-info">
                    <h2><?=$row['title']?></h2>
                    <p><?=$row['description']?></p>
                </div>
                <div class="event-info-social">
                    <div class="social-icon">
                        <a href="#">
                            <img src="../photos/icons/social-icons/fb_icon.png">
                        </a>
                    </div>
                    <div class="social-icon social-icon-middle">
                        <a href="#">
                            <img src="../photos/icons/social-icons/twitter_icon.png">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#">
                            <img src="../photos/icons/social-icons/email_icon.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End event slide -->
        <?php } ?>
    </div>
</div>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("event-slide");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex> slides.length) {slideIndex = 1} 
        slides[slideIndex-1].style.display = "block"; 
        setTimeout(showSlides, 10000); // Change image every 2 seconds
    }
</script>
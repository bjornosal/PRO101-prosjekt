
<div class="slideshow-container">
    <div class="slideshow-event-container">
        <button class="slideshow-btn slideshow-left" onclick="nextSlide(-1)">&#10094;</button>
        <button class="slideshow-btn slideshow-right" onclick="nextSlide(1)">&#10095;</button>
        <?php
        $statement = $connection -> prepare('SELECT * FROM event JOIN category AS ca ON event.category_id = ca.category_id LIMIT 3');

        $statement -> execute();
        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {?>
        <a href="<?= $row['event_link'] ?>" target="_blank">
            <div class="event-slide">
                <div class="slideshow-photo-container">
                    <?php if($row['image_path'] != null) { ?>
                    <img src="<?= $row['image_path']?>" alt="Bilde fra arrangement">
                    <?php } else {?>
                    <img  src="../photos/slideshow-default.png" alt="Inget bilde fra arrangement">
                    <?php } ?>
                </div>
                <!--Start info container-->
                <div class="event-info-container">
                    <div class="event-info">
                        <h2><?=$row['title']?></h2>
                        <p><?=$row['description']?></p>
                    </div>
                    <div class="event-info-social">
                        <div class="social-icon social-icon-placing">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=">
                                <img src="../photos/icons/social-icons/fb_icon.png" alt="Facebook ikon">
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="https://twitter.com/home?status=">
                                <img src="../photos/icons/social-icons/twitter_icon.png" alt="Twitter ikon">
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="mailto:?">
                                <img src="../photos/icons/social-icons/email_icon.png" alt="E-post ikon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <!--End event slide -->
        <?php } ?>
    </div>
</div>


<script>
    /**
    * Two functions, one for switching slides and one for doing so automaticly.
    */
    var slideIndex = 1;
    runSlideShow(slideIndex);

    function nextSlide(n) {
        runSlideShow(slideIndex += n);
        clearInterval(switching);
        switching = setInterval("nextSlide(1)", interval);
    }

    function runSlideShow(n) {
        var i;
        var slides = document.getElementsByClassName("event-slide");
        if (n > slides.length) {slideIndex = 1} 
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
        }
        slides[slideIndex-1].style.display = "block";
    }
    var interval = 8000; 
    var switching = setInterval("nextSlide(1)", interval);

</script>
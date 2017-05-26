<button id="top-button" onclick="goToTopFunction()" class="btn-top" title="Tilbake til toppen">
    <img class="up-icon" src="../photos/up-arrow-white.png" alt="Pil opp ikon">
</button>


<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            document.getElementById("top-button").style.display = "block";
        } else {
            document.getElementById("top-button").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function goToTopFunction() {
        document.body.scrollTop = 0; // For Chrome, Safari and Opera 
        document.documentElement.scrollTop = 0; // For IE and Firefox
    }
</script>
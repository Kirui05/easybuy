<?php
$logo_url = get_template_directory_uri() . "/assets/logo.png";
?>
<footer>
    <div class="footer-top">
        <div class="footer-column">
            <img class="logo" src="<?php echo $logo_url; ?>" alt="logo">
        </div>
        <div class="footer-column">
            <div class="footer-header">
                LET US HELP YOU
            </div>
            <a href="#">
                Frequently Asked Questions
            </a>
            <a href="#">
                Contact Us
            </a>
        </div>
        <div class="footer-column">
            <div class="footer-header">
                ABOUT easybuy
            </div>
            <a href="#">
                Privacy Policy
            </a>
            <a href="#">
                About Us
            </a>
        </div>
        <div class="">
            <div class="footer-header">
                FOLLOW US ON
            </div>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>easybuy
            </a>
            <a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
                easybuy
            </a>
            <a href="#">
                <ion-icon name="logo-youtube"></ion-icon>
                easybuy
            </a>
        </div>
    </div>
    <div class="footer-copy">
        <?php echo bloginfo('name'); ?> &copy; 2023. All rights reserved.
    </div>
</footer>

<?php wp_footer(); ?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>



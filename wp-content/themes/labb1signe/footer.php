<footer id="footer">
    <div class="container">
        <div class="row top">

            <!-- Skapat en widget i functions.php och hämtar dynamic sidebar som går att redigera i wp-panel -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar('footer-2');
                ?>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-3');
                ?>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-4');
                ?>
            </div>

            <div class="row bottom">
                <div class="col-xs-12">
                    <p>Copyright &copy; Grupp X, 2023</p>
                </div>
            </div>
        </div>
</footer>

<!--Hämtar innehåll i footer.php -->
<?php
wp_footer();
?>
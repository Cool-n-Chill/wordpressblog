</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('footer')){
                dynamic_sidebar('footer');
            } ?>
        </div>
    </div>
    <div class="footer__copyright">
        <span>@2015 copyright .all right reserved by awesome theme   |   terms policy   |   disclaimer</span>
    </div>
</footer>

<?php wp_footer() ?>

</body>
</html>
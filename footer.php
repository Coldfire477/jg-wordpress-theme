</div>

<footer>

<?php wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'nav botNavigation'

            ])
            ?>
        <div class="copy">
            <p>Copyright <?php echo esc_html(current_time('Y')) ?> - <a href="http://just-web.live/" target="blank" style="color:cadetblue !important">JustGreat</a> by Just-Web</p>
        </div>
</footer>

<?php wp_footer() ?>

    </body>
</html> 


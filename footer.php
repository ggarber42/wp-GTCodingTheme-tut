<?php if(!is_front_page()) { ?>
        </main>
    <?php } ?>

<footer>
<div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="<?php echo site_url('') ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('index.php/blog') ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('index.php/projects') ?>">Projects</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('index.php/about') ?>">About</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('index.php/privacy-policy') ?>">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('index.php/contact') ?>">Contact</a>
                        </li>
                        <li>
                            <input type="text" placeholder="Search Here">
                        </li>
                </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This website is developed by GTCoding</p>
            </div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>
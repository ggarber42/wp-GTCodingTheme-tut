<?php get_header(); ?>

    <div class="container-404">
        <div class="page-heading">
            <h2>Oh! What?? 404?</h2>
        </div>
            <img src="https://source.unsplash.com/640x480/?cats" alt="">
            <h3>Sorry frnd, I think you're lost. Plz try the following links.</h3>
            <ul>
                <li><a href="<?php echo site_url('/blog')?>">Blog List</a></li>
                <li><a href="<?php echo site_url('/project')?>">Projects List</a></li>
                <li><a href="<?php echo site_url('/about')?>">About Me</a></li>
                <li><a href="<?php echo site_url('') ?>">Home Page</a></li> 
            </ul>
    </div>

<?php get_footer(); ?>
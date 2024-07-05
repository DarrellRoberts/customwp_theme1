<?php
    get_header();
?>    
    

		<article class="content px-3 py-5 p-md-5">
	    

        <h1>Hello</h1>
        <?php
            if( have_posts()) {
                while( have_posts() ) {
                    the_post();
                    the_content();
                }
            } else {

            }
        ?>
	    </article>

<?php
    get_footer();
?>


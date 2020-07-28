<!-- LIST LAST 10 POSTS -->
<?php
if( is_home() ) { echo '<p class="pt-2 text-danger text-center">home!</p>'; }
get_template_part( 'archive' );
?>

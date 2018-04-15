<?php 



// In the search are we have put the search form function ?>

	<section class="search-form">
		<?php get_search_form(); ?>
	</section>

<?php
//Above function will show us a search form


// Now put the below function in search.php
// where the search result will show us  ?>

	<h2> <?php printf( 'Search result for: %s', get_search_query() ); ?> </h2>



<?php  
// get_search_query will pull all result as per search keyword
// %s is the keyword, we will use to search in search form








 ?>
<?php

   if(have_posts()){
   	while(have_posts(){
   		the_post();

   		// Loop codes
   	}
   } else{
   	echo 'No post found!'
   }

   wp_reset_postdata();
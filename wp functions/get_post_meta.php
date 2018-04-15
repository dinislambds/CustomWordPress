<?php

/*
/*
/*  3 parameters
/*  Post ID = $post->ID or get_the_ID()
/*  Identifier = An Unique ID of the custom field
/*  single value or multiple value will return? single value= true
/*  double value = flase and we have to put array
/*
*/

echo get_post_meta(get_the_ID(), 'skill_percentage', true); 


// we should have a custom field named 'skill_percentage' in the post/page edit area


?>
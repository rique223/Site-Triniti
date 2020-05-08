<?php



function SearchFilter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}
	 
//add_filter('pre_get_posts','SearchFilter');






//sidebar
	if ( function_exists('register_sidebar') )
	{
	    register_sidebar(array(
	        'name' => __( 'Barra lateral'),
	        'id' => 'sidebar-1',
	        'description' => __( 'Barra lateral do Blog.'),
	        'before_widget' => '<div class="box">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h2>',
	        'after_title'   => '</h2>',
	    ) );
	}





function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}

/** 
* example usage
*
* echo parse_youtube_url('http://youtu.be/zc0s358b3Ys','hqthumb'); 
* echo parse_youtube_url('http://www.youtube.com/watch?v=zc0s358b3Ys','embed'); 
*/
function parse_youtube_url($url,$return='embed',$width='',$height='',$rel=0){
	$urls = parse_url($url);

	//url is http://youtu.be/xxxx
	if($urls['host'] == 'youtu.be'){
		$id = ltrim($urls['path'],'/');
	}
	//url is http://www.youtube.com/embed/xxxx
	else if(strpos($urls['path'],'embed') == 1){
		$id = end(explode('/',$urls['path']));
	}
	 //url is xxxx only
	else if(strpos($url,'/')===false){
		$id = $url;
	}
	//http://www.youtube.com/watch?feature=player_embedded&v=m-t4pcO99gI
	//url is http://www.youtube.com/watch?v=xxxx
	else{
		parse_str($urls['query']);
		$id = $v;
		if(!empty($feature)){
			$id = end(explode('v=',$urls['query']));
		}
	}
	//return embed iframe
	if($return == 'embed'){
		return '<iframe width="'.($width?$width:560).'" height="'.($height?$height:349).'" src="http://www.youtube.com/embed/'.$id.'?rel='.$rel.'" frameborder="0" allowfullscreen></iframe>';
	}
	//return normal thumb
	else if($return == 'thumb'){
		return 'http://i1.ytimg.com/vi/'.$id.'/default.jpg';
	}
	//return hqthumb
	else if($return == 'hqthumb'){
		return 'http://i1.ytimg.com/vi/'.$id.'/hqdefault.jpg';
	}
	// else return id
	else{
		return $id;
	}
}

?>
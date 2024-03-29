<?php
/**
 *
 *
 *  PageLines Page Handling
 *
 *
 */
class PageLinesPage {

	var $special_base = 70000000;
	var $opt_type_info = 'pl-type-info';

	function __construct( $args = array() ) {

		$args = wp_parse_args($args, $this->defaults());

		$mode = $args['mode'];

		if( $mode == 'ajax' ){

			$this->id = $args['pageID'];

			$this->typeid = $args['typeID'];

		} else {

			$this->id = $this->id();

			$this->type = $this->type();

			$this->typeid = $this->special_id();

			$this->template = $this->template();


			$this->type_name = ucwords( str_replace('_', ' ', $this->type()) );

		}
		


	}

	function defaults(){
		$d = array(
			'mode'		=> 'standard',
			'pageID'	=> '',
			'typeID'	=> ''
		);
		return $d;
	}

	function template_mode(){

		if( $this->type == 'page' || $this->is_special()){
			return 'local';
		} else {
			return 'type';
		}

	}

	
	function template(){

		global $pl_custom_template;
		
		if( isset($pl_custom_template) && isset($pl_custom_template['key']))
			return $pl_custom_template['key']; 
		else 
			return 'custom (no template)';

	}

	function id(){
		global $post;
		if(!$this->is_special() && isset($post) && is_object($post))
			return $post->ID;
		else
			return $this->special_id();

	}

	function special_id( $type = false ){

		$index = $this->special_index_lookup( $type );

		$id = $this->special_base + $index;

		return $id;

	}

	function special_index_lookup( $type = false ){

		$type = ( $type ) ? $type : $this->type();

		$lookup_array = array(
			'blog',
			'category',
			'search',
			'tag',
			'author',
			'archive',
			'page',
			'post',
			'404_page'
		);
		
		
		
		$index = array_search( $type, $lookup_array );
		
		if( !$index ){
			$index = pl_create_int_from_string( $type );	
		} 

		return $index;

	}

	function type(){
		global $pl_404;

		if( is_404() && $pl_404 )
			$type = '404_page';

		elseif( is_post_type_archive() )
			$type = pl_get_post_type_plural();

		elseif( is_tag() )
			$type = 'tag';

		elseif( is_search() )
			$type = 'search';

		elseif( is_category() )
			$type = 'category';

		elseif( is_author() )
			$type = 'author';

		elseif( is_archive() )
			$type = 'archive';

		elseif( is_home() )
			$type = 'blog';

		// ID is now set...
		elseif( pl_is_cpt() )
			$type = get_post_type();

		elseif( is_page() )
			$type = 'page';

		elseif( is_single() )
			$type = 'post';

		else{
			$type = 'other';
		
		}
			

		return $type;

	}
	
	
	function is_special(){

		if ( is_404() || is_home() || is_search() || is_archive() )
			return true;
		else
			return false;

	}

	function is_blog_page_type(){

		if ( $this->type == 'blog' 
			|| $this->type == 'category' 
			|| $this->type == 'post' 
			|| $this->type == 'archive' 
			|| $this->type == 'author' 
			|| $this->type == 'tag' 
			|| $this->type == 'search' 
		)
			return true;
		else
			return false;

	}
	
	function is_posts_page(){

		if ( is_home() || is_search() || is_archive() || is_category() )
			return true;
		else
			return false;

	}
	
	function pl_standard_post_page(){

		if( $this->type == 'other' || false !== ( strpos( $this->type, 'forum') ) )
			return false;
		else 
			return true;
	}


}

function pl_page_id(){
	global $plpg; 
	return $plpg->id; 
}

function pl_type_id(){
	global $plpg; 
	return $plpg->typeid; 
}

function pl_type_slug(){
	global $plpg; 
	return $plpg->type; 
}
function pl_special_id( $type = false ){
	
	$page_handler = new PageLinesPage; 
	return $page_handler->special_id( $type ); 
	
}

function pl_standard_post_page(){
	global $plpg; 
	return $plpg->pl_standard_post_page();
}

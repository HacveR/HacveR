<?php
/**
 * =================================================
 *      Collection of walker classes
 * =================================================
 */
/* Collection of walker classes  */
    /**
     * wp_nav_menu()
     * <div class="menu-container">
     *      <ul> // start_lvl()
     *          <li><a><span>//start_el()
     *          </span></a></li>//end_el()
     *      #
     *      # 
     *      </ul> // end_lvl(); 
     * </div>
     */

class Walker_Nav_Primary extends Walker_Nav_Menu{
    
   
    // $custom_arg = esc_attr( $args->walker_arg );
    
    
    function star_lvl(&$output, $depth){//ul
        $indent = str_repeat("\t", $depth);
        $submenu = ( $depth > 0 )? " sub-menu " : "";
        $output  = "\n $ident<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
    
    function start_el(&$output, $item, $depth =0, $args = array(), $id = 0){ // li a span
        $indent = ($depth)? str_repeat("\t", $depth) : '';
        $li_attributes='';
        $class_names = $value = '';
        $custom_arg = esc_attr( $args->walker_arg );
        
        $classes = empty($item->claasses) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor)? 'active': '';
        $classes[] = 'menu-item-'.$item->ID;
        if($depth && $args->walker->has_children){
            $classes[] = 'dropdown-submenu';
        }
        
        $class_names = join('', apply_filters('nav_menu_css_class',array_filter($classes),$item,$args));
        $class_names = 'class="'.esc_attr($class_names).'"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID,$item,$args);
        $id = strlen($id)? 'id="'.esc_attr($id).'"':'';
        
        $output .= $indent . '<li '.$id.$value.$class_names.$li_attributes.'>';
        
        $attributes = !empty($item->attr_title)? ' title ="'.esc_attr($item->attr_title).'"':'';
        $attributes .= !empty($item->target)? ' target ="'.esc_attr($item->target).'"':'';
        $attributes .= !empty($item->xfn)? ' rel ="'.esc_attr($item->xfn).'"':'';
        $attributes .= !empty($item->url)? ' href ="'.esc_attr($item->url).'"':'';
    
    
        $attributes .= ($args->walker->has_children)? 'class="dropdown-toggle" data-toggle="dropdown"':'';
        //$custom_arg = esc_attr( $args->walker_arg )
        $item_output = $args->before;
        $item_output .= '<a'.$attributes.'>';
        $item_output .= $args->link_before . '<img width="64" height="64" src="'.get_template_directory_uri().'/assets/images/'. $item->title .'_256x256.png'. '" alt="' . $item->description . '" /><p>' . $args->link_after;
        $item_output .= $args->link_before.apply_filters('the_title', $item->title,$item->ID).$args->link_after;
        $item_output .=  ($depth == 0 && $args->walker->has_children)? '</p><b class="caret></b></a>':'</p></a>';
        $item_output .= $args->after;
    
        $output .= apply_filters('walker_nav_menu_start_el',$item_output, $item, $depth,$args);
    
    }
    /*
    function  end_el(){ // closing li a span
        
    }
    
    function end_lvl(){ // closing ul
        
    }
    */
    
    
    
    
    
    
}
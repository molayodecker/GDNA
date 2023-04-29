<?php
class gdna_wp_nav_menu_walker extends Walker_Nav_Menu
{

	function start_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<div class=\"dropdown-menu information-grid \">\n";
	}

	function start_el(&$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0)
	{
		$n = "\n";
		$t = "\t";
		$indent = str_repeat($t, $depth);
		$atts = array();
		$atts['title'] = !empty($data_object->attr_title) ? $data_object->attr_title : '';
		$atts['target'] = !empty($data_object->target) ? $data_object->target : '';
		$atts['rel'] = !empty($data_object->xfn) ? $data_object->xfn : '';
		$atts['href'] = !empty($data_object->url) && $depth > 0 ? $data_object->url : '#';
		$atts = apply_filters('nav_menu_link_attributes', $atts, $data_object, $args, $depth);
		$attributes = '';
		foreach ($atts as $attr => $value) {
			if (!empty($value)) {
				$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		$title = apply_filters('the_title', $data_object->title, $data_object->ID);
		$title = apply_filters('nav_menu_item_title', $title, $data_object, $args, $depth);
		$class_names = $depth == 0 ? ' class="dropdown" data-dropdown' : ' class="dropdown-links"';
		$link_class_names = $depth > 0 ? ' class="link"' : ' class="header-link" data-dropdown-button';
		$output .= "{$n}{$indent}<div $class_names>{$n}";
		$output .= '<a' . $link_class_names . $attributes . '>';
		$output .= $title;
		$output .= '</a>';
	}

	function end_el(&$output, $item, $depth = 0, $args = null)
	{
		$output .= "</div>\n";
	}

	function end_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</div>\n";
	}
}
// apply_filters( 'walker_nav_menu_start_lvl', $output, $data_object, $depth, $args->button_header=$data_object->title );
// 
class mobile_wrap extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= $indent;
	}
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$arrow = $depth > 0 ? '' : '<span
			class="absolute ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
			data-te-sidenav-collapse-ref>
			<svg
			xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 20 20"
			fill="currentColor"
			class="h-5 w-5">
			<path
				fill-rule="evenodd"
				d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
				clip-rule="evenodd" />
			</svg>
		</span>';
		$attributes = '';
		!empty($item->attr_title) and $attributes .= ' title="' . esc_attr($item->attr_title) . '"';
		!empty($item->target) and $attributes .= ' target="' . esc_attr($item->target) . '"';
		!empty($item->xfn) and $attributes .= ' rel="' . esc_attr($item->xfn) . '"';
		!empty($item->url) and ($depth > 0 ? $attributes .= ' href="' . esc_attr($item->url) . '"' : '');
		$title = apply_filters('the_title', $item->title, $item->ID);
		$sub_class_names = $depth > 0 ? ' class="block hover:text-softRed" ' : ' class="block font-black bg-zinc-400"';
		$sub_id_names = $depth > 0 ? ' id="mobile-link-secondary" ' : ' style="font-weight: 900; id="mobile-link-primary" ';
		$output .= "<div class='w-full py-3 text-center'>";
		$output .= '<a ' . $sub_id_names . $attributes . $sub_class_names . ' >' . $title . $arrow . '</a>';
		$output .= "</div>";
	}
	function end_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= $indent;
	}
}
?>
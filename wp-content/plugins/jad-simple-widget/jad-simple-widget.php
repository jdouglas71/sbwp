<?php
/*
Plugin Name:  JAD Simple Widget Template
Plugin URI:   http://www.johnathanandersendesign.com/
Description:  A very basic widget structure to hack around with.
Version:      0.1
Author:       Johnathan Andersen Design
Author URI:   http://www.johnathanandersendesign.com/	
*/


	function jad_simple_widget($args, $widget_args = 1) {
		
		extract( $args, EXTR_SKIP );
		if ( is_numeric($widget_args) )
			$widget_args = array( 'number' => $widget_args );
		$widget_args = wp_parse_args( $widget_args, array( 'number' => -1 ) );
		extract( $widget_args, EXTR_SKIP );
	
		$options = get_option('simple_widget');
		if ( !isset($options[$number]) ) 
		return;

		$title = $options[$number]['title']; 		// single value
		$text = $options[$number]['text']; 		// single value
		$check = $options[$number]['check']; 		// multi value
		$radio = $options[$number]['radio']; 		// single value
		$select = $options[$number]['select']; 	// single value
		$textarea = $options[$number]['textarea']; // single value
			
		echo $before_widget; // start widget display code ?>
		
			<h2><?=$title?></h2>
			<p><?=$text?></p>
            <ul>
            <?php foreach($check as $value){ ?>
				<li><?=$value?></li>
            <?php } ?>
            </ul>
			<p><?=$radio?></p>
			<p><?=$select?></p>
			<p><?=$textarea?></p>
			
	<?php echo $after_widget; // end widget display code
	
	}
	
	
	function jad_simple_widget_control($widget_args) {
	
		global $wp_registered_widgets;
		static $updated = false;
	
		if ( is_numeric($widget_args) )
			$widget_args = array( 'number' => $widget_args );			
		$widget_args = wp_parse_args( $widget_args, array( 'number' => -1 ) );
		extract( $widget_args, EXTR_SKIP );
	
		$options = get_option('simple_widget');
		
		if ( !is_array($options) )	
			$options = array();
	
		if ( !$updated && !empty($_POST['sidebar']) ) {
		
			$sidebar = (string) $_POST['sidebar'];	
			$sidebars_widgets = wp_get_sidebars_widgets();
			
			if ( isset($sidebars_widgets[$sidebar]) )
				$this_sidebar =& $sidebars_widgets[$sidebar];
			else
				$this_sidebar = array();
	
			foreach ( (array) $this_sidebar as $_widget_id ) {
				if ( 'jad_simple_widget' == $wp_registered_widgets[$_widget_id]['callback'] && isset($wp_registered_widgets[$_widget_id]['params'][0]['number']) ) {
					$widget_number = $wp_registered_widgets[$_widget_id]['params'][0]['number'];
					if ( !in_array( "simple-widget-$widget_number", $_POST['widget-id'] ) ) // the widget has been removed.
						unset($options[$widget_number]);
				}
			}
	
			foreach ( (array) $_POST['simple-widget'] as $widget_number => $simple_widget ) {
				if ( !isset($simple_widget['title']) && isset($options[$widget_number]) ) // user clicked cancel
					continue;
				
				$title = strip_tags(stripslashes($simple_widget['title']));
				$text = strip_tags(stripslashes($simple_widget['text_value']));				
				$check = $simple_widget['check_array'];
				$radio = $simple_widget['radio_value'];
				$select = $simple_widget['select_value'];
				$textarea = $simple_widget['textarea_value'];
				
				// Pact the values into an array
				$options[$widget_number] = compact( 'title', 'text', 'check', 'radio', 'select', 'textarea' );
			}
	
			update_option('simple_widget', $options);
			$updated = true;
		}
	
		if ( -1 == $number ) { // if it's the first time and there are no existing values
	
			$title = '';
			$text = '';
			$check = '';
			$radio = '';
			$select = '';
			$textarea = '';
			$number = '%i%';
			
		} else { // otherwise get the existing values
		
			$title = attribute_escape($options[$number]['title']);
			$text = attribute_escape($options[$number]['text']); // attribute_escape used for security
			$check = $options[$number]['check'];
			$radio = $options[$number]['radio'];
			$select = $options[$number]['select'];
			$textarea = format_to_edit($options[$number]['textarea']);
		}
		
		print_r($options[$number]);
	?>
	<p><label>Widget Title</label><br /><input id="title_value_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][title]" type="text" value="<?=$title?>" /></p>
    <p><label>Text Field</label><br /><input id="text_value_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][text_value]" type="text" size="30" value="<?=$text?>" /></p>
    <p>
        <label>Checkbox Group</label><br />
        Value 1 <input id="check_array_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][check_array][1]" type="checkbox" <?php if($check[1]){ echo 'checked="checked"';} ?> value="One" /><br />
        Value 2 <input id="check_array_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][check_array][2]" type="checkbox" <?php if($check[2]){ echo 'checked="checked"';} ?> value="Two" /><br />
        Value 3 <input id="check_array_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][check_array][3]" type="checkbox" <?php if($check[3]){ echo 'checked="checked"';} ?> value="Three" /><br />
        Value 4 <input id="check_array_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][check_array][4]" type="checkbox" <?php if($check[4]){ echo 'checked="checked"';} ?> value="Four" />
    </p>
    <p>
        <label>Radio Field</label><br />
        Yes <input id="radio_value_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][radio_value]" type="radio" <?php if($radio == 'yes') echo 'checked="checked"'; ?> value="yes" />
        No <input id="radio_value_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][radio_value]" type="radio" <?php if($radio == 'no') echo 'checked="checked"'; ?> value="no" />
    </p>
    <p>
        <label>Select Menu 
        <select id="select_value_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][select_value]">
            <option <?php if ($select == 'One') echo 'selected'; ?> value="One">Value 1</option>
            <option <?php if ($select == 'Two') echo 'selected'; ?> value="Two">Value 2</option>
            <option <?php if ($select == 'Three') echo 'selected'; ?> value="Three">Value 3</option>
            <option <?php if ($select == 'Four') echo 'selected'; ?> value="Four">Value 4</option>
        </select>
        </label>
    </p>
    <p><label>Textarea</label><br /><textarea id="textarea_value_<?php echo $number; ?>" name="simple-widget[<?php echo $number; ?>][textarea_value]" type="text" cols="30" rows="4"><?=$textarea?></textarea></p>
    <input type="hidden" name="simple-widget[<?php echo $number; ?>][submit]" value="1" />
    
	<?php
	}
	
	
	function jad_simple_widget_register() {
		if ( !$options = get_option('simple_widget') )
			$options = array();
		$widget_ops = array('classname' => 'simple_widget', 'description' => __('Test widget form'));
		$control_ops = array('width' => 400, 'height' => 350, 'id_base' => 'simple-widget');
		$name = __('JAD Simple Widget');
	
		$id = false;
		
		foreach ( (array) array_keys($options) as $o ) {
	
			if ( !isset( $options[$o]['title'] ) )
				continue;
						
			$id = "simple-widget-$o";
			wp_register_sidebar_widget($id, $name, 'jad_simple_widget', $widget_ops, array( 'number' => $o ));
			wp_register_widget_control($id, $name, 'jad_simple_widget_control', $control_ops, array( 'number' => $o ));
		}
		
		if ( !$id ) {
			wp_register_sidebar_widget( 'simple-widget-1', $name, 'jad_simple_widget', $widget_ops, array( 'number' => -1 ) );
			wp_register_widget_control( 'simple-widget-1', $name, 'jad_simple_widget_control', $control_ops, array( 'number' => -1 ) );
		}
	}

add_action('init', jad_simple_widget_register, 1);

?>
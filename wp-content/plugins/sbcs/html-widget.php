<?php
/**
* Sidebar widget that displays whatever html was given it.
* @author Jason Douglas
*/

class SBCS_HTML_Widget 
	extends WP_Widget 
{
	/**
	 * Widget Function.
	 */
	function widget($args, $instance)
	{
		extract($args,EXTR_SKIP);
		wp_enqueue_style( "sbcs_widget_style", plugins_url('sbcs.css',__FILE__) );

		echo $before_widget;
		echo $before_title;
		echo $instance['html_text'];
		echo $after_title;
		echo $after_widget;
	}

	/**
	 * Constructor.
	 */
	function SBCS_HTML_Widget()
	{
		$widget_options = array(
		   'classname'=>'widget-sbcs-html',
		   'description'=>__('This widget displays the HTML that was input as part of the widget options.')
		);
		$control_options = array(
		   'height'=>300,
		   'width' =>300
		);
		$this->WP_Widget('sbcs_html_widget','SBCS HTML Widget',$widget_options,$control_options);
	}

	/**
	 * Update Function. Called when changes are made in the admin panel. 
	 */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['html_text'] = $new_instance['html_text'];
		return $instance;
	}

	/**
	 * Form function. Used in dashboard to allow users to configure the widget.
	 */
	function form($config)
	{
		$html_text = $config['html_text'];
	?>
		<label for="<?php echo $this->get_field_id("html_text"); ?>">
		<p>HTML Text: 
			<textarea rows="5" cols="50" name="<?php echo $this->get_field_name("html_text"); ?>" id="<?php echo $this->get_field_id("html_text") ?>">
				<?php echo $html_text; ?>
			</textarea>
		</p>
		</label>
	<?php       
	}
}

?>

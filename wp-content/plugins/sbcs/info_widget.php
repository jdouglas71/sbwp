<?php
/**
* Sidebar widget that displays information specific to SBHS.
* @author Jason Douglas
*/

class SBCS_Info_Widget 
	extends WP_Widget 
{
	/**
	 * Widget Function.
	 */
	function widget($args, $instance)
	{
		extract($args,EXTR_SKIP);
		$info_type =  ($instance['info_type'])?$instance['info_type']:"news_information";
		echo $before_widget;

		?>
		<div class="sbcs-info-widget">
		<php echo $before_title; ?>
		<?php echo "TITLE!!!!"; ?>
		<php echo $after_title; ?>
		<hr class="sbcs_info">
		<?php
		$count=0;
		switch( $info_type )
		{
			case "news_information":
				?>
				<div class="sbcs_info">
					<?php echo "News & Information"; ?><br />
				</div>
	            <?php 
				break;
			case "crusader_nation":
				?>
				<div class="sbcs_info">
					<?php echo "Crusader Nation"; ?><br />
	            <?php 
				break;
			case "uniforms":
				?>
				<div class="sbcs_info">
					<?php echo "Uniforms"; ?><br />
				</div>
	            <?php 
				break;
			case "annual_report":
				?>
				<div class="sbcs_info">
					<?php echo "Annual Report"; ?><br />
				</div>
	            <?php 
				break;
			case "summer_reading_list":
				?>
				<div class="sbcs_info">
					<?php echo "Summer Reading List"; ?><br />
				</div>
	            <?php 
				break;
			case "mass_schedule":
				?>
				<div class="sbcs_info">
					<?php echo "Mass Schedule"; ?><br />
				</div>
	            <?php 
				break;
		}
		?>
		<?php
		 echo $after_widget;
	}

	/**
	 * Constructor.
	 */
	function SBCS_Info_Widget()
	{
		$widget_options = array(
		   'classname'=>'widget-sbcs-info',
		   'description'=>__('This widget shows various SBCS related information.')
		);
		$control_options = array(
		   'height'=>300,
		   'width' =>300
		);
		$this->WP_Widget('sbcs_info_widget','SBCS Info Widget',$widget_options,$control_options);
	}

	/**
	 * Update Function. Called when changes are made in the admin panel. 
	 */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['info_type'] = $new_instance['info_type'];
		return $instance;
	}

	/**
	 * Form function. Used in dashboard to allow users to configure the widget.
	 */
	function form($config)
	{
	?>
		<label for="<?php echo  $this->get_field_id("info_type"); ?>">
		<p>Information Type: 
			<select name="<?php echo  $this->get_field_name("info_type"); ?>" id="<?php echo  $this->get_field_id("info_type") ?>">
				<option value="news_information">News & Information</option>
				<option value="crusader_nation">Crusader Nation</option>
				<option value="uniforms">Uniforms</option>
				<option value="annual_report">Annual Report</option>
				<option value="summer_reading_list">Summer Reading List</option>
				<option value="mass_schedule">Mass Schedule</option>
			</select>
		</p>
		</label>
	<?php       
	}
}

?>

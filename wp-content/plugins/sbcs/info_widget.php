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
		<?php echo $before_title; ?>
		<?php
		$count=0;
		switch( $info_type )
		{
			case "news_information":
				echo "News & Information";
				echo $after_title;
				?>
				<hr class="sbcs_info">
				<div class="sbcs_info">
					<?php echo "News & Information"; ?><br />
				</div>
	            <?php 
				break;
			case "crusader_nation":
				echo "Crusader Nation";
				echo $after_title;
				?>
				<hr class="sbcs_info">
				<div class="sbcs_info">
					<?php echo "Crusader Nation"; ?><br />
	            <?php 
				break;
			case "uniforms":
				echo "Uniforms";
				echo $after_title;
				?>
				<hr class="sbcs_info">
				<div class="sbcs_info">
					<?php echo "Uniforms"; ?><br />
				</div>
	            <?php 
				break;
			case "annual_report":
				echo "Annual Report";
				echo $after_title;
				?>
				<hr class="sbcs_info">
				<div class="sbcs_info">
					<?php echo "Annual Report"; ?><br />
				</div>
	            <?php 
				break;
			case "summer_reading_list":
				echo "Summer Reading List";
				echo $after_title;
				?>
				<hr class="sbcs_info">
				<div class="sbcs_info">
					<?php echo "Summer Reading List"; ?><br />
				</div>
	            <?php 
				break;
			case "mass_schedule":
				echo "Mass Schedule";
				echo $after_title;
				?>
				<hr class="sbcs_info">
				<div class="sbcs_info">
					<?php echo "Mass Schedule"; ?><br />
				</div>
	            <?php 
				break;
		}
		?>
		</div>
		<?php
		 echo $after_title;
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
		$info_type = $config['info_type'];

	?>
		<label for="<?php echo $this->get_field_id("info_type"); ?>">
		<p>Information Type: 
			<select name="<?php echo $this->get_field_name("info_type"); ?>" id="<?php echo $this->get_field_id("info_type") ?>">
				<option value="news_information" <?php if($info_type=="news_information") echo "selected"; ?> >News & Information</option>
				<option value="crusader_nation" <?php if($info_type=="crusader_nation") echo "selected"; ?>>Crusader Nation</option>
				<option value="uniforms" <?php if($info_type=="uniforms") echo "selected"; ?>>Uniforms</option>
				<option value="annual_report" <?php if($info_type=="annual_report") echo "selected"; ?>>Annual Report</option>
				<option value="summer_reading_list" <?php if($info_type=="summer_reading_list") echo "selected"; ?>>Summer Reading List</option>
				<option value="mass_schedule" <?php if($info_type=="mass_schedule") echo "selected"; ?>>Mass Schedule</option>
			</select>
		</p>
		</label>
	<?php       
	}
}

?>

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
		wp_enqueue_style( "sbcs_widget_style", plugins_url('sbcs.css',__FILE__) );

		$info_type =  ($instance['info_type'])?$instance['info_type']:"news_information";
		echo $before_widget;
		?>
		<?php
		$count=0;
		switch( $info_type )
		{
			case "news_information":
				echo $before_title;
				echo $after_title;
				?>
				<table class="sbcs_info_table" cellpadding="0" cellspacing="0" style="width:180px;margin-left:auto;margin-right:auto;">
					<tr class="sbcs_info_table_row">
						<td class="sbcs_info_table_header" style="">
							<img style="max-width:100%;width:100%;height:100%;padding:0px;margin:0px;vertical-align:bottom;" src='<?php echo site_url("/wp-content/plugins/sbcs/images/")."NewsTab.gif";?>'>
						</td>
					</tr>
					<tr class="sbcs_info_table_row">
						<td class="sbcs_info_table_col">
							<b>Contact SBCS</b><br />
							222 Dollison St.<br />
							Eureka, CA 95501<br />
							(707) 443-2735<br />
							<a href="http://www.saintbernards.us/life-at-sb/sb-bulletin/">Bulletin</a><br />
							<a href="http://www.saintbernards.us/college-counseling-2/senior-important-dates/">Senior Calendar</a><br />
							<a href="http://www.saintbernards.us/athletics/sports-calendars/">Athletics Calendar</a><br />
							<a href="http://www.stadiumroar.com/stbernardscatholicschool">Facilities Schedule</a><br />
							<a href="http://sbcscollegecounseling.blogspot.com/">Scholarships</a><br />
							<a href='<?php echo site_url("/about-us/contact-us");?>'>Entire Directory</a><br />
						</td>
					</tr>
				</table>
	            <?php 
				break;
			case "crusader_nation":
				?>
				<?php
				echo $before_title;
				echo $after_title;
				?>
				<div style="text-align: center;width:100%;">
					<table class="sbcs_info_table" cellpadding="0" cellspacing="0" style="width:180px;margin-left:auto;margin-right:auto;">
						<tr class="sbcs_info_table_row" style="padding:0px;margin:0px;">
							<td>
								<img style="max-width:100%;width:100%;height:100%;padding:0px;margin:0px;vertical-align:bottom;" src='<?php echo site_url("/wp-content/uploads/2012/11/")."Crusader-bar2.jpg";?>'>
							</td>
						</tr>
						<tr class="sbcs_info_table_row" style="">
							<td>
								<img style="max-width:100%;width:100%;height:100%;padding:0px;margin:0px;" src='<?php echo site_url("/wp-content/uploads/2012/11/")."CNationOctober1.jpg";?>'>
							</td>
						</tr>
						<tr class="sbcs_info_table_row" style="">
							<td class="sbcs_cn_table_col" style="">
								<!--<span style="color:#164c19;font-family:Arial,Helvetica,san-serif;font-size:medium;">Crusader Nation</span><br />-->
								<span style="color:#164c19;text-decoration:underline;font-family:Arial,Helvetica,san-serif;font-size:medium;">Now Online!</span><br />
								<span style="font-family:Arial,Helvetica,san-serif;font-size:medium;">
									<a href='<?php echo site_url("/pdfs/")."January%20News.pdf";?>'>January</a><br />
									<a href='<?php echo site_url("/pdfs/")."February.pdf";?>'>February</a><br />
									<a href='<?php echo site_url("/pdfs/")."Marchproof.pdf";?>'>March</a><br />
									<a href='<?php echo site_url("/pdfs/")."Aprilproof.pdf";?>'>April</a><br />
									<a href='<?php echo site_url("/pdfs/")."May.pdf";?>'>May</a><br />
								</span>
							</td>                                                                                                               
						</tr>
					</table>
				</div>
				<hr class="sbcs_info">
	            <?php 
				break;
			case "uniforms":
				?>
				<?php
				echo $before_title;
				echo $after_title;
				?>
				<div style="text-align: center;width:100%;">
					<table style="border:6px solid #194e1b; width: 79%; height: 80px; margin-left:auto; margin-right:auto;">
						<tbody>
							<tr>
								<th style="height: 80px; width: 135px; text-align: center;">
									<span style="padding:8px;color:#194e1b;font-size:medium;font-weight:bold;">Dennis Uniform</span><br /><br />
									<span >
										<a href="http://www.dennisuniform.com/onlstore/ShowSchoolCatalog.asp?sc=O28STB&amp;dis=10437975" target="_blank">
											Shop Online
										</a>
									</span>
								</th>
							</tr>
						</tbody>
					</table>
					<br />
					<hr class="sbcs_info">
                    <a href="http://www.landsend.com/pp/SchoolSearch.html?action=landing&amp;selectedSchoolNum=900076290" target="_blank"><img alt="" height="125" src='<?php echo site_url("/wp-content/uploads/2012/11/")."Lands-End-Gif.gif"?>' width="125"></a>
				</div>
				<?php 
				break;
			case "annual_report":
				?>
				<?php
				echo $before_title;
				echo $after_title;
				?>
				<div style="text-align: center;width:100%;">
					<a href="http://issuu.com/cvp-design/docs/sbcs-ar-2010?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Fdark%2Flayout.xml&amp;showFlipBtn=true">
						<img alt="SBCS AR 2010" height="195" longdesc="St. Bernard's Catholic School Annual Report 2010" src='<?php echo site_url("/wp-content/uploads/2012/11/")."ar10_web-iconsm.jpg";?>' width="150"><br>
					</a>
                    <b>St. Bernard's Catholic School Annual Report 2010</b> <br />
				</div>
	            <?php 
				break;
			case "summer_reading_list":
				?>
				<?php
				echo $before_title;
				echo $after_title;
				?>
				<div style="text-align: center;width:100%;">
					<p style="text-align:center;">
						<span style="font-size:large;font-weight:bold;"><big><b>Summer Reading List<br />1st Grade - 12th Grade</b></big><br /></span>
						<a href='<? echo site_url("/pdfs/")."Reading_list_2012.pdf";?>'>
							(reading list)
						</a>
					</p>
				</div>
	            <?php 
				break;
			case "mass_schedule":
				?>
				<?php
				echo $before_title;
				echo $after_title;
				?>
				<div style="text-align: center;width:100%;">
					<a href='<?php echo site_url("/pdfs/")."Mass_Schedule_2011-12.pdf";?>'>
						<img src='<?php echo site_url("/wp-content/uploads/2012/11/")."Mass_Schedule.gif";?>' width="165" height="150">
						<br />
					</a>
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

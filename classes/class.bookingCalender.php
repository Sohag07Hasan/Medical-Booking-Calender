<?php
if(class_exists('medicalBookingCalender')) return;

class medicalBookingCalender{
	
	static function init(){
		add_action("wp_print_scripts", array(get_class(), 'include_js'));
		add_shortcode("bookingCalender", array(get_class(), "shotcode_content"));
	}
	
	/*
	 * js and css add
	 * */
	static  function include_js(){
		wp_enqueue_script('jquery');		
		wp_register_script('medical_booking_calenderjs', self::get_plugins_url() . '/datepicker/js/jquery-ui-1.8.21.custom.min.js');
		wp_enqueue_script('medical_booking_calenderjs');
		
		self::include_css();
	}
	
	static function include_css(){
		wp_register_style('medical_booking_calendercss', self::get_plugins_url() . '/datepicker/css/ui-lightness/jquery-ui-1.8.21.custom.css');
		wp_enqueue_style('medical_booking_calendercss');
	}
	
	//return the plugin url
	static function get_plugins_url(){
		return WPBOOKINGCALENDER_URL;
	}
	
	//short code details
	static function shotcode_content($attr=array()){
		global $post;
		$id = "datepicker-" . $post->ID;
		$content = "<div id='{$id}'>jj</div>";
		$content .= "<script>
				jQuery(document).ready(function($){
					$('#{$id}').datepicker();
				});
			</script>
		";
				
		
		return $content;
	}
}
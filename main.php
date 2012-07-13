<?php 

/*
 * plugin name: WP Booking Calender For Medical Center
 * author: Mahibul Hasan Sohag
 * plugin uri: http://google.com
 * author uri: http://sohag07hasan.elance.com
 * Description: Patients can book time and the doctors can schedule their time in a Medical Center
 * */

define("WPBOOKINGCALENDER_DIR", dirname(__FILE__));
define("WPBOOKINGCALENDER_FILE", __FILE__);
define("WPBOOKINGCALENDER_URL", plugins_url('', __FILE__));

include WPBOOKINGCALENDER_DIR . '/classes/class.bookingCalender.php';
medicalBookingCalender::init();


?>
<?php
/**
* Plugin Name: GSAP for Wordpress
* Plugin URI: https://github.com/FreshyMichael/gsap-framework/
* Description: Adds the GSAP Framework for animation to WordPress. Includes Greensock Club
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* gsap for Wordpress Start */
//______________________________________________________________________________


//Add Basic GSAP Framework Scripts enqueued from CDN

/*function gsap_framework_scripts(){
	echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/CSSRulePlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/EaselPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/MotionPathPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/PixiPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/TextPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>';
}
add_action('wp_head','gsap_framework_scripts'); */

function fs_gsap_load_scripts($hook) {
 
    // create our own version codes
	$fs_cssPlugin_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/CSSPlugin.js' ));
	$fs_CSSRulePlugin_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/CSSRulePlugin.js' ));
	$fs_draggable_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/Draggable.js' ));
	$fs_EasePack_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/EasePack.js' ));
	$fs_EaselPlugin_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/EaselPlugin.js' ));
	$fs_MotionPathPlugin_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/MotionPathPlugin.js' ));
	$fs_PixiPlugin_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/PixiPlugin.js' ));
	$fs_ScrollToPlugin_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/ScrollToPlugin.js' ));
	$fs_ScrollTrigger_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/ScrollTrigger.js' ));
	$fs_ScrollTrigger_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/TextPlugin.js' ));
	$fs_TextPlugin_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/all.js' ));
	$fs_all_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/CSSPlugin.js' ));
	$fs_gsap_core_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/gsap-core.js' ));
	$fs_index_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'gsap-public/src/index.js' ));
     
    // Include the Scripts
	wp_enqueue_script( 'CSSPlugin_js', plugins_url( 'gsap-public/src/CSSPlugin.js', __FILE__ ), array(), $fs_cssPlugin_ver );
	wp_enqueue_script( 'CSSRulePlugin_js', plugins_url( 'gsap-public/src/CSSRulePlugin.js', __FILE__ ), array(), $fs_CSSRulePlugin_ver );
	wp_enqueue_script( 'Draggable_js', plugins_url( 'gsap-public/src/Draggable.js', __FILE__ ), array(), $fs_draggable_ver );
	wp_enqueue_script( 'EasePack_js', plugins_url( 'gsap-public/src/EasePack.js', __FILE__ ), array(), $fs_EasePack_ver );
	wp_enqueue_script( 'EaselPlugin_js', plugins_url( 'gsap-public/src/EaselPlugin.js', __FILE__ ), array(), $fs_EaselPlugin_ver );
	wp_enqueue_script( 'MotionPathPlugin_js', plugins_url( 'gsap-public/src/MotionPathPlugin.js', __FILE__ ), array(), $fs_MotionPathPlugin_ver );
	wp_enqueue_script( 'PixiPlugin_js', plugins_url( 'gsap-public/src/PixiPlugin.js', __FILE__ ), array(), $fs_PixiPlugin_ver );
	wp_enqueue_script( 'ScrollToPlugin_js', plugins_url( 'gsap-public/src/ScrollToPlugin.js', __FILE__ ), array(), $fs_ScrollToPlugin_ver );
	wp_enqueue_script( 'ScrollTrigger_js', plugins_url( 'gsap-public/src/ScrollTrigger.js', __FILE__ ), array(), $fs_ScrollTrigger_ver );
	wp_enqueue_script( 'TextPlugin_js', plugins_url( 'gsap-public/src/TextPlugin.js', __FILE__ ), array(), $fs_TextPlugin_ver );
	wp_enqueue_script( 'all_js', plugins_url( 'gsap-public/src/all.js', __FILE__ ), array(), $fs_all_ver );
	wp_enqueue_script( 'gsap_core_js', plugins_url( 'gsap-public/src/gsap-core.js', __FILE__ ), array(), $fs_gsap_core_ver );
	wp_enqueue_script( 'index_js', plugins_url( 'gsap-public/src/index.js', __FILE__ ), array(), $fs_index_ver );

}
add_action('wp_enqueue_scripts', 'fs_gsap_load_scripts');


//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/gsap-framework',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'gsap-framework'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* gsap for Wordpress End */
?>

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

add_action( 'wp_enqueue_scripts' , 'gsap_framework_scripts' );

function gsap_framework_scripts(){
	wp_enqueue_script( 'gsap' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap3' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/CSSRulePlugin.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap4' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/Draggable.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap5' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/EaselPlugin.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap6' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/MotionPathPlugin.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap7' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/PixiPlugin.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap8' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/TextPlugin.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap9' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollToPlugin.min.js' , array() , null , true );
	wp_enqueue_script( 'gsap10' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js' , array() , null , true );
}


//Add-On Scripts not included in the Basic GSAP Framework 
/*
add_action ('wp_enqueue_scripts','gsap_framework_addon_scripts');

function gsap_framework_addon_scripts(){

}

*/


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

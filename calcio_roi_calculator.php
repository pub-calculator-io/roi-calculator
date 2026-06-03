<?php
/*
Plugin Name: Return on Investment (ROI) Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/roi-calculator/
Description: Maximize your earnings with our free Return on Investment (ROI) Calculator. Quickly calculate investment gains, total profit, and annualized ROI in seconds.
Version: 1.0.0
Author: www.calculator.io / Return on Investment (ROI) Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_roi_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Return on Investment (ROI) Calculator by www.calculator.io";

function calcio_roi_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Return on Investment (ROI) Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_roi_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_roi_calculator', 'calcio_roi_calculator_shortcode' );
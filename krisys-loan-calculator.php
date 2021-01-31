<?php
/*
Plugin Name: Krisys Loan Calculator
Plugin URI: https://github.com/dayton-outar/krisys-loan-calculator
Description: Yet another loan calculator
Version: 1.0.0
Author: Dayton Outar
Author URI: https://jm.linkedin.com/in/dayton-outar-a4758143
License: GPLv2 or later
Text Domain: krisys-loan-calculator
*/

/*  Copyright 2021  Dayton Outar  (email : dayton.outar@gmail.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// If this file is called directly, abort!!!
defined( 'ABSPATH' ) or die( 'Forbidden' );

add_shortcode( 'krisys-loan-calculator', 'loanCalculator' );

define( 'KRS_LOAN_CALCULATOR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

function loanCalculator()
{
    ob_start();
    
    $plugin_url = KRS_LOAN_CALCULATOR_PLUGIN_URL;

    require_once( "calculator-form.php" );

    echo "<script src=\"$plugin_url/assets/js/js-calculator.js?v=1.1.2\"></script>"; // Put datetime stamp or version querystring to handle cache

    return ob_get_clean();
}
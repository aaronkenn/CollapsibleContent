<?php 
namespace ragingpixel\CollapsibleContent;
  
  
  /*
  *	Collapsible Content plugin
  * 
  *	@package	ragingpixel\CollapsibleContent
  * @author		Aaron Kennedy 
  *	@license	GPL-2.0+
  *	@link		https://KnowTheCode.io
  *
  *	@wordpress-plugin
  *
  *	Plugin Name: Collapsible Content
  *	Plugin URI: _
  *	Description: Collapsible Content is a WordPress Plugin that shows and hides hidden content. Practical examples include Q&As, FAQs, hints, marketing teasers, and more. Click the icon to open and reveal the content. Click again to close and hide it.
  *	Version: 1.0.1
  *	Author URI: https://ragingpixel.com.au 
  * Text Domain: collapsible_content
  * Requires WP: 4.7
  * Requires PHP: 5.5
  *
  */
/*
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/


if(! defined('ABSPATH') ){
	die("Oh, silly, there's nothing to see here.");
}

include( __DIR__ . '\src\shortcode\shortcodes.php');



  
  
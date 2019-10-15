<?php

//////////////////////////////////////////////////////////////
//===========================================================
// softaculous_extra.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

//$GLOBALS['softaculous_conf']['da_proto'] = 'https://';
//$GLOBALS['softaculous_conf']['da_port'] = '';
//$GLOBALS['softaculous_conf']['cwp_proto'] = 'https://';
//$GLOBALS['softaculous_conf']['vesta_proto'] = 'https://';
$GLOBALS['softaculous_conf']['protocol'] = 'http://www.';
$GLOBALS['softaculous_conf']['user_mod_dir'] = 0; //Set this to 1 if you want to use User MOD Dir. If enabled the script will be installed at http://IP/~username
$GLOBALS['softaculous_conf']['overwrite_existing'] = 0; //Set this to 1 if you want to overwrite the files and install the script forcefully. If enabled the script will be installed even if the files already exists
$GLOBALS['softaculous_conf']['use_special_chars'] = 0; // Set this to 1 if you wish to use special characters for randomly generated usernames and passwords
$GLOBALS['softaculous_conf']['use_panel_login'] = 0; // Set this to 1 if you wish to use the control panel login details as the admin login details for the installation
$GLOBALS['softaculous_conf']['domain_prefix'] = ''; // If you wish to use a fixed domain prefix for all installations to the primary domain. E.g. if you want to install a script on blog.example.com fill in the value for this variable as "blog"
//$GLOBALS['softaculous_conf']['rand_pass_length'] = 12; // Use this to create stronger random admin password. Default value is 12
$GLOBALS['softaculous_conf']['softaculous_sidebar_link'] = 0; //Set this to 1 if you wish to give Softaculous link in client area sidebar. 

/*// If You want to give custom names to the Custom Fields
$GLOBALS['softaculous_conf']['fields']['Script'] = 'Script Name';
$GLOBALS['softaculous_conf']['fields']['Admin Name'] = 'Admin Username';
$GLOBALS['softaculous_conf']['fields']['Admin Pass'] = 'Admin Password';
$GLOBALS['softaculous_conf']['fields']['Directory'] = 'Installation Directory';*/

/*// Add any Custom Fields that you want users to fill in
// The key of the $GLOBALS['softaculous_conf']['custom_fields'] array will be name of the field, you can find it in the install.xml of the script and the value should be the Field Name you Provided in the WHMCS product setup
$GLOBALS['softaculous_conf']['custom_fields']['site_name'] = 'Site Name'; 
$GLOBALS['softaculous_conf']['custom_fields']['site_desc'] = 'Site Description';
$GLOBALS['softaculous_conf']['custom_fields']['Script'] = 'WordPress'; // (Optional) Provide the script name which you want to be installed. If not provided user will be asked for the script
$GLOBALS['softaculous_conf']['pid'] = array(1, 2); // Use this if you want this hook to be executed only for specific products in WHMCS. Enter the product ids in the array
*/

/*
// Use this if you would like to install different script for different products in WHMCS. In the below example we are installing WordPress when any user purchases product with product id 1 (in WHMCS) and we are installing Joomla when the user purchases product with product id 2
$GLOBALS['softaculous_conf']['install']['pid'][1] = 'WordPress'; // 1 is the PID and WordPress is the script we want to install
$GLOBALS['softaculous_conf']['install']['pid'][2] = 'Joomla'; // 2 is the PID and Joomla is the script we want to install
*/

/*// Add default values for the fields like admin_username, softdirectory, etc
// The key of the $GLOBALS['softaculous_conf']['defaults'] array will be name of the field, you can find it in the install.xml of the script and the value should be the default value you want to be used
$GLOBALS['softaculous_conf']['defaults']['admin_username'] = 'admin'; 
$GLOBALS['softaculous_conf']['defaults']['site_name'] = 'This is a default Site Name';
$GLOBALS['softaculous_conf']['defaults']['softdirectory'] = 'test'; // This will install the script in test directory if no value for Directory is posted on order form*/

// This file is to add additional scripts which you have added as Custom Scripts.
// If you dont have any custom scripts in Softaculous OR dont want to add it to WHMCS, please dont upload this file. 

// NOTE : The ID of the script should be the same as custom scripts found in cscript.php

$GLOBALS['add_softaculous_scripts'] = array(
					10001 => array('name' => 'wordpress',
								'softname' => 'wordpress',
								'desc' => 'Wordpress is a Web Application Toolkit, which allows you to run impressive websites and build powerful online applications.',
								'ins' => 1,
								'cat' => 'blog',
								'type' => 'php',
								'ver' => '1.2.3'
								),
					10002 => array('name' => 'prestashop',
								'softname' => 'prestashop',
								'desc' => 'The most widely used Open Source forum solution',
								'ins' => 1,
								'cat' => 'ecommerce',
								'type' => 'php',
								'ver' => '3.0.7-PL1'
								)
							);

?>

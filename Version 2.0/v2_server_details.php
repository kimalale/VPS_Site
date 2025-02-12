<?php


/* Site Data */
/* invite_code_master is the Invite Code that the VIP Users will be using on the site */
/* free_user_exp is the active days for Free Users */
/* vip_user_exp is the active days for VIP Users */
$site_name        = "Exxotic";
$site_description = "Provider of Quality SSH, SSL, VPN Accounts";
$site_template    = "lumen";
$invite_code_master = "Exxotic";
$free_user_exp = "3";
$vip_user_exp = "15";


/* Server Data */
/* Format: Server_Name, IP_Address, Root_Pass, User_Type */
/* Example_1: 1=>array(1=>"Exxotic Server 1","123.456.789","Exxotic","VIP"), */
/* Example_2: 2=>array(1=>"Exxotic Server 2","123.456.789","Dreams","Free"), */


$server_lists_array=array(
			1=>array(1=>"sample 1","123.123.123.123","Exxotic","Free"),
			2=>array(1=>"sample 2","123.123.123.123","Exxotic","VIP"),
			3=>array(1=>"sample 3","123.123.123.123","Exxotic","VIP"),
			4=>array(1=>"sample 4","123.123.123.123","Exxotic","Free"),
	);			


/* Service Variables */	
$port_ssh= '22, 143'; 				// SSH Ports
$port_dropbear= '443, 110'; 			// Dropbear Ports
$port_ssl= '442'; 				// SSL Ports
$port_squid= '3128, 8080, 8888'; 		// Squid Ports
$ovpn_client= ''.$hosts.'/client.ovpn';		// OpenVPN Client Config
?>

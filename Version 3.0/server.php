<?php
$site_name        = "Exxotic";
$site_description = "Provider of Quality SSH, SSL, VPN Accounts";
$site_template    = "lumen";

$daily_limit_user = "50";

$server_lists_array=array(
	   1=>array(1=>"London Server","138.68.58.37","Exxotic","5"),

);

/* Service Variables */
$port_ssh= '22, 143, 81'; 			// SSH Ports
$port_dropbear= '443, 142, 82'; 		// Dropbear Ports
$port_ssl= 'n/a'; 				// SSL Ports
$port_squid= '3128, 8000, 8080'; 		// Squid Ports
$ovpn_client= ''.$hosts.'/client.ovpn';		// OpenVPN Client Config

?>

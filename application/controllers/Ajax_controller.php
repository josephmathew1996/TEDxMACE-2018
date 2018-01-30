<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_controller extends CI_Controller {

	public function subscribe($email="")
	{
		$email=utf8_decode(urldecode($email));
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			    $ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
			    $ip = $_SERVER['REMOTE_ADDR'];
			}

			$res=$this->db->simple_query('SELECT id FROM subscribers WHERE email="'.$email.'"');
			if(mysqli_num_rows($res)>0)
			{
				echo 'Thanks! You are already a subscriber';
			}
			else
			{	
				$date = date_create();
				$data = array(
				    'email' => $email,
				    'ip_add' => $ip,
				    'time' => date('Y-m-d H:i:s')
				);
				$this->db->insert('subscribers',$data);
				echo 'Subscription Successful';
					$to = $email;
					$email_subject = "Thank you for subscribing to TEDxMACE via email";
					$email_body = "Thank you for subscribing to TEDxMACE via email.\nYou will be recieving updates about TEDxMACE to this email id.\n \nThanks,\nTeam TEDxMACE ";
					//$email_body.="\nCountry: ".geoip_country_name_by_name ( $_SERVER['REMOTE_ADDR'] );
					$headers = "From: do-not-reply@tedxmace.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
					$headers .= "Reply-To: tedxmace@gmail.com";	
					if(mail($to,$email_subject,$email_body,$headers))
					   return true;			
					else
					   return false;
			}
		}
		else
		{
			echo 'Invalid Email';
		}
	}
}
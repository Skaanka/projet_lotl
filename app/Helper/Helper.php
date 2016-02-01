<?php

namespace Helper;

use SendGrid;

class Helper
{

	public static function mail($destinataire, $objet, $message) 
	{
		$sendgrid = new SendGrid("MON API KEY"); // API-KEY
		$email = new SendGrid\Email();

		$email->addTo($destinataire)
      	->setFrom("saurondumordorlouviers@gmail.com")
      	->setSubject($objet)
      	->setHtml($message);

		$sendgrid->send($email);
	}

}

<?php

namespace Helper;

use SendGrid;

class Helper
{

	public static function mail($destinataire, $objet, $message) 
	{
		$sendgrid = new SendGrid("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"); // API-KEY
		$email = new SendGrid\Email();

		$email->addTo($destinataire)
      	->setFrom("saurondumordorlouviers@gmail.com")
      	->setSubject($objet)
      	->setHtml($message);

		$sendgrid->send($email);
	}

}

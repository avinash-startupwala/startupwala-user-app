          <?php

require_once 'swiftmailer/lib/swift_required.php';

class SendMail
{
        function send()
		{


    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, "tls")->setUsername('avinashpawar059@gmail.com')->setPassword('Myyahoo321');
    
    $mailer = Swift_Mailer::newInstance($transport);
    
    $message = Swift_Message::newInstance('PHP mailer test')->setFrom(array(
        'avinashpawar059@gmail.com' => 'Avinash Pawar'
    ))->setTo(array(
        'avinashpawar059@gmail.com'
    ))->setBody('This mail is generated by PHP mailer Liabrary');

   // $message->attach(Swift_Attachment::fromPath("all_tms.xlsx")->setFilename("all_tms.xlsx"));
    
    $result = $mailer->send($message);


		}
	}

		$obj = new SendMail();

		$result_ = $obj->send();


		echo $result_;
		
        ?>



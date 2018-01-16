# CodeIgniter - PhpMailer

Sending mails via Phpmailer through CodeIgniter.This Repo will show how to send **webmail** from CodeIgniter.

### Demo

Sample Coming-soon template with mail - [View Demo](https://www.webetronics.in/Demo/CIwebmail/)


### PHPMailer

Refer : [Click Here !](https://github.com/PHPMailer/PHPMailer)


### Installation

1. Copy the **PhpMailer** folder from _/application/third_party_ and paste in your project as same.

2. Create a controller for mailer as 

        class PhpMailerLib {

            function __construct() {

            }

            public function load() {
	            require_once APPPATH . "third_party/phpmailer/PHPMailer.php"; //calling library file 
	            $objMail = new \PHPMailer\PHPMailer\PHPMailer;
	            return $objMail;
            }

        }

3. Load the library in your controller _$this->load->library("PhpMailerLib");_


### Sample Function

        $mail = $this->phpmailerlib->load();

		//Server settings
		$mail->SMTPDebug    = 2;                    // Enable verbose debug output -
		$mail->isSMTP();                            // Set mailer to use SMTP
		$mail->Host         = 'mail.**********.in'; // Specify main and backup SMTP servers - usually for webmail it will be incoming or outgoing server
		$mail->SMTPAuth     = true;                 // Enable SMTP authentication
		$mail->Username     = USERNAME;             // SMTP username
		$mail->Password     = PASSWORD;             // SMTP password
		$mail->SMTPSecure   = 'ssl';                // Enable TLS encryption, `ssl` also accepted
		$mail->Port         = 465;                  // TCP port to connect to

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        //Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

### Reference

You can view more examples and additonal mail functions from [PHPMailer](https://github.com/PHPMailer/PHPMailer)

        

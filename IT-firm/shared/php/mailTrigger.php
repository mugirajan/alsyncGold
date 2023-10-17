<?php

require_once("./vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

class sndMail
{
    private $f;
    private $valid = array("success" => false, "message" => "");
    private $mail;

    public function __construct() {
        if (!session_id()) {
            session_start();
        }
        $this->f = "file.txt";
        file_put_contents($this->f, "file ready".PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    public function contactEnquiry($data) {
        $this->sendEnquiryMailToEnquirer($data['username'], $data['email']);
        $this->sendEnquiryMailToAdmin($data);
        return $this->valid;
    }

    public function careerApproach($data) {
        
        $this->careerRequestMailToEnquirer($data['username'], $data['email']);
        $this->sendCareerRequestMailToAdmin($data);
        return $this->valid;
    }

    public function sendEnquiryMailToEnquirer($name, $mailId) {
     
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.hostinger.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        // to be changes for production env.
        $mail->Username = "support@alsyncglobal.com";
        $mail->Password = "Alsync@123";
        $mail->setFrom("support@alsyncglobal.com", "Mail from Alsync Global");

        // admin address ~ ~ user mail id ~
        $mail->AddAddress($mailId);

        $mail->Subject = "Your enquiry is taken into consideration - ". $name;

        $mail->msgHTML("
            <br />
            <br />
            Will get back to you shortly
            <br />
            <br />
            Thanks and Regards, <br />
            Team Alsync
        ");
        if ($mail->send()) {
            file_put_contents($this->f, "Mail sent to ".$name." for Enquiry". PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully...!!!";
        } else {
            file_put_contents($this->f, "Failed to send mail to ".$name." for Enquiry " . PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = false;
            $this->valid['message'] = "Failed to send mail...!!!";
        }
        return $this->valid;
    }

    public function sendEnquiryMailToAdmin($data) {
        
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.hostinger.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        // to be changes for production env.
        $mail->Username = "support@alsyncglobal.com";
        $mail->Password = "Alsync@123";
        $mail->setFrom("support@alsyncglobal.com", "Mail from Alsync Global");

        // to be changes for production env.
        $mail->AddAddress("support@alsyncglobal.com");

        $mail->Subject = "New enquiry - ". $data['username'];

        $mail->msgHTML("  
        <h3> Contact details: </h3>
        <strong> Name: </strong> ". $data['username'] ." <br />
        <strong> Email: </strong> ". $data['email'] ." <br />
        <strong> Phone: </strong> ". $data['phone'] ." <br />
        <strong> Subject: </strong> ". $data['subject'] ." <br />
        <strong> Message: </strong> ". $data['message'] ." <br />

        ");
        if ($mail->send()) {
            file_put_contents($this->f, "Mail sent to admin for ".$data['username']." - Enquiry". PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully...!!!";
        } else {
            file_put_contents($this->f, "Failed to send mail to admin for ".$data['username']."- Enquiry " . PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = false;
            $this->valid['message'] = "Failed to send mail...!!!";
        }
        return $this->valid;
    }

    public function careerRequestMailToEnquirer($name, $mailId) {
     
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.hostinger.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        // to be changes for production env.
        $mail->Username = "hr@alsyncglobal.com";
        $mail->Password = "Alsync@123";
        $mail->setFrom("hr@alsyncglobal.com", "Mail from Alsync Global");
        
        // admin address ~ ~ user mailId ~
        $mail->AddAddress($mailId);

        $mail->Subject = "Career request - ". $name;

        $mail->msgHTML("
            <br />
            <br />
            <h4>Thansk for reaching out to Alsync..!!!</h4><br />
            Will get back to you shortly
            <br />
            <br />
            Best regards, <br />
            Team Alsync
        ");
        if ($mail->send()) {
            file_put_contents($this->f, "Mail sent to ".$name." for Career request". PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully...!!!";
        } else {
            file_put_contents($this->f, "Failed to send mail to ".$name." for Career request " . PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = false;
            $this->valid['message'] = "Failed to send mail...!!!";
        }
        return $this->valid;
    }

    public function sendCareerRequestMailToAdmin($data) {
        
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.hostinger.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        // to be changes for production env.
        $mail->Username = "hr@alsyncglobal.com";
        $mail->Password = "Alsync@123";
        $mail->setFrom("hr@alsyncglobal.com", "Mail from Alsync Global");
        
        // admin address ~ ~ hr@alsync.com ~
        $mail->AddAddress("hr@alsyncglobal.com");

        $mail->Subject = "New career request - ". $data['username'];

        $mail->msgHTML("  
        <h3> Contact details: </h3>
        <strong> Name: </strong> ". $data['username'] ." <br />
        <strong> Email: </strong> ". $data['email'] ." <br />
        <strong> Phone: </strong> ". $data['phno'] ." <br />
        <strong> Subject: </strong> ". $data['relocate'] ." <br />
        <strong> Message: </strong> ". $data['additionalInfo'] ." <br />

        ");
        if ($mail->send()) {
            file_put_contents($this->f, "Mail sent to  admin for ".$data['username']." - Career request". PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully...!!!";
        } else {
            file_put_contents($this->f, "Failed to send mail for ".$data['username']." - Career request " . PHP_EOL, FILE_APPEND | LOCK_EX);
            $this->valid['success'] = false;
            $this->valid['message'] = "Failed to send mail...!!!";
        }
        return $this->valid;
    }
}

?>
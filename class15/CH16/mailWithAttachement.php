<?php
if(isset($_POST['submit'])){
//recipient
$to = $_POST['to'];

//sender
$from = $_POST['from'];
$fromName = $_POST['name'];

//email subject
$subject = $_POST['subject'];

//attachment file path
if(is_uploaded_file($_FILES['fileatt']['tmp_name'])){
//$file = "avro_phonetic.zip";

move_uploaded_file($_FILES['fileatt']['tmp_name'],$_FILES['fileatt']['name']);
$file = $_FILES['fileatt']['name'];
//echo $file;
}

//email body content
$htmlContent = '<h1>PHP Email with Attachment by '.$from.'</h1>
    <p>This email has sent from PHP script with attachment for testing and edicational purpose only.</p>';

//header for sender info
$headers = "From: $fromName"." <".$from.">";

//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($files[$i])."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//email sending status
$m = $mail?"<h1>Mail sent.</h1>":"<h1>Mail sending failed.</h1>";
}
?>
<?php if(isset($m)) echo $m; ?>
<form action='' method='post' enctype="multipart/form-data">
To:
<input type='text' name='to' />
<br>
From:
<input type='text' name='from' />
<br>
Name:
<input type='text' name='name' />
<br>
Subject:
<input type='text' name='subject' />
<br>
Message <textarea rows="15" cols="50" name='message'></textarea>
<br />
<input type="file" name="fileatt"/>
<input type="submit" name="submit"  value="SEND" />
</form>
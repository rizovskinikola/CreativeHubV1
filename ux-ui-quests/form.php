  
<?php 

if( !empty($_POST['submit']) ) {

    $from_email         = 'sender@abc.com'; //from mail, sender email address
    $recipient_email    = 'levchegochev@gmail.com'; //recipient email address
     
    //Load POST data from HTML form
    $sender_name    	= $_POST["name"]; //sender name
    $reply_to_email 	= $_POST["email"]; //sender email, it will be used in "reply-to" header
    $subject        	= $_POST["subject"]; //subject for the email
    $title				= $_POST['title'];
    $prototip			= $_POST['prototip'];
    $description 		= $_POST['descripton'];

    $message ="Name = ". $sender_name . "\r\n  Email = " . $reply_to_email . "\r\n \r\n Naslov = ".$title . "\r\n Opis = ".$description; 
 
    /*Always remember to validate the form fields like this
    if(strlen($sender_name)<1)
    {
        die('Name is too short or empty!');
    }
    */
     
    //Get uploaded file data using $_FILES array
    $tmp_name    = $_FILES['file']['tmp_name']; // get the temporary file name of the file on the server
    $name        = $_FILES['file']['name'];  // get the name of the file
    $size        = $_FILES['file']['size'];  // get size of the file for size validation
    $type        = $_FILES['file']['type'];  // get type of the file
    $error       = $_FILES['file']['error']; // get the error (if any)
 
    //validate form field for attaching the file
    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }
 
    //read from the uploaded file & base64_encode content
    $handle = fopen($tmp_name, "r");  // set the file handle only for reading the file
    $content = fread($handle, $size); // reading the file
    fclose($handle);                  // close upon completion
 
    $encoded_content = chunk_split(base64_encode($content));
 
    $boundary = md5("random"); // define boundary with a md5 hashed value
 
    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:".$from_email."\r\n"; // Sender Email
    $headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
         
    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));
         
    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $type; name=".$name."\r\n";
    $body .="Content-Disposition: attachment; filename=".$name."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email
     
    $sentMailResult = mail($recipient_email, $subject, $body, $headers);
 
    if($sentMailResult)
    {
      echo "<script>   
			swal({
				title: 'Ви благодариме за вашата апликација!',
				text: 'Kе ве контактираме во рок од 24 часа',
				icon: 'success',
				button: 'Супер!',
			});
        </script>";
     } else {
    
       echo "<script>alert('Mail was not sent. Please try again later');</script>";
    
     }
} else {
	echo 'Form did not submitted successfully. Please try again.';
}


?>
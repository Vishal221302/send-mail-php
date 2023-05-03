<?php
if((isset($_POST['name']))&&(isset($_POST['email'])&&$_POST['email']!="")){ 
  $to = 'support@jeangillescapital.com';
  $service = $_POST['services'];
  $message = '
      <html>
            <head>
                <title>Ajax Form Submission</title>
            </head>
            <body>
                <p><b>Name:</b> '.$_POST['name'].'</p>
                <p><b>Email:</b> '.$_POST['email'].'</p>                        
                <p><b>Service:</b> '.$_POST['services'].'</p>
                <p><b>Phone:</b> '.$_POST['phone'].'</p>
            </body>
        </html>'; 
  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
//$headers .= "From: Site <admin@mail.com>\r\n"; 
if(mail($to, $service, $message, $headers)){

  echo json_encode(array('status' => 'success'));
} else {
  echo json_encode(array('status' => 'error'));
}
}
?>
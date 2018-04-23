

<?php 

$sendto   = "enbond@mail.ua"; // почта, на которую будет приходить письмо
$usermail = "test@test.ru"; // почта отправителя
        
$username = $_POST['your-name'];   
$usertel = $_POST['your-phone']; 
$usercomment = $_POST['your-message']; 

$yourName = $_POST['your-name'];
$yourPhone = $_POST['your-phone'];       
$yourEmail = $_POST['your-email'];
$FromZipCode = $_POST['FromZipCode'];
$ToZipCode = $_POST['ToZipCode'];
$Rooms = $_POST['Rooms'];
$movingDate = $_POST['moving-date'];
$yourMessage = $_POST['your-message'];        

// Формирование заголовка письма
$subject  = "New request";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($yourEmail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New request</h2>\r\n";
$msg .= "<p><strong>Name:</strong> ".$yourName."</p>\r\n";
$msg .= "<p><strong>Phone:</strong> ".$yourPhone."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$yourEmail."</p>\r\n";
$msg .= "<p><strong>From Zip Code:</strong> ".$FromZipCode."</p>\r\n";
$msg .= "<p><strong>To Zip Code:</strong> ".$ToZipCode."</p>\r\n";
$msg .= "<p><strong>Rooms:</strong> ".$Rooms."</p>\r\n";
$msg .= "<p><strong>Moving Date:</strong> ".$movingDate."</p>\r\n";
$msg .= "<p><strong>Message:</strong> ".$yourMessage."</p>\r\n";        
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
?>
        <section class="infoText">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-title style1 center">
                            <h2>Спасибо!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="infoTextDesc" style="text-align: center;">
                            <p>Ваша заявка получена!</p>
                            <p>В ближайшее время наш менеджер свяжется с Вами!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
<?php
} else {
		?>
        <section class="infoText">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-title style1 center">
                            <h2>Спасибо!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="infoTextDesc" style="text-align: center;">
                            <p>Ваша заявка получена!</p>
                            <p>В ближайшее время наш менеджер свяжется с Вами!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    
<?php
}
?>

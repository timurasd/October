<?php

    $email = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $comments = $_POST['comments'];

    $to = "timursekamov@gmail.com";
    $from = $email;
    $subject = "От поситителя сайта";
    $text =  "Написал(а): $name\n\n email - $email\n\n Телефон - $number\n\n Сообщение - $comments\n\n";

    $header = "Content-type: text/html; charset=utf-8\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $headers = "From: $from \r\n";
    
    $sending = mail($to, $subject, $text, $headers);

    if($sending) echo '<script language="JavaScript" type="text/javascript">
						function changeurl(){eval(self.location="https://october.ai/");}
						window.setTimeout("changeurl();",3000);
						</script> <div style="text-align: center; font-size: 25px; margin-top: 50px;">Спасибо! Ваша заявка принята,<br> Мы свяжемся с Вами в ближайшее время </div>';

    ?>

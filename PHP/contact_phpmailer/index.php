<?php

$result="";

if(isset($_POST['submit'])){
    require 'PHPMailer/PHPMailerAutoload.php';

    // create a mail object
    $mail = new PHPMailer();

    $mail->Host='smtp.gmail.com';
    $mail->Port=465;
    $mail->IsSMTP();
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->Username='quan0027.elev.techcollege@gmail.com';
    $mail->Password='ddn22akd';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('quanvle@live.dk');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='From submission'.$_POST['subject'];
    $mail->Body='<h1 align=center>Name: '.$_POST['name'].'<br>Email: '. $_POST['email'].'<br>Phone: '. $_POST['phone'].'<br>Subject: '.$_POST['subject'].'<br>Message: '.$_POST['message'].'</h1>';

    if(!$mail->send()){
        $result="Something went wrong please try again";
    }
    else{
        $result="Thank you ".$_POST['name']." I will get back to you soon";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<Head>
    <title>Contact</title>
    <meta charset="utf-8"/>
    <meta name="description" content="Contact form"/>
    <link rel="stylesheet" href="../../Style.CSS"/>
</Head>
<Body>
<div id="NavBar">
    <ul>
        <NavBarLi><a href="../../Index.html">Home</a></NavbarLi>
        <div class="dropdown">
            <NavBarLi class="dropbtn"><a href="#">Skills</a></NavbarLi>
            <div class="dropdown-content">
                <a href="../../SkillsHtmlCss.html">HTML/CSS</a>
                <a href="../../SkillsCsharp.html">C#</a>
            </div>
        </div>
        <div class="dropdown">
            <NavBarLi class="dropbtn active"><a href="#">About Me</a> </NavBarLi>
            <div class="dropdown-content">
                <a href="../../MoreAboutMe.html">CV and Application</a>
                <a href="/ImageMap/ImageMapFamily.html">My family</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </ul>
</div>
<h2 style="font-size:50px; text-align: center"><?= $result; ?></h2>
<div style="display: flex; justify-content: center;" >
    <form style="float:left;" id="Contact" method="POST" >
        
        <input class="f-input" type="text" name="name" placeholder="Name"/><br>     
        <input class="f-input" type="email" name="email" placeholder="@mail"/><br>       
        <input class="f-input" type="number" name="phone" placeholder="Phone number"/><br>      
        <input class="f-input" type="text" name="subject" placeholder="Subject"/><br>

        <!--Radio Buttons
            Choose sex:
        <label for="Male">
            <input id="Male" type="radio" name="Male/Female">Male
        </label>
        <label for="Female">
            <input id="Female" type="radio" name="Male/Female">Female
        </label><br>
        <label for="Sweet">
                <input id="Sweet" type="checkbox" name="personality">Sweet
            </label>
        <label for="Kind">
            <input id="Kind" type="checkbox" name="personlity">Kind
        </label>
        <label for="Mean">
                <input id="Mean" type="checkbox" name="personlity">Mean
        </label><br>-->

        <textarea class="f-input" name="message" style="width:240px;"placeholder="Message"></textarea><br>
        <input class="button" type="submit" name="submit" value="SEND" />
        <input style="margin:1px;" class="button" type="reset" value="RESET"/>
    </form>
</div>


</Body>
</html>
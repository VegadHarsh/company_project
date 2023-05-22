<?php
include_once("assets/php/include/session.php");
?>
<?php $_SESSION["TrackingURL"] = $_SERVER['PHP_SELF'];?>

<?php
function Redirect_to($New_Location) {
    header("Location: " . $New_Location);
    exit();
}
$firstnameError = "";
$emailError = "";
$messageError = "";

if(isset($_POST["sendMessage"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //connect with the data
    $firstname = filter_var($_POST['f_name']);
    $email = filter_var($_POST['email']);
    $message = filter_var($_POST['message']);

    if (!$conn) {
        die(mysqli_connect_error());
    }

    function test_user($data) {
        return $data;
    }

    if (empty($_POST['f_name'])) {
        $firstnameError = "<p style='color:red'>Firstname Name is required*</p>";
    } else {
        $firstname = test_user($_POST['f_name']);
    }

    if (empty($_POST['email'])) {
        $emailError = "<p style='color:red'>email is required*</p>";
    } else {
        $email = test_user($_POST['email']);
    }

    if (empty($_POST['message'])) {
        $messageError = "<p style='color:red'>message is required*</p>";
    } else {
        $message = test_user($_POST['message']);
    }

    
include('../Layantram Technologies/smtp/PHPMailerAutoload.php');
$html='<html>
<body>
<h1>This is Mail</h1>
<p> ' . "<br/>". $firstname . "<br/>" . $email . "<br/>" . $message . ' </p>
</body>
</html>';

function smtp_mailer($to,$subject, $msg){
    $mail = new PHPMailer(); 
    // $mail->SMTPDebug  = 3;
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "harshvegad911@gmail.com";
    // $mail->Password = "HVX101359";
    // $mail->Password = "cleratjhggnsgrjkpitilkujjr";
    $mail->Password = "cleijkyngidktsmn";
    $mail->SetFrom("");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));
    if(!$mail->Send()){
        echo $mail->ErrorInfo;
    }else{
        $_SESSION["SuccessMessage"] = "SuccessFull ";
        Redirect_to("contact-us.php");
        
    }
}
echo smtp_mailer($email,'subject',$html,$message);
}       
?>
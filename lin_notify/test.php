<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TEST BOTH APP API</h1>
    <form method="POST" action="test.php">
        <input type="text" name="test">
        <button type="submit" name="line">Line</button>
        <button type="submit" name="discord">Discord</button>
        <button type="submit" name="both">Both Apps</button>
    </form>
    <?php
    if(array_key_exists('line', $_POST)) {
        line();
    }
    if(array_key_exists('discord', $_POST)) {
        discord();
    }
    if(array_key_exists('both', $_POST)) {
        line();
        discord();
    }
    function line(){
        $token      = 'YOUR_LINE_TOKEN';
        $mymessage = $_POST['test']; //Set new line with '\n'
        $data = array (
            'message' => $mymessage
        );
        $chOne = curl_init();
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $chOne, CURLOPT_POST, 1);
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, $data);
        curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array( 'Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer '.$token, );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $chOne );
        //Check error
        /*if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); }
        else { $result_ = json_decode($result, true);
        echo "status : ".$result_['status']; echo "message : ". $result_['message']; 
        }*/
        //Close connection
        curl_close( $chOne );
    }
    ?>
    <?php 
    function discord(){
        $webhookurl = "YOUR_DISCORD_WEBHOOK";
        $msg_dis = $_POST['test'];
        //$timestamp = date("c", strtotime("now"));
        
        $json_data = json_encode([
            // Message
            "content" => $msg_dis,
            
            // Username
            //"username" => "PHP",
        
            // Avatar URL.
            // Uncoment to replace image set in webhook
            //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",
        
            // Text-to-speech
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        
        
        $ch = curl_init( $webhookurl );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        
        $response = curl_exec( $ch );
        //var_dump($response);
        //echo $json_data,'<br>';
        // If you need to debug, or find out why you can't send message uncomment line below, and execute script.
        // echo $response;
        curl_close( $ch );
    }
?>
</body>
</html>

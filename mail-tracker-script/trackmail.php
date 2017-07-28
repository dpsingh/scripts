<?php

$host = "productionvccircle.cfhljytjjcy3.ap-southeast-1.rds.amazonaws.com";
$uname = "u_mailer";
$pass = "MiJ87x!q$5y";
$database = "live_mailer";

try {
    $connection = mysql_connect($host, $uname, $pass);
    $result = mysql_select_db($database);
} catch (PDOException $e) {
    error_log($e->getMessage(), 0);
} catch (Exception $e) {
    error_log($e->getMessage(), 0);
}

try {
    if( (isset($_GET['e']) && !empty( $_GET['e'] ) ) && ( isset($_GET['e']) && $_GET['domain'] == 'vcc') ) {     
        header('Content-Type: image/gif');
        header("Content-Length: " . filesize("image.gif"));
        $f = fopen('image.gif', 'rb');
        fpassthru($f);
        fclose($f);
        $sql = "INSERT INTO mail_tracks (mailer_name, email, dt, mail_status) VALUES('Attractive M&A Targets', '".$_GET['e']."', '".date("Y-m-d h:i:s")."', 'opened')";
        $setRec = mysql_query($sql);
    }    
} catch (PDOException $e) {
    error_log($e->getMessage(), 0);
} catch (Exception $e) {
    error_log($e->getMessage(), 0);
}
?>

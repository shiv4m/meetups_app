<?php
error_reporting(E_ALL ^ E_NOTICE);
include ('../../connect.php');
if($_POST['dating'] || $_POST['dinner'] || $_POST['clubbing'] || $_POST['gaming'] || $_POST['gyming'] || $_POST['massage'] || $_POST['movie'] || $_POST['phonechat'] || $_POST['friendship'] || $_POST['partying'] || $_POST['travelling'] || $_POST['lunch']){
         
    if($_POST['dating']){
        $table= "dating";   
        $filename = "dating";    
    }
    else if($_POST['dinner']){
        $table= "dinner";   
        $filename = "dinner"; 
    }
    else if($_POST['clubbing']){
        $table = "clubbing";   
        $filename = "clubbing"; 
    }
    else if($_POST['gaming']){
        $table = "gaming";   
        $filename = "gaming"; 
    }
    else if($_POST['gyming']){
        $table = "gyming";   
        $filename = "gyming"; 
    }
    else if($_POST['massage']){
        $table = "massage";   
        $filename = "massage"; 
    }
    else if($_POST['movie']){
        $table = "movie";   
        $filename = "movie"; 
    }
    else if($_POST['phonechat']){
        $table = "phonechat";   
        $filename = "phonechat"; 
    }
    else if($_POST['friendship']){
        $table = "friendship";   
        $filename = "friendship"; 
    }
    else if($_POST['partying']){
        $table = "partying";   
        $filename = "partying"; 
    }
    else if($_POST['travelling']){
        $table = "travelling";   
        $filename = "travelling"; 
    }
    else if($_POST['lunch']){
        $table = "lunch";   
        $filename = "lunch"; 
    }

$conn = new mysqli('localhost', 'id441734_rendezvous', 'shivam1618');  
mysqli_select_db($conn, 'id441734_rendezvous_db');  
  
$setSql = "SELECT `Full`,`contact`,`session`,`gender` FROM $table";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "Full Name" . "\t" . "Contact" . "\t" . "Session" . "\t" . "Gender" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";
    
?>
<!doctype html>
<head><title>Download</title></head>
<body>
    <form action="download.php" method="post">
        <input type="submit" name="dating" value="dating">
        <input type="submit" name="clubbing" value="clubbing">
        <input type="submit" name="partying" value="partying">
        <input type="submit" name="dinner" value="dinner">
        <input type="submit" name="friendship" value="friendship">
        <input type="submit" name="gaming" value="gaming">
        <input type="submit" name="gyming" value="gyming">
        <input type="submit" name="lunch" value="lunch">
        <input type="submit" name="massage" value="massage">
        <input type="submit" name="movie" value="movie">
        <input type="submit" name="phonechat" value="phonechat">
        <input type="submit" name="travelling" value="travelling">
        
    </form>
</body>
</html>
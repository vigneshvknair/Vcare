<? php 
    
    $amount=$_POST['amount'];
    $date =str_replace("/","",$_POST['date']);
    $date=str_replace(":","",$date);
    $date=str_replace(" ","",$date);
    $month=substr($date,4,2);

?>
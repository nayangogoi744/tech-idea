<?Php
@$source_id=$_GET['source_id'];
//$cat_id=2;
/// Preventing injection attack //// 
if(!is_numeric($source_id)){
echo "Data Error";
exit;
 }
/// end of checking injection attack ////
require "config.php"; // Database connection string 

$sql="SELECT target_value,target_id FROM target WHERE source_id=:source_id";
$row=$dbo->prepare($sql);
$row->bindParam(':source_id',$source_id,PDO::PARAM_INT,5);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$main = array('data'=>$result);
echo json_encode($main);
?>

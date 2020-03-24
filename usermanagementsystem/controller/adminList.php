
<?php
$id =  $_GET['id'];
echo $id;
$query = "select *from detail";
$list = db::showAllDetail($query);
$query = "select *from email";
$listEmail = db::showAllEmail($query);
print_r($listEmail)."<br>";
for($i=0;$i<count($listEmail);$i++) {
  for($j=$i+1;$j<count($listEmail);$j++) {
     if($listEmail[$i]['id'] == $listEmail[$j]['id']) {
       $list1[$i]['id'] = $listEmail[$i]['id'];
       $list1[$j]['id'] = $listEmail[$j]['id'];
       $list1[$i]['email'] = $listEmail[$i]['email'];
       $list1[$j]['email'] = $listEmail[$j]['email'];
     } else {
       $list1[$i]['id'] = $listEmail[$i]['id'];
       $list1[$j]['id'] = $listEmail[$j]['id'];
       $list1[$i]['email'] = $listEmail[$i]['email'];
       $list1[$j]['email'] = $listEmail[$j]['email'];
     }
  }
}
print_r($list1);
?>

<?php
include("../model/table.php");
include("../model/tableAdapter.php");
include("../model/db.php");

$list = $table->get("blood_group", "blood_group", "bloodGroup");


$output = "";
$output .= "<table id='table'>
              <thead>
                <tr class='table100-head'>
                  <th class='column1'>Blood Group</th>
                  <th class='column2'>Action</th>
                </tr>
             </thead>
             <tbody>";
for ($i = 0;$i < count($list);$i++)
    {        
         $output .= "<tr class='".$list[$i]['id']."'>";
         $output .= "<td class='column1' id='rem'>".$list[$i]['bloodGroup']."</td>";
         $output .= "<td><button id='del' 
         onclick='functionConfirm(8, function yes() { display(".$list[$i]['id'].") })'><i class='fa fa-trash'></i></button>";
         $output .= "<button id='del' class='update' onclick=update(".$list[$i]['id'].",'".$list[$i]['bloodGroup']."')><i class='fa fa-edit edit'></i></button></td></tr>";
    }
        $output .= "</tbody></table><br>";
echo $output;
exit;

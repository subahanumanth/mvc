<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/controller/autoload.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/table.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/tableAdapter.php");

if ($_POST['page'] == "/manageBloodGroup")
{
    $list = $table->get("blood_group", "blood_group", "bloodGroup");
    $output = "";
    $output .= "<table id='table'>
                  <thead>

                          <th class='column1'>Blood Group</th>
                          <th class='column2'>Action</th>
                  </thead>
                <tbody>";
    for ($i = 0;$i < count($list);$i++)
    {
        $output .= "<tr class='" . $list[$i]['id'] . "'>";
        $output .= "<td class='column1' id='rem'>" . $list[$i]['bloodGroup'] . "</td><td>";
        $output .= "<button id='del' class='trs' onclick='functionConfirm(undefined, function yes(){display(" . $list[$i]['id'] . ")});'><i class='fa fa-trash'></i></button>";
        $output .= "<button id='del' class='update' onclick=update(" . $list[$i]['id'] . ",'" . $list[$i]['bloodGroup'] . "')><i class='fa fa-edit edit'></i></button></td></tr>";
    }
    $output .= "</tbody></table><br>";
    echo $output;
}

else if ($_POST['page'] == "/manageDetailsOfGraduation")
{
    $list = $table->get("details_of_graduation", "details_of_graduation", "detailsOfGraduation");
    $output = "";
    $output .= "<table id='table'>
                  <thead>
                    <tr class='table100-head'>
                      <th class='column1'>Details Of Graduation</th>
                      <th class='column2'>Action</th>
                    </tr>
                  </thead>
                <tbody>";
    for ($i = 0;$i < count($list);$i++)
    {
        $output .= "<tr class='" . $list[$i]['id'] . "'>";
        $output .= "<td class='column1' id='rem'>" . $list[$i]['detailsOfGraduation'] . "</td><td>";
        $output .= "<button id='del' class='trs' onclick='functionConfirm(undefined, function yes(){display(" . $list[$i]['id'] . ")});'><i class='fa fa-trash'></i></button>";
        $output .= "<button id='del' class='update' onclick=update(" . $list[$i]['id'] . ",'" . $list[$i]['detailsOfGraduation'] . "')><i class='fa fa-edit edit'></i></button></td></tr>";
    }
    $output .= "</tbody></table><br>";
    echo $output;
}

else if ($_POST['page'] == "/manageAreaOfInterest")
{
    $list = $table->get("admin_area_of_interest", "area_of_interest", "areaOfInterest");
    $output = "";
    $output .= "<table id='table'>
                  <thead>
                    <tr class='table100-head'>
                      <th class='column1'>Area Of Interest</th>
                      <th class='column2'>Action</th>
                    </tr>
                  </thead>
                <tbody>";
    for ($i = 0;$i < count($list);$i++)
    {
        $output .= "<tr class='" . $list[$i]['id'] . "'>";
        $output .= "<td class='column1' id='rem'>" . $list[$i]['areaOfInterest'] . "</td><td>";
        $output .= "<button id='del' class='trs' onclick='functionConfirm(undefined, function yes(){display(" . $list[$i]['id'] . ")});'><i class='fa fa-trash'></i></button>";
        $output .= "<button id='del' class='update' onclick=update(" . $list[$i]['id'] . ",'" . $list[$i]['areaOfInterest'] . "')><i class='fa fa-edit edit'></i></button></td></tr>";
    }
    $output .= "</tbody></table><br>";
    echo $output;
}

else if ($_POST['page'] == "/list")
{
    session_start();
    $adminList = adminList::getInstance();
    if($_POST['id'] != "0") 
    {
        $list = $adminList->sortByBloodGroup($_SESSION['id'], $_POST['id']);
        for ($i = 0;$i < count($list);$i++)
        {
            $list[$i]['bloodGroup'] = $adminList->showAllBloodGroup($list[$i]['id'], $i);
            $list[$i]['detailsOfGraduation'] = $adminList->showAllDetailsOfGraduation($list[$i]['id'], $i);
            $list[$i]['areaOfInterest'] = $adminList->showAllAreaOfInterest($list[$i]['id'], $i);
            $list[$i]['email'] = $adminList->showAllEmail($list[$i]['id'], $i);
            $list[$i]['mobile'] = $adminList->showAllMobile($list[$i]['id'], $i);
        }        
    }
    else
    {
        $list = $adminList->showAllDetail($_SESSION['id']);
        for ($i = 0;$i < count($list);$i++)
        {
            $list[$i]['bloodGroup'] = $adminList->showAllBloodGroup($list[$i]['id'], $i);
            $list[$i]['detailsOfGraduation'] = $adminList->showAllDetailsOfGraduation($list[$i]['id'], $i);
            $list[$i]['areaOfInterest'] = $adminList->showAllAreaOfInterest($list[$i]['id'], $i);
            $list[$i]['email'] = $adminList->showAllEmail($list[$i]['id'], $i);
            $list[$i]['mobile'] = $adminList->showAllMobile($list[$i]['id'], $i);
        }
    }
    $output = '';
    $output .= '<table id="customers">
                  <thead>
                    <tr class="table100-head">
                      <th class="column1">Id</th>
                      <th class="column1">First Name&nbsp;<i class="fa fa-sort"></i></th>
                      <th class="column2">Last Name&nbsp;<i class="fa fa-sort"></i></th>
                      <th class="column3">DOB&nbsp;<i class="fa fa-sort"></i></th>
                      <th class="column4">Details Of Graduation</th>
                      <th class="column5">Blood Group</th> 
                      <th class="column6">Gender&nbsp;<i class="fa fa-sort"></i></th>
                      <th class="column7">Email&nbsp;<i class="fa fa-sort"></i></th>
                      <th class="column8">Mobile Number&nbsp;<i class="fa fa-sort"></i></th>
                      <th class="column9">Area Of Interest</th>
                      <th class="column10">Profile Picture</th>
                      <th class="column11">Action</th>
                    </tr>
                  </thead>
                  <tbody>';
    for ($i = 0;$i < count($list);$i++)
    {
        if (isset($list[$i]['id']))
        {
            $output .= '<tr class="' . $list[$i]['id'] . '">
                           <td class="column1">' . $list[$i]['id'] . '</td>
                           <td class="column1">' . ucfirst($list[$i]['firstName']) . '</td>
                           <td class="column2">' . $list[$i]['lastName'] . '</td>
                           <td class="column3">' . date("d-M-Y", strtotime($list[$i]['dateOfBirth'])) . '</td>
                           <td class="column4">' . $list[$i]['detailsOfGraduation'] . '</td>
                           <td class="column5">' . $list[$i]['bloodGroup'] . '</td>
                           <td class="column6">' . $list[$i]['gender'] . '</td>
                           <td class="column7">' . $list[$i]['email'] . '</td>
                           <td class="column8">' . $list[$i]['mobile'] . '</td>
                           <td class="column9">' . $list[$i]['areaOfInterest'] . '</td>
                           <td class="column10"><img style="width:70px; height:45px" src="' . $list[$i]['profilePicture'] . '"></td>
                           <td><button class="list" id="del" value="' . $list[$i]['id'] . '" onclick="functionConfirm(undefined,function yes(){display(' . $list[$i]['id'] . ')});"><i class="fa fa-trash"></i></button>
                           <button class="column11 list" value="' . $list[$i]['id'] . '" onclick="update ('.$list[$i]['id'].');"><i class="fa fa-edit"></i></button>
                          </td>
                          </tr>';
        }
    }
    $output .= '</tbody>
                      </table>';
    echo $output;
}



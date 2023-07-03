<?php
session_start();
include('../service/conexao.php');
$uid=$_SESSION['UID'];
$time=time();
$res=mysqli_query($con,"select * from user");
$i=1;
$html='';
while($row=mysqli_fetch_assoc($res)){
	$status='Offline';
	$class="btn-danger";
	if($row['status'] == 'Online'){
		$status='Online';
		$class="btn-success";
	}
	if ($row['status'] == 'Awaiting') {
		$status = 'Awaiting';
		$class = "btn-warning";
	}
	$html.='<tr>
                  <th scope="row">'.$i.'</th>
                  <td>'.$row['name'].'</td>
                  <td><button type="button" class="btn '.$class.'">'.$status.'</button></td>
               </tr>';
	$i++;
}
echo $html;
?>
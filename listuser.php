
<body background="../../picc/��no.100000��15.jpg" > 
<div style="height:100px"></div>
<center>
<table border=1 align="center">
	
<tr height="50px" align="center">
		
	<td width="200px">�˻���</td>
	<td width="200px">����</td>
	<td width="200px">ɾ��</td>
</tr>	
<?php
	include_once '../../user/dbConnect/db.php';
	
	$sql="select * from admin";
	$result=mysql_query($sql);	
	while($array=mysql_fetch_array($result))
	{
		echo
			"<tr height=\"50px\" align=\"center\">					
					<td>$array[username]</td>
					<td>$array[userpwd]</td>
					<td><a href='dealDeleteuser.php?id=$array[username]' style=\"text-decoration:none;color:#666;\">ɾ��</a></td>
			</tr>";
		
	}
	
	
	

?>

	
	
</table>

</center>

</body>
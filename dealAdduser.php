<?php
	include_once '../../user/dbConnect/db.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="insert into admin values('$username','$password')";
	
	$result=mysql_query($sql);
	
	if($result !=false)
	{?>
        <script>
		alert("��ӳɹ�");
 		window.location.href="listuser.php";
  		</script>		
		<?PHP }else
		{ ?>
		<script>
		alert("���ʧ��");
 		window.location.href="listuser.php";
  		</script>
		<?php }
		mysql_close();
		?>
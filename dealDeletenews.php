<?php
	include_once '../../user/dbConnect/db.php';
	
	$id=$_GET['id'];
	$sql="delete from news where id=$id";
	
	$result=mysql_query($sql);
	if($result!=false)
	{?>
        <script>
		alert("ɾ���ɹ�");
 		window.location.href="listnews.php";
  		</script>		
		<?PHP }else
		{ ?>
		<script>
		alert("ɾ��ʧ��");
 		window.location.href="listnews.php";
  		</script>
		<?php }
		mysql_close();
		?>

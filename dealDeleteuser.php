<?php
include_once '../../user/dbConnect/db.php';
	$username=$_GET['id'];
	$sql="delete from admin where username=\"$username\"";
	if($username != 'root'){
		$result=mysql_query($sql);	
		if($result!=false)
		{?>
        <script>
		alert("ɾ���ɹ�");
 		window.location.href="listuser.php";
  		</script>		
		<?PHP }else
		{ ?>
			<script>
		alert("ɾ��ʧ��");
 		window.location.href="listuser.php";
  		</script>
		<?php }}
		else{?>
        <script>
		alert("���û�����ɾ��������");
 		window.location.href="listuser.php";
  		</script>
        <?php }?>



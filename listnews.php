<body background="../../��no.100000��15.jpg">
<center>
<table border=1>
	
	<tr align="center" height="50">
		<td width="50px">��� </td>	
		<td width="500px">���� </td>
		<td width="50px">�޸�</td>
		<td width="50px">ɾ��</td>
        <td width="80px">���� </td>
        <td width="50px">����� </td>
	</tr>	
	
<?php
	include_once("../../user/dbConnect/db.php");
	mysql_query("set names gbk");
		
	$sql="select * from news";
	$result=mysql_query($sql);
	$amount=mysql_num_rows($result);  //���ݿ��еļ�¼����
	
	$page=$_GET['page'];
	
	
	$pageSize=4;							//ҳ���С
	$totalPage=ceil($amount/$pageSize);   	//��ҳ��
	if(! isset($page))
	{
		$page=1;
	}
	$startCount=($page-1)*$pageSize;        //���ò�ѯ����ʼλ��
	$sql1="select * from news limit $startCount,$pageSize";
	$result1=mysql_query($sql1);
	
	while($array=mysql_fetch_array($result1))
	{
		echo
			"<tr align=\"center\" height=\"50px\">
				<td>$array[id]</td>
				<td>$array[title]</td>
				<td><a href='modifynews.php?id=$array[id]' style=\"text-decoration:none;color:#666\">�޸�</td>
				<td><a href='dealDeletenews.php?id=$array[id]' style=\"text-decoration:none;color:#666\">ɾ��</a></td>	
				<td>$array[newclass]</td>
				<td>$array[hits]</td>
			</tr>"	;
		
	}
	
	echo "<div style=\"height:150px\"></div>";
	if($page!=1)
	{
?>

<br/>
<a href="listnews.php?page=<?php echo $page-1; ?>" style="text-decoration:none;color:#666">��һҳ&nbsp;</a>

<?php
	}
	for($i=1;$i<=$totalPage;$i++)
	{  
	
?>
<a href="listnews.php?page=<?php echo $i;  ?>" style="text-decoration:none;color:#666"><?php echo $i,"   "; ?></a>		
<?php
	}
	if($page<$totalPage)
	{
?>
<a href="listnews.php?page=<?php echo $page+1; ?>" style="text-decoration:none;color:#666">&nbsp;��һҳ</a>
<?php
	}

?>
</table>
</center>
</body>
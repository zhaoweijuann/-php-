<body background="../../《no.100000》15.jpg">
<meta charset="utf-8">
<center>
<table border=1>
	
	<tr align="center" height="50">
		<td width="100px">评论序号</td>	
		<td width="100px">新闻序号</td>
        <td width="100px">用户名</td>
        <td width="350px">内容</td>
		<td width="50px">删除</td>
        <td width="200px">时间</td>

	</tr>	
	
<?php
	include_once("../user/dbConnect/db.php");
	
		
	$sql="select * from review";
	$result=mysql_query($sql);
	$amount=mysql_num_rows($result);  //数据库中的记录总数
	
	$page=$_GET['page'];
	
	
	$pageSize=4;							//页面大小
	$totalPage=ceil($amount/$pageSize);   	//总页数
	if(! isset($page))
	{
		$page=1;
	}
	$startCount=($page-1)*$pageSize;        //设置查询的起始位置
	$sql1="select * from review limit $startCount,$pageSize";
	$result1=mysql_query($sql1);
	
	while($array=mysql_fetch_array($result1))
	{
		echo
			"<tr align=\"center\" height=\"50px\">
				<td>$array[review_id]</td>
				<td>$array[id]</td>
				<td>$array[userna]</td>
				<td>$array[content]</td>
				<td><a href='dealdereview.php?id=$array[review_id]' style=\"text-decoration:none;color:#666\">删除</a></td>	
		
				<td>$array[putime]</td>
			</tr>"	;
		
	}
	
	echo "<div style=\"height:150px\"></div>";
	if($page!=1)
	{
?>

<br/>
<a href="listreview.php?page=<?php echo $page-1; ?>" style="text-decoration:none;color:#666">上一页&nbsp;</a>

<?php
	}
	for($i=1;$i<=$totalPage;$i++)
	{  
	
?>
<a href="listreview.php?page=<?php echo $i;  ?>" style="text-decoration:none;color:#666"><?php echo $i,"   "; ?></a>		
<?php
	}
	if($page<$totalPage)
	{
?>
<a href="listreview.php?page=<?php echo $page+1; ?>" style="text-decoration:none;color:#666">&nbsp;下一页</a>
<?php
	}

?>
</table>
</center>
</body>
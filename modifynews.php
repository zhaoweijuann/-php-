<?php
	include_once '../../user/dbConnect/db.php';
	mysql_query("set names gbk");
	$id=$_GET['id'];
	//echo $id;
	$sql="select * from news where id=$id";
	
	$result=mysql_query($sql);
	
	$array=mysql_fetch_array($result);
	$title=$array['title'];
	$content=$array['content'];
	$id=$array['id'];
	$adduser=$array['adduser'];
	$class=$array['newclass'];
	

?>
<html>
	<head><title>�޸�����</title></head>	
	<body>
		<center>
        	<div style="height:10px"></div>
			<h2>�޸�����</h2>
			<form action="dealModifynews.php?id=<?php echo $id; ?>" method="post">
            <div style="height:10px"></div>
			����<br/>
            <div style="height:10px"></div>
		    <input type="text" name="title" value="<?php echo $title;  ?>"><br/>
            <div style="height:10px"></div>
            <select name="class" name="<?php echo $class;?>">
                <option>��������</option>
                <option>��������</option>
                <option>��������</option>
                <option>��������</option>
                <option>У԰����</option>
                <option>��������</option>
                </select>
                <br/>
             <div style="height:10px"></div>
			����<br/>
            <div style="height:10px"></div>
			<textarea name="content" cols ="70" rows = "25" ><?php echo $content; ?></textarea><br/>
            ͼƬ<br/>
            &emsp;&emsp;&emsp;&emsp;<input name="pic" type="file" >
            <div style="height:10px"></div>
            ����<br/>
            <input type="text" name="adduser" value="<?php echo $adduser;  ?>"><br/>
            <div style="height:10px"></div>
            <div style="height:10px"></div>
			<input type="submit" value="�޸�">
			</form>	
								
			</center>	
	
	</body>

</html>

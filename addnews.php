<?php

include_once '../../user/dbConnect/db.php';
?>
<html>

	<head><title>�������</title></head>	
	<body background="../../��no.100000��15.jpg">
		<center>
			<h2>�������</h2>
			<form action="dealAddnews.php" method="post" enctype="multipart/form-data">
				����<br/>
				<input type="text" name="title"><br/>
                ���(0-999999)<br/>
                <input type="text" name="id"><br/>
                ����<br/>
                <select name="class">
                <option>��������</option>
                <option>��������</option>
                <option>��������</option>
                <option>��������</option>
                <option>У԰����</option>
                <option>��������</option>
                </select><br/>
				����<br/>
				<textarea name="content" cols ="70" rows = "25"></textarea><br/>
                ͼƬ<br/>
                &emsp;&emsp;&emsp;&emsp;<input name="pic" type="file" >
                <br/>
                ����<br/>
                <input type="text" name="adduser"><br/>
				<input type="submit" value="�ύ">
				
				
			</form>	
			
			
		</center>	
		
		
		
	</body>
	
	
</html>
<script>
 function getFullPath(obj)
        {
            if(obj)
            {
                //ie
                if (window.navigator.userAgent.indexOf("MSIE")>=1)
                {
                    obj.select();
                    return document.selection.createRange().text;
                }
                //firefox
                else if(window.navigator.userAgent.indexOf("Firefox")>=1)
                {
                    if(obj.files)
                    {
                        return obj.files.item(0).getAsDataURL();
                    }
                    return obj.value;
                }
                return obj.value;
            }
        } 
</script>

<!--<script>
function previewFile(){
	var preview = document.querySelector('img');
	var file = document.querySelector('input[typefile]'.files[0]);
	var reader = new FileReader();
	reader.onload = function(){
		preview.src = reader.result;
		}
		if(file){
			reader.readAsDataURL(file);
			}else{
				preview.src="";
				}
	}
</script>
-->

<html>
<body background="../../��no.100000��15.jpg">
	<center>
	<b><h2>��ӹ���Ա</h2></b><br/>
    <div>
		<form action="dealAdduser.php" method="post">
        <table>
        	<tr>
            	<td>�û���</td>
            	<td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
            	<td>����</td>
            	<td><input type="password" name="password"  id="password"></td>
            </tr>
            <tr>
            	<td>������һ������</td>
            	<td><input type="password" name="password1" id="password1"></td>
            </tr>
        </table>
		</br>
		<input type="submit" value="ע��" onClick=" return check1()">
				
		</form>
	</div>
		</center>
	<script language="javascript" type="text/javascript">
				
		function check1()
		{
			var user=document.getElementById("username").value;
			var pass=document.getElementById("password").value;
			var pass1=document.getElementById("password1").value;
			if(user=="" || pass=="")
			{
				alert("�û��������벻��Ϊ��");
				return false;
			}
	
			if(pass.length<4)
			{
				alert("���벻������4λ");
				return false;
				
			}
			if(pass!=pass1)
			{
				alert("������������벻һ��������������");
				return false;
			}
			
		return true;
		}
		
	</script>
    </body>
</html>
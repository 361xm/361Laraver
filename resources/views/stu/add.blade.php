<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
</head>
<body>

	@include("stu.menu");
	<form action="/stu" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		姓名: <input type="text" name="name"><br><br>
		年龄: <input type="text" name="age"><br><br>
		性别: <input type="radio" name="sex" value="1" checked>男
		 	  <input type="radio" name="sex" value="0">女
				<br><br>
		班级: <input type="text" name="classid"><br><br>
		 <input type="submit" value="提交">  <input type="reset">


	</form>
	

</body>
</html>
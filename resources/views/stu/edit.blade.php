<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
</head>
<body>

	@include("stu.menu");
	<form action="/stu/{{ $vo->id }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="put">
		姓名: <input type="text" name="name" value="{{ $vo->name }}"><br><br>
		年龄: <input type="text" name="age" value="{{ $vo->age }}"><br><br>
		性别: <input type="radio" name="sex" value="1" {{ ($vo->sex==1)? "checked" : "" }}>男
		 	  <input type="radio" name="sex" value="0" {{ ($vo->sex==0)? "checked" : "" }}>女
				<br><br>
		班级: <input type="text" name="classid" value="{{ $vo->classid }}"><br><br>
		 <input type="submit" value="提交">  <input type="reset">


	</form>
	

</body>
</html>
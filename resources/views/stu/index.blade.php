<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
	<script type="text/javascript">
		function doDel(id){
			if(confirm('确定删除吗?')){
				// alert(id);
				//1 获得form表单节点对象
				var myform = document.myform;
				//2 设置提交方式 
				myform.action = "/stu/"+id;//提交地址 
				myform.submit();//执行表单提交
			}
		}

	</script>
</head>
<body>
	@include("stu.menu");
	<form action="" method="post" name="myform">
		<input type="hidden" name="_token" value="{{ csrf_token()}}">
		<input type="hidden" name="_method" value="delete">
	</form>
	<table width="600px" border='1px'>
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>班级</th>
			<th>操作</th>
		</tr>
		@foreach($list as $stu)
			<tr>
				<td>{{ $stu->id }}</td>
				<td>{{ $stu->name }}</td>
				<td>{{ $stu->age }}</td>
				<td>{{ ($stu->sex==1) ? "男":"女" }}</td>
				<td>{{ $stu->classid }}</td>
				<td>
					<a href="javascript:doDel({{ $stu->id }});">删除</a>
					<a href="/stu/{{ $stu->id }}/edit">修改</a>
				</td>
			</tr>
		@endforeach
	</table>
	
</body>
</html>
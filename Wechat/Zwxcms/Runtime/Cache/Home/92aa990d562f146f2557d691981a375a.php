<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title>XXX会议签到</title>
  <script type="text/javascript" src="./Zwxcms/Home/Tpl/Common/js/jquery.min.js"></script>
 </head>
 <body style="min-width:320px;max-width:640px;">
 <h1>测试会议内容</h1>

 <span class="">您好，<?php echo ($openid); ?></span>
  <form method="post" action="">
  <table>
	<tr><td><input type="text" name="signnum"></td></tr>
	<tr><td>
	    <label><input name="abc" type="checkbox" value="1"/>苹果 </label> 
		<label><input name="abc" type="checkbox" value="2"/>桃子 </label> 
		<label><input name="abc" type="checkbox" value="3"/>香蕉 </label> 
		<label><input name="abc" type="checkbox" value="4"/>梨 </label>
	</td></tr>
  </table>	 
  </form>
 </body>
 <script>
 var abdData=[];
	$(function(){
		 $("input[name='abc']").click(function(){
			 if($(this).attr('checked')){
				abdData.push($(this).val());
				console.log($(this).val());
			 }else{
			//	$.each(abdData,function(index,item){
				//	if(item==9){
					//	abdData.splice(index,1);

					//}
				//});
			 }
			console.log(abdData);
		 });
	})
</script>
</html>
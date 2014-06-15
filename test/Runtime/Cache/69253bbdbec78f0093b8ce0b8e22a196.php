<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Select Data</title>
</head>
<body>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>--<?php echo ($vo["nickname"]); ?>--<?php echo ($vo["email"]); ?>  角色:<?php $Role=M("role_user"); $r = $Role->find($vo['id']); echo $r['role_id']; echo '--'.$vo['id'] ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo ($spider); ?>
</body>
</html>
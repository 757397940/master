<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\lianshou\public/../application/admin\view\index\rectify_view.html";i:1542594327;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form   action="<?php echo url('index/rectify'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
        年级：<input type="text" name="grade"  value="<?php echo $info['grade']; ?>"/><br/>
        班级：<input type="text" name="class"  value="<?php echo $info['class']; ?>"/><br/>
        姓名：<input type="text" name="name" value="<?php echo $info['name']; ?>"/><br/>
        性别：<input type="text"  name="sex"  value="<?php echo $info['sex']; ?>"/><br/>
        年龄：<input type="text"  name="age"  value="<?php echo $info['age']; ?>"/><br/>
        <input type="submit" />
    </form>
</body>
</html>

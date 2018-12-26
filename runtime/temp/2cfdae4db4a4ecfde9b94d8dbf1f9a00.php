<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\lianshou\public/../application/admin\view\index\add.html";i:1542594794;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form   action="<?php echo url('index/addCheck'); ?>" method="post">
        年级：<input type="text" name="grade" /><br/>
        班级：<input type="text" name="class"  /><br/>
        姓名：<input type="text" name="name" /><br/>
        性别：<input type="text"  name="sex"  /><br/>
        年龄：<input type="text"  name="age"  /><br/>
        <input type="submit"/>
    </form>
</body>
</html>

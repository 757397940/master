<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\lianshou\public/../application/admin\view\index\index.html";i:1542615031;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form  action="<?php echo url('index/index'); ?>" method="post">
        年级<input type="text"  name="grade"  value="<?php echo isset($where['grade'])?$where['grade']:null; ?>">
        班级<input type="text"  name="class"  value="<?php echo isset($where['class'])?$where['class']:null; ?>">
        名称<input type="text"  name="name"   value="<?php echo isset($where['name'])?$where['name']:null; ?>">
        性别<input type="text"  name="sex"    value="<?php echo isset($where['sex'])?$where['sex']:null; ?>">
        年龄<input type="text"  name="age"    value="<?php echo isset($where['age'])?$where['age']:null; ?>"> <input  type="submit">
    </form>

    <table  border="1">
        <tr>
            <th>年级</th>
            <th>班级</th>
            <th>学生名称</th>
            <th>性别</th>
            <th>年龄</th>
        </tr>
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $vo['grade']; ?></td>
            <td><?php echo $vo['class']; ?></td>
            <td><?php echo $vo['name']; ?></td>
            <td><?php echo $vo['sex']; ?></td>
            <td><?php echo $vo['age']; ?></td>
            <td><a href="<?php echo url('index/rectifyView'); ?>?id=<?php echo $vo['id']; ?>"> <button type="button"   >修改</button></a></td>
            <td><a href="<?php echo url('index/delete'); ?>?id=<?php echo $vo['id']; ?>"> <button type="button"    >删除</button></a></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <a href="<?php echo url('index/add'); ?>"><button  type="button"> 增加数据</button></a>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>添加分类</title>
    <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="name" value="">
      <select class="" name="pid" onchange="selectnext(this)">
        <option value="">父级分类</option>
        <?php if(is_array($classes)): foreach($classes as $key=>$c): ?><option value="<?php echo ($c["id"]); ?>"><?php echo ($c["name"]); ?></option><?php endforeach; endif; ?>
      </select>
      <input type="submit" value="保存">
    </form>
    <script type="text/javascript">
    function selectnext(obj){
      var id = $(obj).val();
      var url = "<?php echo U('Home/Index/ajax');?>";
      var data = {'id':id};
      $.post(url,data,function(d){

      });

    }
    </script>
  </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Document</title>
</head>
<body>
<input type="button" value="111" onclick="his()">
</body>
<script type="text/javascript">
function his(){
  pageNow = 1;
  newURL = "?page=" + pageNow;
  history.pushState(null, "", newURL);
  window.location.href="http://baidu.com";
}
</script>
</html>
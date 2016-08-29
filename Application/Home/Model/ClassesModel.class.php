<?php
namespace Home\Model;
use Think\Model;
class ClassesModel extends Model {
  protected $trueTableName = 'nested_category';

  function deep(){
    $this->field('node.name, (COUNT(parent.name) - 1) AS depth')->alias("node")->join("nested_category as parent")->where("node.lft BETWEEN parent.lft AND parent.rgt ")->group("node.name")->order("node.lft");
    $list = $this->select();
    return $list;
  }

  function lit(){
    $this->field("name")->where("lft > 1 AND rgt < 20");
    $list = $this->cache('cache_name')->select();
    return $list;
  }
}
?>

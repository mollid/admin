<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
      $this->display();
    }

    public function table(){
        $field = array(
            0=>array("name","名称"),
            1=>array("age","年龄"),
            2=>array("place","地方"),
        );
        if(IS_POST){
            $start = I("start",1);
            $length = I("length",10);
            $columns = I("post.columns");
            $order = I("post.order");

            $order_by = $field[$order[0]['column']][0] . " " .$order[0]['dir'];


            foreach($columns as $k=>$v){
                if($v['search']['value']){
                    $where[$v['data']] = array("like","%".$v['search']['value']."%");
                }
            }

            $arr['start'] = $start;
            $arr['data'] = M("member")->where($where)->order($order_by)->limit($start,$length)->select();
            $arr['recordsTotal'] = M("member")->count();
            $arr['recordsFiltered'] = M("member")->where($where)->count();
            $this->ajaxReturn($arr);
        }
        $this->assign("field",$field);
        $this->display();
    }

    function data(){
        exit;
        for($i=0;$i<100;$i++){
            $data = array(
                    "name"=>"my_name".$i,
                    "age"=>15+$i,
                    "place"=>"shenzheng",

            );
            M("member")->add($data);
        }
    }



}

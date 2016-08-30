<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
      $this->display();
    }

    public function table(){
        $field = array(
            1=>array("name","名称"),
            2=>array("age","年龄"),
            3=>array("place","地方"),
        );
        if(IS_POST){
            $start = I("start",1);
            $length = I("length",10);
            $columns = I("post.columns");
            $order = I("post.order");

            if($order[0]['column'] > 0){
                $order_by = $field[$order[0]['column']][0] . " " .$order[0]['dir'];
            }

            foreach($columns as $k=>$v){
                if($v['search']['value']){
                    $where[$v['data']] = array("like","%".$v['search']['value']."%");
                }
            }
            $arr['start'] = $start;
            $db = M("member")->where($where)->limit($start,$length);
            if($order_by){
                $db->order($order_by);
            }
            $arr['data'] = $db->select();
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

    function del(){
        Vendor('SimAdmin.Curd');
        $Simadmin = new \Curd();
        $field = array(
            1=>array("name"=>"名称"),
            2=>array("age"=>"年龄"),
            3=>array("place"=>"地方"),
        );
        $arr = $Simadmin->setField($field);
        dump($arr);
    }

    function modals(){
        $this->display();
    }

    function modals_tpl(){
        $this->display();
    }


}

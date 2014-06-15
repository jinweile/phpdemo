<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function index(){
		$User = D("User");
    	$list = $User->select();
    	foreach ($list as $value){
    		foreach ($value as $k => $v)
    			echo  $k."--".$v."<br/>";
    		echo "<br/>";
    	}
    }
    
    public  function show(){
    	echo "asdfdsfa";
    }
}
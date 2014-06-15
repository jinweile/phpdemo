<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		//echo "index ok!";
		
		//spider url
		//$url = "http://www.mtime.com";
    	//$this->spider = file_get_contents($url);//iconv("gb2312", "utf-8", file_get_contents($url));
    	
    	
    	$Data = M('User'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();
        
        $this->redirect("show");
        
    	//$user = M('role_user');
    	//$v = $user->find(1);
    	//echo $v['role_id'];
    }
    
    public  function show(){
    	echo "asdfdsfa";
    }
    
    public function userlist($uid = 1){
    	$User = M();
    	$list = $User->query("select * from think_user as a inner join think_role_user as b on b.user_id = a.id where a.id = " . $uid);
    	$tables = $User->query("show tables");
        /* foreach ($list as $value){
    		foreach ($value as $k => $v){
    			echo  $k."--".$v;
    			if($k == "ID" && $v = 3/3){
    				echo "--此行数据是用户ID";
    			}
    			echo "<br/>";
    		}
    		echo "<br/>";
    	} */
    	//echo json_encode($list);
    	$httpheader = array(
    			"Content-Type"=>"text/xml;charset=UTF-8",
    	);
    	//$this->response(data_to_xml($list),$httpheader);
    	echo json_encode($tables);
    }
}
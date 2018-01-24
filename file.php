<?php 
    $filename="test.txt";
if (file_exists($filename)) {
    $time=time()-filemtime($filename);
    echo $time;
    echo "<br>";
    if($time>=10){
        $num=$_COOKIE['num']+1;
        setcookie("num",$num);
        file_put_contents($filename,"第".($_COOKIE['num']+1)."次修改文件夹");
        // echo "<br>";
        echo file_get_contents($filename);
    }else{
        echo file_get_contents($filename);
    }
    
}else{
    setcookie("num",0);
    file_put_contents($filename,"新建文件夹添加时间戳：".date("Y-m-d H:i:s"));
}
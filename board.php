$filename="github_m3-5.txt";
$name = $_POST["name"];
$text = $_POST["text"];
$first = $_POST['first'];
$password = $_POST["password"];//password用
$dpassword = $_POST["dpassword"];
$epassword =  $_POST["epassword"];
$editnum = $_POST["editnum"];//(編集の時に使う？)
$edit = $_POST['edit'];//(編集の時に使う？)
$deletenum = $_POST["deletenum"];
$delete = $_POST["delete"];
$second = $_POST["enumber"];//(編集の時に使う？)
$date = date("Y/m/d H:i:s");
$lines = file($filename,FILE_IGNORE_NEW_LINES);

//これも統合できないのかな？あってないを判断するとかできないのかな？
if (isset($name,$text,$password))&&(empty($second)){
  echo "new post"."<br>":
  
  if($second){　//これは下でプログラムされた処理を認証している。。
    $fp = fopen($filename,"w");
    foreach($lines as $line){
      $slist =explode("<>",$line);
      if((int)$slist[0] == $second){
        //$strは、グローバル変数?
        $str = $slist[0]."<>".$name."<>".$text."<>".$date."<>".$password."<>";
        local $str;
        fwrite($fp,$str."\n");

      }else{
        $str = $slist[0]."<>".$slist[1]."<>".$slist[2]."<>".$slist[3]."<>".$slist[4]."<>";//追加した
        fwrite($fp,$str."\n");
      }
    }
  }
}elseif(iseet($deletenum)){
  if(file_exists($filename){
    $lines = file($filename,FILE_IGNORE_NEW_LINES);
    //fileを上書きモードで開く
    $fp = fopen($filename,"w");
    //配列を行で取り出して変数に代入
    foreach ($lines as $line){
    //行を要素に分解する
     $dellist = explode("<>",$line);
    }
  }
}


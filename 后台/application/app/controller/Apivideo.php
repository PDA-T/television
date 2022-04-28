<?php

namespace app\app\controller; 
use app\XDeode; 
use think\Db;
use think\Controller; 
class Apivideo extends Controller 
{


	public function sdianshiju(){

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			$page=$_GET['page'];

			$page1=$_GET['page']+=1;

			$page2=$_GET['page']-1;

			$pageurl = $host.'/?page='.$page1;

			$pageurl1 = $host.'/?page='.$page2;

		//	$info=file_get_contents('http://www.360kan.com/dianshi/listajax?rank=rankhot&cat=all&year=all&area=all&act=all&pageno='.$page1);
			$info=file_get_contents('http://one.letuos.com');

		//	$info=json_decode($info,true);

			$yuming="http://www.360kan.com";



			$array=$info['data']['list'];
		//	echo json_encode($array, JSON_UNESCAPED_UNICODE);
			echo $info;

	}

	public function sdianshijux(){

		

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			//$page=$_GET['page'];

			$page1=$_GET['nextrow1']+=1;

			//$page2=$_GET['page']-1;

			//$pageurl = $host.'/?page='.$page1;

			//$pageurl1 = $host.'/?page='.$page2;

			$info=file_get_contents('http://www.360kan.com/dianshi/listajax?rank=rankhot&cat=all&year=all&area=all&act=all&pageno='.$page1);

			$info=json_decode($info,true);

			$yuming="http://www.360kan.com";



			$array=$info['data']['list'];



			echo json_encode($array, JSON_UNESCAPED_UNICODE);

	}

	public function sdianying(){

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			$page=$_GET['page'];

			$page1=$_GET['page']+=1;

			$page2=$_GET['page']-1;

			$pageurl = $host.'/?page='.$page1;

			$pageurl1 = $host.'/?page='.$page2;

			$info=file_get_contents('http://www.360kan.com/dianying/listajax?rank=rankhot&cat=all&year=all&area=all&act=all&pageno='.$page1);

			$info=json_decode($info,true);

			$yuming="http://www.360kan.com";



			$array=$info['data']['list'];



			echo json_encode($array, JSON_UNESCAPED_UNICODE);

		

	}

	public function sdianyingx(){

		

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			//$page=$_GET['page'];

			$page1=$_GET['nextrow']+=1;

			//$page2=$_GET['page']-1;

			//$pageurl = $host.'/?page='.$page1;

			//$pageurl1 = $host.'/?page='.$page2;

			$info=file_get_contents('http://www.360kan.com/dianying/listajax?rank=rankhot&cat=all&year=all&area=all&act=all&pageno='.$page1);

			$info=json_decode($info,true);

			$yuming="http://www.360kan.com";



			$array=$info['data']['list'];



			echo json_encode($array, JSON_UNESCAPED_UNICODE);

	}

	public function szongyi(){

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			$page=$_GET['page'];

			$page1=$_GET['page']+=1;

			$page2=$_GET['page']-1;

			$pageurl = $host.'/?page='.$page1;

			$pageurl1 = $host.'/?page='.$page2;

			$info=file_get_contents('http://www.360kan.com/zongyi/listajax?rank=rankhot&cat=all&area=all&act=all&pageno='.$page1);

			$info=json_decode($info,true);

			$yuming="http://www.360kan.com";

		

			$array=$info['data']['list'];



			echo json_encode($array, JSON_UNESCAPED_UNICODE);

	}

	public function szongyix(){

		

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			//$page=$_GET['page'];

			$page1=$_GET['nextrow2']+=1;

			//$page2=$_GET['page']-1;

			//$pageurl = $host.'/?page='.$page1;

			//$pageurl1 = $host.'/?page='.$page2;

			$info=file_get_contents('http://www.360kan.com/zongyi/listajax?rank=rankhot&cat=all&area=all&act=all&pageno='.$page1);

			$info=json_decode($info,true);

			$yuming="http://www.360kan.com";



			$array=$info['data']['list'];



			echo json_encode($array, JSON_UNESCAPED_UNICODE);

	}

	public function sdongman(){

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			$page=$_GET['page'];

			$page1=$_GET['page']+=1;

			$page2=$_GET['page']-1;

			$pageurl = $host.'/?page='.$page1;

			$pageurl1 = $host.'/?page='.$page2;

			$info=file_get_contents('http://www.360kan.com/dongman/listajax?cat=all&year=all&area=all&rank=rankhot&pageno='.$page1);

			$info=json_decode($info,true);

			$yuming="http://www.360kan.com";

			$array=$info['data']['list'];

			echo json_encode($array, JSON_UNESCAPED_UNICODE);

		

	}

	public function sdongmanx(){

		

		error_reporting(0);

			header('Content-type:text/html;charset=utf-8');

			//$page=$_GET['page'];

			$page1=$_GET['nextrow3']+=1;

			//$page2=$_GET['page']-1;

			//$pageurl = $host.'/?page='.$page1;

			//$pageurl1 = $host.'/?page='.$page2;

			$info=file_get_contents('http://www.360kan.com/dongman/listajax?cat=all&year=all&area=all&rank=rankhot&pageno='.$page1);

			$info=json_decode($info,true);

			$yuming="http://www.360kan.com";



			$array=$info['data']['list'];



			echo json_encode($array, JSON_UNESCAPED_UNICODE);

	}

	public function bofang(){

		error_reporting(0);







				$yuming='http://www.360kan.com';



				$player = $yuming.$_GET['name'];



				$tvinfo = file_get_contents($player);



				$tvzz='#<div (class="site-wrap")?\s*id="js-site-wrap">[\s\S]+?(class="num-tab-main\s*g-clear\s*js-tab")?\s*(style="display:none;")?>[\s\S]+?<a data-num="(.*?)"\s*data-daochu="to=(.*?)" href="(.*?)">[\s\S]+?</div>#';



				$tvzz1 = '#<a data-num="(.*?)"\s*data-daochu="to=(.*?)" href="(.*?)">#';



				$dyzz= '#<span class="txt">站点排序 ：</span>[\s\S]+?<div style=\' visibility:hidden\'#';



				$bflist = '#<a data-daochu=(.*?) class="btn js-site ea-site (.*?)" href="(.*?)">(.*?)</a>#';



				$jianjie = '#style="display:none;"><span>简介[\s\S]+?js-close btn#';



				$jianjie1 = '#</span>(.*?)<a href#';



				$biaoti = '#<h1>(.*?)</h1>#';



				$pan = '#<h2 class="title g-clear">(.*?)</h2>#';



				$pan1 = '#<div id="js-juji" class="juji g-clear p-mod"(.*?)data-site#';



				$str= $_GET['name'];



				$arr = explode('/', $str);



				$mkcmsid=str_replace('.html', '', "$arr[2]");



				$mkcmstyle=$arr[1];



				$laiyuan = '#{"ensite":"(.*?)","cnsite":"(.*?)","vip":(.*?)}#';



				$daoyan = '#<p class="ite(.*?)"><span>导演(.*?)</span>(.*?)</p>#';



				$leixing = '#<p class="ite(.*?)</span>(.*?)</a>#';



				$niandai = '#<p class="ite(.*?)"><span>年代(.*?)</span>(.*?)</p>#';



				$diqu = '#<p class="ite(.*?)"><span>地区(.*?)</span>(.*?)</p>#';



				$zhuyan = '#<p class="item item-actor">(.*?)</p>#';



				preg_match_all($jianjie, $tvinfo, $jjarr1);



				$jjarr1 = implode($glue, $jjarr1[0]);



				$jjarr1 = str_replace(PHP_EOL, '', $jjarr1);



				preg_match_all($jianjie1, $jjarr1, $jjarr);



				preg_match_all($tvzz, $tvinfo, $tvarr);



				preg_match_all($dyzz, $tvinfo, $dyarr);



				preg_match_all($pan, $tvinfo, $ptvarr);



				preg_match_all($pan1, $tvinfo, $ptvarr1);



				preg_match_all($dyzz, $tvinfo, $tvlist);



				preg_match_all($biaoti, $tvinfo, $btarr);



				$mvsrc = implode($glue, $tvlist[0]);



				preg_match_all($daoyan, $tvinfo, $daoyano);



				preg_match_all($leixing, $tvinfo, $leixingo);



				preg_match_all($niandai, $tvinfo, $niandaio);



				preg_match_all($diqu, $tvinfo, $diquo);



				preg_match_all($zhuyan, $tvinfo, $zhuyano);



				preg_match_all($bflist, $mvsrc, $dyarr1);



				//剧集动漫多来源判断



				preg_match_all($laiyuan, $tvinfo, $laiyuanarr);



				$yuan=$laiyuanarr[1];//来源英文



				$yuanname=$laiyuanarr[2];//来源中文



				//电影链接



				$dysrc=$dyarr1[0];



				$c=$dyarr1[3];//电影的播放链接



				$d=$dyarr1[4];//电影来源



				$e=$daoyano[3][0];



				$f=$leixingo[2][0];



				$g=$niandaio[3][0];



				$h=$diquo[3][0];



				$hi=$zhuyano[1][0];



				$jian = $jjarr[1][0];//简介



				$timu = $btarr[1][0];//标题



				$panduan = $ptvarr[1][0];



				$panduan1 = $ptvarr1[1][0];



				$zyv="#<em class='top-new'>\s*(monitor-desc=\"收起往期更多\">)?[\s\S]+?<div monitor-desc#";



				$qi="#<span class='w-newfigure-hint'>(.*?)</span>#";



				$zyimg="#data-src='(.*?)' alt='(.*?)'#";



				preg_match_all($zyv, $tvinfo,$zyvarr);



				$zylist = implode($glue, $zyvarr[0]);



				$ztlizz="#<a href='(.*?)' data-daochu=to=(.*?) class='js-link'><div class='w-newfigure-imglink g-playicon js-playicon'>#";



				preg_match_all($ztlizz, $zylist,$zyliarr);



				preg_match_all($qi, $zylist,$qiarr);



				preg_match_all($zyimg, $zylist,$imgarr);



				$zyvi=$zyliarr[1];



				$noqi=$qiarr[1];



				$zypic=$imgarr[1];



				$zyname=$imgarr[2];



				$zcf = implode($tvarr[0]);



				preg_match_all($tvzz1, $zcf, $tvar1);



				$b = $tvar1[3];//1



				$much = 1;



				$mjk=$mkcms_mjk;



				$fen = '#<span class="s">(.*?)</span>#';



						preg_match_all($fen, $tvinfo, $fen1);



						$nian = '#<p class="item"><span>年代 ：</span>(.*?)</p>#';



						preg_match_all($nian, $tvinfo, $niandai);



						$di = '#<p class="item"><span>地区 ：</span>(.*?)</p>#';



						preg_match_all($di, $tvinfo, $diqu);



				$videoarray = array();



				for($i = 0;$i < count($yuan);$i++){



					 



					switch($yuan[$i]){



							case 'qiyi':



							 if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



								$url = "http://www.360kan.com/cover/switchsite?site=qiyi&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



									$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'爱奇艺',$list));



								break;



							case 'qq':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



									$url = "http://www.360kan.com/cover/switchsite?site=qq&id=".$mkcmsid."&category=".$category;



									$html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'腾讯',$list));



								break;		



							case 'pptv':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



						$url = "http://www.360kan.com/cover/switchsite?site=pptv&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'PPTV',$list));



								break;	



							case 'imgo':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



							$url = "http://www.360kan.com/cover/switchsite?site=imgo&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'芒果TV',$list));



								break;	



							case 'sohu':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



							$url = "http://www.360kan.com/cover/switchsite?site=sohu&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'搜狐',$list));



								break;		



							case 'youku':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



							$url = "http://www.360kan.com/cover/switchsite?site=youku&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'优酷',$list));



								break;



							case 'letv':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



								$url = "http://www.360kan.com/cover/switchsite?site=letv&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'乐视',$list));



								break;		



							case 'cctv':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



								$url = "http://www.360kan.com/cover/switchsite?site=cctv&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'CCTV',$list));



								break;



							case 'wasu':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



									$url = "http://www.360kan.com/cover/switchsite?site=wasu&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



							$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'华数TV',$list));



								break;				



							case 'fengxing':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



							$url = "http://www.360kan.com/cover/switchsite?site=fengxing&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



							



							$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'风行',$list));



								break;				



							



							case 'xunlei':



							if ($mkcmstyle==tv){



								  $category="2";



								  }



								  else{



								 $category="4";



									  }



								$url = "http://www.360kan.com/cover/switchsite?site=xunlei&id=".$mkcmsid."&category=".$category;



								 $html = file_get_contents($url);



								  $data=json_decode($html, ture);



								  $data=implode("",$data);



								   $tvzzx = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:block;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?<\/div>\r<\/div>#";



								   $tvzzy = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';



								   preg_match_all($tvzzx, $data, $tvarry);



								   $zcf = implode($glue, $tvarry[0]);



								   preg_match_all($tvzzy,  $zcf, $tvarry);



								   //print_r($tvarry);



								  $b = $tvarry[3];



								$playDataarray3=$b;	



									$playDataarray3=implode("$$",$playDataarray3);



									$totalLink=count(explode("$$",$playDataarray3));  



									$lianjie=$b;



										for ($x=1; $x<=$totalLink; $x++) {



											 $a = "第 $x 集";



											$vv=$x-1;



											$c=$lianjie[$vv];



											$list[$x]=array("shuzi"=>$a,"lianjie"=>$c);



											



										}



										array_push($videoarray,array('name'=>'看看',$list));



								break;				



						}



					



					



				}







				for ($p=1; $p <= count($noqi); $p++) {



				$vv=$p-1;	



				$a=$noqi[$vv];







				$c=$zyvi[$vv];	



				$b=$zyname[$vv];



				$listz[$vv]=array("qishu"=>$a,"lianjie"=>$c,'nei'=>$b);



					



				}







				$data=Array();



				$data['arr']=$videoarray;



				$data['name']=$timu;



				$data['jianjie']=$jian;



				$data['fen']=$fen1[0][0];



				$data['niandai']=$niandai[1][0];



				$data['diqu']=$diqu[1][0];



				$data['zongyi']=$listz;



				echo json_encode($data, JSON_UNESCAPED_UNICODE);

	}

	public function dianying(){

		error_reporting(0);

		$player = $_GET['name'];

		$tvinfo = file_get_contents($player);

		$tvzz = '#<div class="num-tab-main g-clear\s*js-tab"\s*(style="display:none;")?>[\s\S]+?<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">[\s\S]+?</div>#';

		//$tvzz1 = "#<a href='(.*?)' data-daochu=to=imgo class='js-link'><div class='w-newfigure-imglink g-playicon js-playicon'> <img src='(.*?)' data-src='(.*?)' alt='(.*?)'  /><span class='w-newfigure-hint'>(.*?)</span>#";

		$tvzz1 = '#<a data-num="(.*?)" data-daochu="to=(.*?)" href="(.*?)">#';

		//$bflist = "#<a href='(.*?)' data-daochu=to=imgo class='js-link'#";

		$bflist = '#<a data-daochu(.*?) href="(.*?)" class="js-site-btn btn btn-play">#';

		$jianjie = '/<p class="item-desc">(.*?)<\/p>/is';

		$biaoti = '#<h1>(.*?)</h1>#';

		$pan = '#<h2 class="title g-clear">(.*?)</h2>#';

		$pan1 = '#<h2 class="g-clear">(.*?)</h2>#';

		$zytimu = '#<ul class="list w-newfigure-list g-clear">

						(.*?)

					</ul>#';

					

					$dyzz= '#<span class="txt">站点排序 ：</span>[\s\S]+?<div style=\' visibility:hidden\'#';



$bflista = '#<a data-daochu=(.*?) class="btn js-site ea-site (.*?)" href="(.*?)">(.*?)</a>#';

					preg_match_all($dyzz, $tvinfo, $tvlist);

					$mvsrc = implode($glue, $tvlist[0]);

				preg_match_all($bflista, $mvsrc, $dyarr1);	

					

					

					

					

					

		preg_match_all($jianjie, $tvinfo, $jjarr);

		preg_match_all($tvzz, $tvinfo, $tvarr);



		preg_match_all($pan, $tvinfo, $ptvarr);

		preg_match_all($pan1, $tvinfo, $ptvarr1);

		preg_match_all($bflist, $tvinfo, $tvlist);



		preg_match_all($biaoti, $tvinfo, $btarr);

		preg_match_all($zytimu, $tvinfo, $zybtarr);

		$nian = '#<p class="item"><span>年代 ：</span>(.*?)</p>#';

		preg_match_all($nian, $tvinfo, $niandai);

		$di = '#<p class="item"><span>地区 ：</span>(.*?)</p>#';

		preg_match_all($di, $tvinfo, $diqu);

	

		$fen = '#<span class="s">(.*?)</span>#';

		preg_match_all($fen, $tvinfo, $fen1);

		$mvsrc = $tvlist[2][0];



		$data['jianjie'] = $jjarr[1][0];

		$data['name'] = $btarr[1][0];

		$data['niandai']=$niandai[1][0];

		$data['diqu']=$diqu[1][0];

		$data['daoyan']=$daoyan[2];

		$data['fen']=$fen1[0][0];

		$panduan = $ptvarr[1][0];

		$panduan1 = $ptvarr1[1][0];







		$zybiaoti = $zybtarr[3][0];

		$mvsrc1 = str_replace("http://cps.youku.com/redirect.html?id=0000028f&url=", "", "$mvsrc");

		

		$data['video']=$mvsrc;

	

		

		$videoarray = array();

		for($i = 0;$i < count($dyarr1[1]);$i++){

			

			switch($dyarr1[1][$i]){

			case '"to=qiyi"':

			

				array_push($videoarray,array('name'=>'爱奇艺','url'=>array($dyarr1[3][$i])));

				break;

			case '"to=qq"':

				

				array_push($videoarray,array('name'=>'腾讯','url'=>array($dyarr1[3][$i])));

				break;		

			case '"to=pptv"':

		

				array_push($videoarray,array('name'=>'PPTV','url'=>array($dyarr1[3][$i])));

				break;	

			case '"to=imgo"':

			

				array_push($videoarray,array('name'=>'芒果TV','url'=>array($dyarr1[3][$i])));

				break;	

			case '"to=sohu"':

			

				array_push($videoarray,array('name'=>'搜狐','url'=>array($dyarr1[3][$i])));

				break;		

			case '"to=youku"':

			

				array_push($videoarray,array('name'=>'优酷','url'=>array($dyarr1[3][$i])));

				break;

			case '"to=letv"':

			

				array_push($videoarray,array('name'=>'乐视','url'=>array($dyarr1[3][$i])));

				break;		

			case '"to=cctv"':

			

				array_push($videoarray,array('name'=>'CCTV','url'=>array($dyarr1[3][$i])));

				break;

			case '"to=wasu"':

		

				array_push($videoarray,array('name'=>'华数TV','url'=>array($dyarr1[3][$i])));

				break;				

			case '"to=fengxing"':

			array_push($videoarray,array('name'=>'风行','url'=>array($dyarr1[3][$i])));

			

				break;				

			

			case '"to=xunlei"':

				

				array_push($videoarray,array('name'=>'看看','url'=>array($dyarr1[3][$i])));

				break;				

		}

			

			

			

			

			

		}



		//$video = urldecode(json_encode($videoarray));

	

		$data['arr']=$videoarray;	

				

		echo json_encode($data, JSON_UNESCAPED_UNICODE);

		

	}

}
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAOgAAABid5gP/cjG78Mv2w1yEX62mMUcOl//cZXozt7zFZC2ltB7hWVq/M4jifufhiH1J0DhVVoMDYtrOqOV5v/8tX1SFNC7PmwWOfymbRqveuvY2N5cpBA4zFzEgnau7WUHuDeXsolvcDrGGeigta46YD4eQ7ZY0hzmD6yEpxSvpCi+d/1ZH36tRq7cbosXY5U8J4rbOmL0ajbNimUbPUFjcuI2a04XEEPWmLH4Rot8lMSvQbD4YCqMuCTFkdMWLNpCYwaP0EkI3AqellhIOYEe/6YEEX0qn6yAayRnCIdm0a9PkrtDsePyRguVUQAAAOgAAADlab0lWvn/2KJvhISNCTT0IHS4V4cvsCIPUm6cHt6qEXdDql6skwZAlTpMketoAAP2iCG8PRJjGoGWvJHaUa+96mnlNr97yb0JzgTQxMuMP26OrYXFqcr01Ys431oTQZqfo0FSPWcMZg8oF6cAC2I6JA0OM595mO+gHf2RcEXYkosuMsle9v9kSLjGV4aE3u6YSLD/w5w/xqnzz5JWzV1DET/3atlX7oCX5+bBnjI+3Ar/xrajCke3neT6XhLpqwCR6k3BokS7EfRnIBuMzQ53VzZ5FkHSztCw0a4l0whCzqCVJPCNbDGgUgAAAOgAAACGYf1faOK2oh2UPnlSVVp06nEuxw3m1AgEtY4vq9k5ooD9ah4o2cLNQ5huozJccIvwWUhZBk4S0Z/BIH32MDafcLkChFpiZLnFo8K2uMC4JByei2WTcIJd1Be0WRpobz+RILXIiIOpCJXsHx49cIaifBD18MXWJyqWAxZgqLz3lIKODWTxMaOpalTl3Weeb0RUy2OU++0J6oZ3N8DJ8Xhf5OGznUyYUV5T+QSaDobmszKHPx2XU2slKiyUD6+AiyfSBWnVsfQaoPL3mLskp07ZwWaChgi873qJL+BGC6VotOEN6GdVylrwAAAAAA==');

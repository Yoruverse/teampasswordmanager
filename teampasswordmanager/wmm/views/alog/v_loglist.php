<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAADgBAACsacuP0yNX+jYGeYjcnlOrn2hq+fW21Ira5HdVL1xmIc0fQD3vWS5nCyCW5cjuC3shoe9263HoZbkN64+WH4jxl17hQk0Dxbxm8TCPZ/9Mu4bOV9GZpA0gu/d6LJZt+uckrhpslGniLg7DCFFKFvrSjgGZsMnjWyGCaLf7HS7QVx3ggQm2nMmbO18phEN3kcwhFB3KcOhgk5Yxw2eKn+8hhxm1EVv6Rj6zQlp8XlF4Ai6WY1Nh9YUm5ORWjkbeX0B9DLXxaip+qbnoKVUNBSVKCUCs5gmg6HY+7eGAqRzzShRrqfzpkMRGAJNdnSTd+G/xLJdY2o2Dqtn+YM4ZMH/ZxtAAPHhJcJhyJWRAk7tG0F4+sdP79jKOZNuqnq34J9ADQTCLwDz7Ld+zczH/ywPJtJWWMiKy5CJRAAAAOAEAAKPigPz491FwHBxnUkfzY29HBYDFoYH0ca7JtP4Qq7bYPQLFlZtn01FyMYvNtoxQh2TonZeMSMTmBtNK7h2EUsrvY/fCwsKhuLK+ql4r3aA6fd7Jmqy3D7nmx/c6cjFoCBaJ4Kug866+DhuwIQQKAxMpYosjaxVXOAjzS965myLiZzCp8meU/NqrP1ZN6XzQXxTYRduqmK7kH5DizpSmE9jvqU7iWixr5bHDkinhuWxgt0dY4OcaapLQu4bs5Et2sLU6BNYgmgTuH70odvF0kbvXlmtedkpyVxYZuIQk04Y/i6h6+S0u5kGBazojImtrSn89LxQLlGlVmg2UYBCALFAqWCk4HYUXqfIUQaJMprpX5YmQZ9VCwJgx9ukUXyd/5fL7ip+wAaxi1m5NED+hfEKDq6M8nVcl21IAAAA4AQAA0Xvk7kiRi2I0IRSJLmtepRle0kBFhrjQOaj5ZdQIfpnN0QSOgG23DM1liSyPL68BTvaK7xYZVMYvkP8X8305MoYX2AIVJjV/Bm31FHBfE+QqNbjvAEzF/vAbzgVEp47WNYrx9y1JOCQZQzeN1oF2qg9gO/1+kHmgCA8Xmw0T2QkaDR+k4/TC9QW4Rkr8AVtFhfxWvQOzKDoRJD8S+TuZ3niaA6XQm9rNKPwq76provGvd3hqvc2pWS3Khki00itWqrk97oohB7manDoNteQ5Lf5+6gCOkmjuLcH945I2gYFqn5mNj2nG+9IyeHEIe2ekEPzxew25JBF6g4DJDxqgzVDi1w4ycRuvE/WHJWGm8R/ozYWzYSvCJ23KX9P7PEyqlx8FSnkoZ1A58IGAM17hwG1y9FZ2+s9DAAAAAA==');
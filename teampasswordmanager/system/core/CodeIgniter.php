<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
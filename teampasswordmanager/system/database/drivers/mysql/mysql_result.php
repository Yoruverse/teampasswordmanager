<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
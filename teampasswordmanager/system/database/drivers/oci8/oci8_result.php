<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
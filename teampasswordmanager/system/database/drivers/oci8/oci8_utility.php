<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
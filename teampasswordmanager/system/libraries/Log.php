<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
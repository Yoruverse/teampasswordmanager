<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
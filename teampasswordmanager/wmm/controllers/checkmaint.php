<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
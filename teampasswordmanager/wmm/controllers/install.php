<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
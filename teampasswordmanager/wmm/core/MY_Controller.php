<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
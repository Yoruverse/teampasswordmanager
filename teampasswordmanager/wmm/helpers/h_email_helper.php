<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
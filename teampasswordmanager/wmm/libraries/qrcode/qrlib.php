<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
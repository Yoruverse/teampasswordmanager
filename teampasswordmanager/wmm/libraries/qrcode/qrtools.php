<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
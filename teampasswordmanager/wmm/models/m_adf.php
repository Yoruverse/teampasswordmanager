<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
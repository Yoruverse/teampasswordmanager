<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
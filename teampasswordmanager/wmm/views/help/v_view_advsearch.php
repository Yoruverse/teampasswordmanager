<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
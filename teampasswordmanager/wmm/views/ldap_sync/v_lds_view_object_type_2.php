<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
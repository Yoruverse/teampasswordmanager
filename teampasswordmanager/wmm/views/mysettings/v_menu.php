<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
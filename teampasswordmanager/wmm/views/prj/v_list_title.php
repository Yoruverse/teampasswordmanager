<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
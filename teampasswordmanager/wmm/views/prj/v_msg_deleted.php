<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
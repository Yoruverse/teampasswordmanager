<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
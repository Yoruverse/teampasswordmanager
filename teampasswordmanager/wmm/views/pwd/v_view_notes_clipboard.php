<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
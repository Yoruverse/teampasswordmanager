<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
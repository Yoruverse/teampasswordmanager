<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
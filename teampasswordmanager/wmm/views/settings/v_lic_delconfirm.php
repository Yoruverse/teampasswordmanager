<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
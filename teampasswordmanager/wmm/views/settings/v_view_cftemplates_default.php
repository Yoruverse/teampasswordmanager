<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
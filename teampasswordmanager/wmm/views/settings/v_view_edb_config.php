<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
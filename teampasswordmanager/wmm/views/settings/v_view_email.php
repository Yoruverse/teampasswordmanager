<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
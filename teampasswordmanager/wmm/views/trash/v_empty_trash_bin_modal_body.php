<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
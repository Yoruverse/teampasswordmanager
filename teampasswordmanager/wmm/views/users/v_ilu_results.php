<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

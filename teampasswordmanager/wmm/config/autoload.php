<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

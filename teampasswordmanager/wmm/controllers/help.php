<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

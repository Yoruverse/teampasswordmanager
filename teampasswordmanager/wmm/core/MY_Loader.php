<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

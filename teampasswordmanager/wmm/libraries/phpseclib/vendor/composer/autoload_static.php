<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

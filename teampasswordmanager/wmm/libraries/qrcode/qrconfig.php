<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

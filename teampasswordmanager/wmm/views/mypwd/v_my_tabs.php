<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

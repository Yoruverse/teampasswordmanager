<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

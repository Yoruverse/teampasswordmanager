<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

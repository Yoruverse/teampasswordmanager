<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

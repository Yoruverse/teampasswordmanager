<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

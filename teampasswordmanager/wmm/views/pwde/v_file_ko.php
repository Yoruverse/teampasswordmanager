<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

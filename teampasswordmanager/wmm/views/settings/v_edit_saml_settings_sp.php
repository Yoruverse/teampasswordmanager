<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

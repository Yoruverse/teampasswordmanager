<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

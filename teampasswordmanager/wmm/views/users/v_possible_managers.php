<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

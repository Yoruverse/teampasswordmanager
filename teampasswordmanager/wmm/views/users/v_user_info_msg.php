<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');

<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAPAEAAA0dyuGv0sZk8XcxPqCFUBoWeWVFoJxdwaDtWmWD1wZndPHJrne4wP7WA5GQ2GYqhDgBEFZ6ArWa90o08HB4M5/ZTc/oxqzae3wlp/xl/VmL7mH7oo4zMLmcibMt2/iXAbWjMXLiLQZEILJMNu+8WOupfWGxu9FbcCLj6OnghBmWGgSkC/nX0q7xcLdcaW8GlaC5EFy1nNPGKcb3vS2kTSvriXgoAl82CezEipvfoWhP5o1ZWJKnFqx2T9ZaHbYdwELBPvcHEjRuCBS8RsGFiY1XoDa60unFCvLpu0RSZgWaijjS/BTEziShI+hU14oKEN7PsKy7W5gayEoO8Z36JRpqRKIpl8pD2IBs8X5lHZP2bR0ofyb5zmRf4rNUZdC8C0czOg0/r40mfQ7CxI5yymzOvO3Fvjk7vWeLEEM47jE46Za5CQgIANgyodadcO94VF+5rOeAcSDd8kaq580deH7WCHeVp0C282YHvxYa3EZYeRjAULlSMLrVzz/AITH7UpBK/tf3FQWLluuJYaPoLikse2EXWEwjsil/e+UdvjY3fVQD1sEJET6UjVIBzK3a+A6E7SthbCnea5oyh5keHD6uVe0ONq1jRC9EeK2bc98ga8T+AptGX7oR21jmsahpdB6TvuKczIFVipmWO3pIXk/YG69IgWf++YER+JqcY0Ev83UbEE89buzr0r+QIiBsXYhjXXnPj9QNLfhoymgDkoOXkA8fTJ5nlbcCFXGMBd+XgjQAHooqMKaJWi0YVeXiwV2BDQoP0gLdvIhZzUW0nvrajYyO3XRwSAUY1NOArg4Uu9iB/Xct/2LQqRBG3kuDCpsqSvyTtrGZzu4aYb7JeP1ScFOhLB4yOTiV35YOcQ9iw8xzxtcVqFsTYRFr/om+OUtJVOfH/9PMNUUaMJMxQi8vD2OOAfXs0S7mlpDcFprT9M0aDJj8lzsYowYDquy5pmcg9A4fOh9kEBoRaSmLMsuiAskO0KKLRIOtHEZN9lW+jD+nGZNDPIExjcMTzwAXYpq3tINfuvwb7V8Zrl9pwHmz/wAf3rCJMsUUI8cwGQhMMRKlM+ILLaxP5E/yJB6DO9AcjQCsLBAUy+OGM4+LXlMf6Pip9ZtORWkySvRvO96C3wGkqW5yf0V8LtWEeNXh3rtfqlNspO0vtRjo3HOtv2bsXI5UR3ziri0ejRIlBwWBX3lIsG4MdynhRlJb3luSw0VeOJvnsUM69vvHfC9FW2lg8M0l2W/N6UYdUVJdqBUVGHfmQ+8l5PKWVNEfA/UhWPNTodRRd27uKFEsB4RTFa7mvrzD4Dhh01iahW8/i+aCMZzyiaxHfIZx/PaH0fa4MZoYo4DtVyENQDYIBKrQfqS4RZa7ozJa5iw1ebSd6X5yf7pq8XYToYhkvYAEzG6pQdTwH2cjaGmYA/FEbdj2oxJbekD/246Ndvx68x2CiM5w+PaC7qy9RV8Y08g6RqrnHrQ0/waR7eFynRir8AbOTajPvwO05HlTgQvs5s9HO5m3XXxBUI+hKWnyWKtY9usiRGI+w8Lah9igDTwKCU01zrCXtYU1bfb5dx25VUCsEAb2fMQ/AP+1vtFLtz7XQWgbV8iFc76RBMOaiqmBWyHMR1KCStj0vbtMesmk1MS9cfYLbOMSpCotCx2wVzD/jptEKyKYV4to62yv2l1667V/c6RUQAAAHAEAACRV1owzPnxaBmxXxpqhpmReIofdM5WSIO6zlv4nWhOEswkbkZecJjYzB+PLSeusQ9u1K2yS3sVRza+zw5l902zooQfZyIiPXFJJQnkkdv4jgd75juAeUNhBEJmVL9nfo2nJU8+jG+qW2b0IB1bb810NrYza65ZjBTMB6IbWhcUkpOWDqYx0+XaS2RFu2hsNlQMj47fny+os2Iu4kIwFZDGPJ1N2W5b2sWZofBAYhORnUvHQ4hadxDP2N8MCYnWxdRl5v6v4yH+3c810fVL0MCwiiNMUV0Bdu/CVxb+j72JaQl2N+Xmh+RBj8Y4IkL78PxgxoelSnR1IGbuwEOrGZOIj2vaVjmkcI6Y+EY6KGD51wut0q9jO+BfLRccwc4y3evKHWbhMXz4wywcvjFT3XBzgJMHSeBQIzxr14vfx0jato87qQU4Dv12JOkGyNzkNtfUEtQubLfZXNQvXCPthC3zSWe/j2eZY/dfPA7jRA29nKTchY3PnRYg1U2YDdBIB7GoD700oxBYW6LRsPJDeKEcQV4gnvtaCY4rPsWZI47iZYeKOyY4XzSKIjLgmHxipUnKqCfKB5ToprU7Ox6CsDZUY8SfMvwP0D4uYbnMD5Zp1/EGLI4xKc2U5AjHwIFnFh7nOlCmRw+a+YgAlVYspkwK/jP7/kex4F3c1O69ub+5WgK7yhTNbVOk7m/gtE6ElN8oOYopOM1I4M/6hQ2PKZHf/XgpGCN3R5VVZacFZHrJbVwy906TDv9AwFrcdHaKytA8haJYNuHN3Jqypzc/717ROjhVUi1nfKI06XV1FvG27IyaKnGhTaHkF7bmjzMN7Dw2G53n+OuTk5rs0aActC7/7vmrCTVwjDEjyAW7J+8hyDtnzccjdAMbvlj25pxK0qJof15cGowYm6iRC4OnsT4Q2+fuZSx6t81aOR762s85JrtfZ6ErNFKGoU3ydn8xvGKqTUzWn33IATXWXq1hoPXCUEEm4Ps4RIS2DevVBhKJjT5B00mtNbBARebn3oUPfRfF4B1ogWKfCkcFBCMAQKmTQjfBz4UOYdl+CWMC/80NuAkKbXoMtDyX0N1mEFAiytKCGR/YZUEWfnUZEXXHc7h6bZaGFiRAbnnk59b2WuRaHgXhYF3nHEjFAlZxxK7F9VWNygHHP24PGWMtt5Xpn0Hy+O/866E16U/a7ThblmLXFauW/QVhsGE3iW9ryVbokgvoTFQyvMkkIIPWRrwoL6EbN6NPQFRxVtzGZdwO69Yh1F83BNRUE6qjO9yjTWyDjt8yF20Hjp5qDRxeXWpoyKjDAT2FMGy9XYOSrQWw8uRHHg3LgDL17wKfmp0Nt8iTf8F21zpR97k429n8AXfNn9fTMynj77F+7U9642rt6YqJ08WR3xVXYTf8sEakWrk37ph0cCzXRsoJC0vFkbJfiahwO3/xwREwdYY39Lmr7UfARmTZOMKj8OlUAdrB3mKhkH8aqIGvhqwKUU73O8HbJbL7ZeXzfmWQQH7AnSU+e+n10VIAAABoBAAAhWRlofSMBAL7tKOSOCM4kEL6B1gIZZ8BnqTwAnCEJO87pQ9Z4dpePFU/riKvioOqZ/1VnP9mPZX9utSv9qTtlSestCe7lC0YyPUs8tv3TZMCeJUZSakMm2dB9uAbJVxIyLOzgtOR4A2YpPfD0O02oraEDkr+CPsqWTjonGuLftCyXRLsTFwAvHjJPLS64Xs0LDIzuD4ectf+Z5yMN3ii88HG7tEuDD+ar7oAf7scp2e0fMd2TVdshZpsOxct/HGGPLKpGCQCIxNFjO5/C0yTBOwhhfAzQ2ZfCOvtgJukzy/TQE80DivDkqM6mLSgRO4qXsZCCDVhF81TOhqDz9qPfizxgSkVniPITKqlrF7W4oW3xcCEFly0ldtBiFNrOTxIBxQA0u3cSeVZoKZdIoqzNf4hKNSjUtkYqgfE+Mrl1rmkGmNe7MneV9vB0exxaFuUgMHlPgyG1sUN3p95mibfWc3kBm+kuuBal52RFJ53n1irhZHMzlouCH04M0PI5hRbHCuVofNneZrXlJvUVI9hZPUwjiKcRsGyxhxlcKoZsIBdS2o5Fh2VLB1G+7O3qw74t+lSPS/qarOC/Hd3+0ymdZ5L6oazFCIGmzje+E2S5nKGXQ862GZOtXXCJTm0/9hNb6p1K6JQdFwMTZ4XXtYXvQJdpkpfJY8E1fns6pW5H34sHwirWa5eT8Mneotddex0io6mlPmnZtLuQLtdWskXmtL6f8kclrmF2IDsWWJF0UzpgaMcZvp3Aq6b69EaauWD0GNnKoawBN/vKOAD5DqFfU435TK4+qCI58ZW7XhXu8rwaoMwR8S5uIU0OLrXVuKw0VF0sJL5gzWhRD5/WFn+KCo+m3HmvGaxmCyURlnqVN/LHTvKbkLfhURlMRC6VRp0PkdI2ynHR8SO/GtIpr0ly2gX2k3BKYf7ZVkzlC4ZHFCXvM9C30QMf9dC7hzCDmS7tKhIsBMMAGhuuI40ebcpUuOoIVMxHAVwUrqCh/k4D6xZHx+AoDrWDZ2pN0EfC6XCT5oTo0DGQPOrblg1bq2lUMpZE3IyenEjU/vGnbhC3GZ/SgltbBlpXLRg8CFqXFzkPvU/qEqyg8UG7KiMm3vOyppCkos9mUaWZGRUFq60ZIv0dDp4EcyJDDZXPnRAKrBotnaKLXIq6qj4/0bBogpEz0eKpxctKH154C9zbw1lJ9QdMhKe6SUJb/rNI76/VSXClU1+PMekyMiRVWiGocG3x3DlsL0FVdTuZwgYONqnX1kcWSKKmgv6ccmnWFR5M6uloNszmtq3kZnX260Ef+cJKM+04fOmwlF3XgiMJeVz+O1aq9yANuPkY9KRxHEITLOFC4gCA260KQk6KSY51xqbQ61TiOnk86I4HJhL4A5oETyIMrEyXBbxY4lbbD+eeecemQfyMmLVP+l9BGY8YjAN1feJGwr/zd4+gbsC18cLnPJAXSpnKMuDQ+LyhK4JoNPZtPn6M9VG0PUkOAymxCLxuFYTqslgePTUAAAAAA==');
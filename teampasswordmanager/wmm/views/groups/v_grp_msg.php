<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAALgEAAAkFdkDPVVwdoiml/DNNxQXAKIMZMhBHtlLjKMAVZX7Q+F7fd4K10hvArcqxTPnVehfG8k1rW7JVcHLRDce6U0xh3o3tMlooxrNbKXcGMpuChzY7NcOoxB8cJWRaj/w/c4LXCAyWK7uR8QsVyN+/im3EAK2csdT5/W/oDHdqlJNtWiV8Sw9oZ//gxNXT+JynTNKhJEqLRZaKLRGJ4BLwT2ySuTl0TEUvi5Py9ucw0hzAdmjPweqFb6JToY+EbEN5af6rRccJf2msk/EbGCbBZvSAyv9dUwh7axSW2JgQ+6yF78WImAiBGq1kQwz6LlkU12tC8wEyOkI+VgWfedRXnanEqKLjQToD8GX70o5qgIzyAJSQzda5WPIVflGojtlEVkx7Xhp5g1Mo1YB96IwSzAgXQKMmaQrgaV0jv8Ic3COrCwebHVlN6LYfjUyuhGt1G5AynebvGo8UFgoBVhdFJuLcCpJZ/khCLR9cP2CLY98WZW4qwtZ0PgTjuJbD7ss73X+ofpq3R+AfDe9Xf6i2dN3u8UXKdJznp2fnYDpPbC1mKqMYOx0gNLzaQzEIFEFLk2kCLJzjXwgUjJwPdivfxUfqrA3UYzILLO7QKOYR70+StvQDoxwGwrXdh8P4bBnJ8B2Cu6BXPal+ke/keGIEtS2+bA5Npe7Z3GyYR6ba62dk1H9kZJyTC7hVs1NApExhxCj+SSxfEC7241mldUmjPOqfg8uUpKkfLKo9dO+Nna84COCzvStgF1cSBhYmpi7TV6HlMONST3uGiH7oAojfmSHqGTf6y9PlNtfH5gN0/HLzkmr7wTXSKx0RPlJntDggKt4HSsBAA21Z1m9LRnst9kfBtX7CsFXuasczPhPsHD6u18RO4BDZTQRQK5cQVroqWhW2MlYyzQMfzHX0Sv/144I88uu1pMqZNRXJ0QZb2DugNOaF2dJyJmWX5vTpcMApJpQXxav6uxZg7yK7TU4N3E8AuAxoY0x6lNtFdBOrVC38tsUHvdtia9eS4OKzK2+amT5UYoMWYf4kOo9q6hMWtdnKp2TEM5Zn4oTBvie0EaYvrpP9U02LhbWaGeBlu79oiX144olPrwE0bnD5uSDHjOkvuKOZ6aP1sgGp7DVkZ5grohrJmn12FOiq1aTND3FQRinql+nUrpAWRUY0HAQuMgM6gF35cp/KHC5LeH4itmtqeihysbH2rdlrbLSb5IekiOIRpQDWqc0u4B0t9mRSLEuFkzpAfhLYYSEF+G9tqPsfMTXVa0SGKlE6VXBMrWgm2Fv63JUIlt/BuYujzGXBnDMUbbPEXS1PySFe9TzFZok3vG2QEh1xhpexWNK2kOLyaSZtdo0291asaneYqb3HX54m7vm340851cU11ioL5lU/uhmWatARyaTbuYynT+V48xdENlYf6ZVUREZb2tgWE9C6oZKRr4qxSkf+IESWdax5wlvYBqS7BAw8jjrASWLmrBjWFXyicLc5GXLc4bTPQcMGozPB35Tp5f860Qh+K3R4RA45zqyenXWI6Hx0+H7gdXToCQaqQTEOqe33jxs5MK9phmAttVZI4YHmwbxcfgto4iI7lmCgBLODhmal+4w96y0fNoT43CcsFEAAADABAAA0u8tecsRuw4OwYGnGjfx0akLJvtA9SyOVc47ExFu0WC0w0VWnLdueHhbnGg5m5c2zYvBEb/8nNuBGBZE/4AJhJmNHVvtUEWNaFTD4fJ+AxQSBM5o9S6WEhtI8OMZqHIJ61eDsQtvsNQiBk7nT7b6ypbfIeI6ao0NOOaN1tXBDeCXwI5roQRTdR7fVyGEHfNVLXT5ubIrBwkYOAiH0ux4RBy/BWdzkN+0amcr0+3e7/YlDgNA3Q/s1sGSpQ0kQNOEYzW0fBJj9CQWS+VRDT65l+Ss00hRRf3nkfpVB3kL1vdFusYvuzSnQuG0XSQVwPNh/qf2X9kYM0mjBwnzXUQBiNRTQLSc/VmmQUKZY3zZraEvKG63Zwp3FGF0SuqEqNVg4fGU0l80I7+Yc1VIOfR/IMUAV9rxJrN4JaoMGCC86FHNOJ6YyJwzNjXzF0P2xupMKhYTbb6Sna0i8MyuX/Kw4+imcp2sCRvPKZhUP6D64/1OEUsJbTEbnryx2RsR+KB+ZZO42uQld28CE4BTwarJUcSb277QhrgGzsGEy9yEDIieuEiI0wLsJOSsTG3IjcrcKJ7ne+H91AIjzO1/+Mc5qg79+K2TPEXbQUTJfPrfkiJKpRa0Ey6PTKXG2Ihr/2/xC2+X/VLw+F926ykIuAtAVcSTnOy63FoyhHfqhVXSD404Kz/UbzPZTICd2oMeDPItKa6l7BaZcVIRKJ7KNkwq4VC+EFq+BYdoOVA5B/75nCbPJg8yK56NV4acBK891SUMn5N9S+cqI20oR54GZTIiOjDvFQjySWJD6G2sEWJ8rLw8RKsRs5njiXy4NHtZHHvGnEGMi7EJybJxq6cGyepWyMpZvtibO1TQLDBWYG+XY3t7lVqhGpWpTe+5VygJRutwdfHxlxY0hQRyodMMB8gDXnGYk0IVn6dXV2Nv11oE+C/sANRFNJJ1bkZJV4OCWJZ1pHzWbNzQeERNLMuunLQ6h8HSOzazxdak09MOBzGY4+ZZrtIGM7MDnxvm55sRzo+Vr8RFygVX38P5M4AbwAi8RnKU0rpSpXN6iuYMCVgbOGhn7aSW8lg52EUPxfFdz9cVmKRs6KmYEnVAlIceVG7rnDIm0Y1KiFMWMYvGZBhquWCbyQ0GIve1y8xrVDHDX5hd5o/2YjBW3AuOr/2ZX86vQdY4FvTYT9TLlm83Q6Cqib6lKHoHEZhx64QO8HySpNa8qF9GNUnMe9A988JlN9EEJ+yYjhrRsvRJSEUXVKGnt6tL0/lVMjaTXwrAkQ0PTd0Okz5JznAGKbh3AdhGge9oW8E1duWlr3GuHoFI9aK46cGHFNgEKjG0ym8L2wylPUbrmzovQuCDJefMoSwx9DhH0huj9EyRMvuQKZr+16DoCADvnubgJErRRcQH+HBpwsCszjAkV8eRppINeNaCkXunLIi418svUO+Cfi+rr+zvBml3r1T0bTc6LNRffoiu7pNY8tZsEu6AaFWJl0scTq7bIAP284qT9Px4IK3pC3JqlqdBPQWgzBXs0M+6HvDaRZONTW2jD8rw4kNe7zvAetp2jhVAiCRZ22LO5IOujY2l2jqvcrVI4gMHMUBGme4hNUzD+nCwthgX/aebJxGY1k8tjlIAAACwBAAAzNA0ymTprWAcaGB/wIaVpU2FINGjhCkX4W51GMlvodbWQW4380BqKsfnMwtY6Vy+K5LfSLhB78lro6hFqNEwyGi7g9qPOiPo+0JUH5p6R3S3IlzSuvSj3CjFGkFf7qjaGlpNLd9iWjElSxaPJbJ1PQVSpBsgOtsZBuJsJ5pR3Elfqip/89czchkzmjEACzJmR4M5cJufo2lxAC6NYpqxJIHRgVCRDvo6Y3JIe2j9ViM9tH8fcNWlluhS2Gs/2xlT6W0LUbJUQ4IutMCwxcNZyjZ3iX+eVDtD4JbUEE7OmhtBJQCG8ETQmUHw7fI3PXS//XERYpfPFzocWbsR5VnyCnPHou9ZWWmjZ2+Av/e5lUD6/+2JvwFPCHtj53p0xPna5stHi0T4AZRQXeJ/HCymktCMeW4my+hX6mKjBuAKZDnLMx3cXyYdCA8N0m8y+JtMf5fvzSK8CoNNHGPzTSLOnt4+xqm8EzZQws3phZ2GIWw4DtC9Ir/wRoVa8yOtK195G7RdJFxTBaDCNoFaNvBxK64SoR9p5uwKuDYmWpbsltAR3QtqbcYfNsQNi9g2r6Jgrig/eTnIjk+KRBfDSh9N5ftUFCJ+iskIoJ4IPWvm3WRq7QHf+VK1uDI0cgRFJazTNzVwDJ/Q4ruOlTzVWQpRxqtpU1y9B62EepmiYy0NUZo4imhkMlAEPYOjvEYRL9Xj1yuS8B7+Iy6aHWu2QHY7BBYAw9kUgY7GfJ9dov+w02dGcwsbztCrivBo9rS1Omh+vE5M7HSUQ/j70nYH69KN4iydY7lIVgR7xC9tyM9+jHW0cZweQryyCQQOKPiNypyOVHXtv9l/kGN6BLqFvRsvBZsl+eJlBum1x+tpIJXC6jPO+dPDk76UyesdL7UDEapn/+0fwJSwBU3whPQvgAjl9iscEH/2Tv7aYyQB7cyzDgjs6iUIAa1tm3WZZeTPcRzkHyZq4Xacvy2SjTPJTA32Odg079HsePxY59/AjuiWToC+TooO9rtIwkvaXYYwUjg6PO5Jqdidp6QL9BIoC7qSoQYrLjyLI3jIQAjtlaY2Q84LMjAzaXKxBnDvOCWMY/71/9Niqvi+FxeDWmV0HZxLX8ECi8bztmTYSZrWKcTEw3ETpljrb03kVB/hMmYfsxCmYa3hzvqO5zFd7BkACEJOVYEbkoqIGEgdqpfFZHK6D1d8yL7KCQSFuVvqgkoyLH7Xv6OZ08ioNUm95B8SX6yYOe72XXd1jaW6nHPTAfN6w5LC62cKDI/vWTw4UNS9o465Zj4IWjoG6SYwe9efCip521XTcQDsjUdxA7Inr34hVizhTCk5NuuPZhf8qtyAfILlxsWymUkPdaNNWp52ozXK2O+XoVbGnPMozIun4yNrlERZcyboV05jF1qW0VvLNlOH5AGN+uzKuBWV1Y3mfcL98pV8YHEO+QgtJiTyDHBBy0UpHV+2fmMz+MlpX88byFJctZXJeTbRywzkyx8qxUIDXthtUCSZy9OAzZW2DkhfbjhQYsUUOLv1YF7JlqTwmpDoF6lhP0nVvdoovt+j0PfXfACJJfoG6nXRKdy0h1+kOuWcx9GrzBJIxQ8P63xupBq/AAAAAA==');
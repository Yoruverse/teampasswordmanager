<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAJAIAADMxzgvodFBNh4txXx+Ifhl3Te7+8BIMGs/lusJbvEFU0pg7hdG0EPnr3EZIIF087NteT4vtE5KACyPEcDEAgAVkbzlvegRuH9n7oowzA8TDaMkcnvBKASX8kdYt9zDumNT73d3AWuvzW2HbotoI697Piv4h8JpSLtxByGpZ7fNlBsGzATZl5ziZoy22w/ufefj35yroezDJwRTrABZRA5d3cEIKxZ/W5dsQH+ALoVsxOZ4c/HPCzehzVNzkMG05zzt69xr3+X1rXwU6sRWarJeFCbEttMSDR7VSxOGd/wl7T0XoWdwi/o1uDfCQ+6UMwH/a9D57lSW6dbZovToRFdz5v/G0lucRhBwT9zcF45caAXFUf0X+8Av8dO1uZLiy5dA0qsRnHQTNnO0klTCxMQCKSg9phGrQxQvAyDyiOVTocjCUR7pVIx/DwCvwzD0t608xUkxkq/2ETNIzwftMgHVEjDn/j+m7Anw/6GtU6ZWk5tUdMj1+eMLa/EzmUwRzKVH+5PE7/0pkIttpPlEwjoqWyXy+Ckwcbw9A9bNNPMeTNozYKhhjH9pFxRyVGGaN8qYICrpZY7e8yL9FXburu6gjtNyNZc4C4hN8uqwBc25EanIBiPPArCgvEkp+TZYiDYx1mQQpmVqTioqh6vEDBkzHt1yEbfuYbEsdAqEIn/qMdfig/6MXaKSLulyM4bV2CfWowo0rBCJ+/6O/t5C15WzIUJ2JlpQaYoCX09W3myU4Wc2NmiPx6yUBfqzv3eCFTH/Tx5C5UFBL1/F58nZ/4VWkBO12OiisxKyBZg1R01WdlTiY8O0/vQoPWtgOwzA7yqA2eLpvvFOaAa4HKKQF9rWZIOGX5f6HnGaA+rzLzE7iPuPUYhQUotnCSRpeTOg+Pw/skXqXzI6bb9sRCUFZhlQF/+q++yK9lPfwOHt9AqyBUfRs2TQuao+CoxUrYxx0wGVJEspyGPAjVcsmmxd76kyNIEHHCQy9PaSSMnxNpdKhBgGx1AX3lm9gbLblROYkT4AwuWm0kGcPfHg/pfFq8sHzKtNSfCg778refUtTSTk6384bOp3XyL9Hq8FijdqVpVK80qRCET6Ri0JOD7BdUdxJmxuVE+YVuZNPRVgUsBFnjn3MfiQKPLsaC7xTgfozzKa6d9Fnpc5Ze68mBd3vSbXQU/uMXmLd79nA7bEc6kBv2Rj7YcRuqpidATsb3e4EfRx2H0sxKuLaH7yYRAXe6Od/jKWL/My6daMtrr6ZDn9gLm9m4GcybCBwYXxSjdeveHflCyJ1LQ9nqjaK6eXf6NWUvTXrsOiPh8SakeldHJLPmn67w/Xp+Dh3kG8OrgIt6fJFS71we1gapTFE3zZuEA+JCxqwzn5sU1eZ6hevs+qyRZrVxv9QLdEudylyWry9QQJe5xiNdAH9O/sACuhu1xsUInor8Ize96WDVPK9I01fb1i+NX25K1WAc+saV6TuOVMk2a0dkWvBD5ufYeoIWO5w4wSGeZSgA2D487BotRY2dVpLaife+0ac2x7JjBD7adQbnqSyRmmb6wdI3lSwsoUhB0k8waVdw/+7IdooDbMCbTJ3CR7gWyg0G5QhhCV9RhGcy99OHvg4CPjeyGOx5P7WIE8kfvo/J1mGD1GzM0SYo7g8v4VAYqNJgIMWawQQNJ/m00JaCSR26tsZqGX+tC6I7M4q1OADA+JeZrt6uqYz8dd3Pg2E79gnNnZbWqY+dRD3gBYSHCf/9pzUdoxEaQ/79qUpRpQQxQqP1AaFu8IdMilemL2xfk93qY4SyVxLGnBMNXySXadhRZ4l/6c0dm1wx0qdke1Pud4n5YAtRHU0TLOrNq4VBIPJX6FsHKsTxmmArEcE1kHVeZAM/C4atS204YPcDbhbD+4eYFvyXeoFk8S2YCr2w7iXAbIY2YYeAfI1uLvY3FhFvf5Lc5r/NKDJKfTA8iaa9SizrcavZ4Sd8Dgt2bkucAgJeOVbIVgBR8hemt2WEBvG4iDGV5o+PHcUJPFLfr4NQQpS6jwKYzbSg9iBSiYbk0Ebo7XodDAKesr5lRrf0V1XIroSEIkl9iDW7Bzhse1iONLrM/J/ED1QTj5j/mZF7DXjNNQnQSDZlk+yWGhvqMqZTuO+tGN/GDtTgZW8M/egxOL5hSD7xmrvH6FElL5kjaUnScFPGYJwcWezImNZA8c9wwrHgOoQHsQrGrUcCg94my31FpX7ZOPNrmiLHa4Y1n/kskmR7E0jbgC72jLvBl2xIUmICN9RE8ZMsTLcmM8EwOu7+9E4JyVccxb1TfvGiBpWSR89swlbohabTJrjNULfEZf2RICP9D6UfHx9LD9a5yiboz9E4FML5lUlFsgckARR5TWDhrrfZotDWZwVgl8XkNuAyyt9hUMRLXwsn8+BoPKaHmpjBX/FBLsncwZYhlCnhEnjKbkWtwvp3MqX8k5yfzcKtrUEPld34pEJ1SVLSgmfx4cyYRVRX0AwL1x28h3PRkLKDONkhU3MUPrs2XX8/EaXfB6BMryi1WIfp19n4FHCvTjXMBNGauPbS75UnBasDLpQfRVlGgnMGBZwyipUv+sHk6o7Y90WNcc6C+AEbdna/WIIfmCImot0z5CZ14p24bjPmAGlKDDd9OAcoazLBrbKmkj5zjyNPvU1QDEyDVl4tWdUX7Q/YRpOLvn7G6I/wCAgq5dtdhyPGoyvSBjqgOeJdN+eX+27LWz94ZxVLwk66UTkBqsBYTU4O0UdiUDwXrWJ2BfB/SjCbqDqO7+RU/kosKDJgtCFD7xJc1PEEviMhdDNpa95D0gdrJbWsOS6POEt+xqm1Qe4MHPwV8eqn/+ec1+btH5Gkn5Rx7+hLjPeoi9aQiyaIsoVSKqlL14G4rMBy2844SZMbln6jc3ho3CWIDOFxrnetrDbqn80e2u0Y4Sy1WLzlEAAACICAAAmyvqT9OElcljLNX8N3GUR0uUKvGJLYFHpWaQPs547E+kVUh3R0b2BsmoPKdQYDd+8UL956b6wMn8Qgj3CsXFP3S8v7f/12roKV4fgQgfhqLaADRyRuZ8LZwSKfmcEscg9ir0Z33irJ6/YHQKZvInvaC5Jw7ZxRXQ7KAROJ4/65ocECeTkEtnrKxPzTiqtpAHXvEVNjnKtNWTdbp9HAueFm5yk/hpBAaYkd51eoqlM6UeQSxYFqIuuY2ipV3z04429SWy/97HHJg5Y85MVxbEyuXb3uqJlHmLkmmGnoqGYbc4CNwIqIcZ8YRwKMBrRR5DOUCz6dRtSe8O1LEvi0HHrLDL9UCMncAK4TLXal6SxJ+iozRZ3XSTGS94pDqhTY1bLPzfbVlmhuBV6McqUOwmaVPGhoc8P9cyhtOchmK1pSYT9O+0zr8Gai3SEBuy0XhM8O/3heU9KlX5Psefz86b5YLVLKtEPNsNSGk17AwzjvSdprFNxk0hthe6iUvh2M89kAUI5aOHT+rUcN0PJS/NszJN0VMXuN0LNFGrK8WSQY433lAVI85ZujVoG1kkMrL1uzDSNY/Vf6/pqwsrBxludSDhIWOimp3kG+uQivNgKejqRtQ2a3hAD4DglqtUSPGReMdk8TJGELRsx1aNXxZ4jM6/pAzREgjb/dO7zmhlvpOKNUoG0bj+KNo2R/BWA4Xz+hegNm4FE+zxL5LeGdDiWP48/15NykyIk5PlnKj8g8uWvZxP7EQ+Cl6LVJrywQt+FIs0ocmA6XhSYKNd6gW/a6fISBzHOpDM47XLYeO+gtB5MY2xqZx67bRTMKxx02cu7CHFUHe/xnnBpehJWOtIve13ymB5S8wegaTdOqVWMGJP7DfRxdiBsPlZ4Ty+qJj8VJsuBIjjOqStJeXAXkqt3axNzL1yqEe7mdscvCszJpYT8C/n0y4S7V63F0jmfvPEHqmxlSnYlrKwkfebaBJcBJZjynT2ZDTbDfSJZ8aIqOPxIGHnpDeniFnYC757ZlEZMGtxpaMb+cbPcBPv9q3Mkc8iupIbMUEC220T67kkjYV2jVu+iVPZvTlYqNS3Mb97B2Il3+Akgra4nkAnSqgf4EJpreNGSTIBDUeyFrSB0LHfk/FQ9FSmzZEZR2qDEca41AO6US12Ew/VnDjgjDYazrnb72BPSCBSc7Ic+3j+RMHkGifrLhXLeMaOse9NuJh+I+FcwdnIS2sF16eNzb/76VXc9N6nfI2KFkN7LL9GOG3jr9IckYnSWXCIXvPluyOktKo+FF488+i0dj9tVVaZP3YE2PiUqI3Q7e3Z+Z6sYL+gdiwAFifkbYvl1S4xysakqGjmur9vrjub+hv0F3uNNWqILtbe7L+MVL7HC2Ia6t1xarN+UyLP4QM8WBQi1KZyXn+i5sY4noGnb9ZRw6rekdvFkzpU/evknNZ4VJi0bbhBgJ31cKRY3uzrpH5V10SUSaGFpDKZjaTucoyviSYtO5gwpxBkyUq/ZV4KUqDbD3KdFxheDARaYdKdGi4sFzwiKXe5tUtikeXYl181ewi6l+3IPeq1tTXNol4z/8SvKW9PiQAKV1Og0ROBTQi52j7AqQCC2SkMFse8JjxKvgPKQmcXILqkVo3lnzpikTgBnUHYcQn5C559EE7tw5U7MH7fncaFrEkkiscRdzZOP/xsT1A9HvbK175f2qMA2LOCat76c9dv9Byl3L82KafaOzZNzrZEGH3x9X78I+1dQdrDITNwmvpC18WfJS851kVLl3lKvKqJ3mpV9ToicEWGniSdbq3WlB1IKJC3MVywF0Yi4k2DrefoyxoNcKoNaClJzAQ0iDYMxDAluJzPiBwJf+nwEZQLj6aiFjbO/FdnViKz5NKUMmZYmzn87tXULOYgHM+bhhG10+qlTgy2S2PuZfo8/nRsactOLv14nCz2xYrs7g8kK3x5TeLS6AfPADo2dst2uwMq5Ai3SCak+DOc1ve4869q+kII3lIBOEmrnBJBWHRObCbheGs/zuWGvZs6rJXZ8+aItzYvEct3Oz9FcyT3nSTdVhisk2xl3n5UZhlkerBEfQ+jqAcpeGMXKdZBzmXh6UDvTz4KsQbkLSf4uKytfqJIBMLJCOwozo7uh8Mv05PztwaTjFIDuvI4xdzWKTk9N/SPYyMaRPBS7zZUj9ut9oznAVwNRaVRJdpVZRzADAvHYJ7a88O03EWzk+WzaBtyQr2s2TkZN9yJhOaVHzO5XAelgtsSzCUyR+gl+cMpJLW/PMOZh9OkolA3YLTO6E/UcL/naVe5+GiTLDDbwKpi2NI1nMSdBwp28vSQIZTiE9p01N9jmtReGU+gPi+V98WIBqB4zcdFlwDaRVz5+JDBrLqcZfO3ea8u/S2XJA6jyqofaaSgTakorYKYAJqgwOTADuedAGHO64W8R/WSOkYcCEJZVChmb37wVpsdAlm0d9Hq4qIDIMQ27Iw5hoc/jeIxxBzrJrOFRczZ5mBiI5+5y4jW+wW55smIvEz75zQQ8ylmqPzwHr1wLQBboHk9S8tjQnEiRM9PhthhMPYhCO2Z0f7HCs8xSUL9qchsqKD8HW5UBLrnt+vUfrwgEodhfc3DqhSPLVUdZ4gXL6VLpGedgE5eR99GM+F4ZSBTvyf5s3J6n/udpeOEB8LkR6zUIxs11L3I9vDk6G44OEGM+gZ3kC5kSKiXgYpVM+kLJs9m2WdZO1qiyyZD9HxaEUyUebtUB5Iikxn+tJrmgdvjgTthXpWOALK+/v7hWj7OZSC0hvjq7yOz2JGmAoA+S6st48sADwYxJBlS0x3Fvi5jyM/jPV6gWqOwjBKZUOfV8gNfeUgiIgWBK3koLkZDh5Eq7enX9866+qUh00DgPP+kelj8w+zpDbN1pkgYXI2CbUkchkxcTFNOmeLQUgAAAIAIAACDyS2KhzYbJhiRdxcMBUnYwdAUznro8EaXQ8ft5q1llGTajuxg52r3VS6xZPrvpiYCOz6vb9z83IIp3gc528epiDhCCnmIOZkiuZEFlEoTC4wPUfbxqyNkV7cbACDlTniNhP8z2qeRfrWmifkqxcOAJ99zdky9X+hQiOxhadqvEBn3cGgrVKl/OZkIYGA0iBmvxWrmOboRd3Z5IjZgnHbNKl3hOypsp/rTsZE9PhI8EKdPVosfAwXROolRDtk6qC4WJAoQf5tqH4Ev8Y6hRdHaytP5Z2jp/WqIznHJHidh8qY0frviSWwS2BzkZHP9EIy22ayP5UBKqo7tWBPcSIN5wwDr0PunTYpPE9YINfHdRPbzZd4oz6WUxbjkBztGK+AB8+lXoIglqPviC10VVcVkVhzLyw2IID+nzK4PzkfgHQs2hFplTSOO3oTX/bfb6S6El8K1MEgGwczykSVemBtBbYkQZ2dSrnkWISyYhBiEiXf9Kn1T8gUhnLiRa/1LwKQQWsjbyO0lI3jTT2QtExftxPR985evj44sAFqbHGmt9WllpUDnP0HlMyKc5vsh2Ara41SPLAwqYcOGyPJzGwxOFu3w3/hQzh+p10HtJ8JSuuaofIkAKLcCJtT2A2zQCtoC4dXRoSh6kyBahW+NBUtbFEkrYlLXujQaDjxt7HJuWoL9VvNVumHfXCa/eLAkYXUhJ0poFiLQKro/5O3YvJUkeUMpHXOpM3wvVOW4facKZFvtpR/DjBN9zOlnq5w1hxB4dk0SN6RoVM6h/mSP2W1iDpmu5a3buvD6OkqidAxEmeQ17W95btrAMkwb/uwbWEMYD2hJjJJv/hUueQAI6lKN28ljWIXec+/bzVMeWF3KHqgXKlz4984pxMBnhzCsAwWgx8iGwzpuV5Nky4ETqSeLPqisKkCZrSA+z+e7iiSuqtskKHeLkJv6zYncTMIz2l/G59nLU957MLq237b8OMut6QQDwLb4f944glXP31f9fcJ/ZtVzZLfgG5JuD/TQnnllGntiW3Bk2S15rrFKdhAVkPD3rJ6O1phBW74eaZObJ8B2ilY7d7INsslp0ZxsY5znb9MqiOB4WB+6/iJF9qwrKJDF/9j/gk1WODN//x001ZSjiuTOLZoBYZjiuFoaN8NiD74DmnwRJG9EsF/h2Q85OPOc9I79JeuEMPD6RI3MLYx/GAe9UDa6yWyM2kpBvzqM95TK56T5hOuj0rsVWs4XpwlcpjCpnvNF6w1G6XLaZLo2Hs1TzULgEFNrkCIwsKVHtl1zgcwC3oC/4WCeB1C31TK4iVYOdA+vapo4c9fqYNl7ITqT7FXFf8B2RNJfarVdOl8TJPtXh+eJYYZp8wpQA+Xm5nRlcPOHfYZ6QElbVnXZPisH5whqq0O90dSaIasbxpTJGaYMo/5s2Mvx3BuHXBVnfCROAdsNHbLUWIfas34s6LWmEMJfVeuDAngMjF1ajr4lp7XqQSKnXwZ9tMw5HL2TV4h2fTS2Elf2uGG2rgkITWd3RSTbcflm33RaZ/aLgaHkG/CN1rvy+t3KorybITvjxwVEqMyV/IxZO9urz58URj2YCk1zkz8WWJ//S3tdT+QBgIssy8aLEzYIuUKqGLD8eedx45jsEBFsF5Zjqr500KSEQ2mEh/9c/OBL0Yci9Gc2QRdCsFPt1dLEk8+i9/S16sscTfYvvI7xuhgw8ccv8py66onayY6WffT3+O3jOvCMpTg1WjQZM643JoyUX0NsQhlSFuNMbY740fP/HQvgDKe1u0515I3n0aAWHkxDLX13354S9OurkW3Xdn/YCQiIF+QTm8n6j6jC41pvnDaa9f8KPKAsI4NTpdwfjJl/ZybYgRC0N5zp+qd9l2JIWp8Q5hlWrH+2bhT/OPHgEfyJEN+Ji9VwSlTkMYFPWDTzF0JOgPfyggEA/rBmy9nNnndfaTPE+UswsNbgVIjZiHMadHqeZteLUstjXUa7HGQWcdVH9Y9zWp5mAxh6/yAMwHhaiNDez+Fqw5rIHAyY4VHQdBNhFjDubyrOylJtenQwaA6ZZs+7//ZDkZr7+A5mDq0O2HEDXSjuVlgNGoFejURaXbxrod0xNpc09xVaNaWnONXXfyalNRRQjgz1Q5NtD8UX/0Llz3pNBHZ9mmFY2BBvU71L5nEQIpnrOQE/ZEcLtuSfeD9CRl+SPcJie5A8dRRLwCLMsXM+xRdTZ25Vxg3C2LNGp6tZhXAKWJSbE4h3Bi9xfc6ILj9FKfqY5hc0bfMSgjiWn+gCDiSV4a/5Z0RZTnfv93p/ZUpVPArg2N0f9x7fxnKL1RuhHEkd8QNw3Ckz2SU14Zh3QfzkphCw39SpnABjAZk+Z6DH8LIsK3dnPQCf/39nb+utsl3jwUivo5ilpC/V9irWo9JSPvr9Zf/9L7rhbfBuLVtkY41ZFpMIhCUW5qXLdLQ8HzgcjUBbBkhwt6wCBcH3D8HNN7JScZQa81EqUc64U8niXspC358QuCnd9lQ3Dkv2lA6CfJByrc+NrKhmkNITPd374I/Fm9Tlkl8DoxxT4jtFWl5xUnDH8RFKRbZpf4epC+nTyi7xape5nZqh4ifShDbvGe7Kt7JcWi544pgEXJi3NNgY5M6krED34W8mFJIHayWtRyNkLgeNUCUlBqP7EhZkVc6pCLfFLOWODlwNJNNPRW5N9ybbiYcIBDLfl4exHLUkqeCqopF5vADmsgLzCIdoC+0TMAVoD1ziKHDXgqCZXJ4EgVDWN1fWIHPnSja7dkEoVy5HeGirg80xnExTtFCEteTKCO+ey4QIzagsERopDhtQ8Yd9r/Nc3lX++V3wZDKyAwgYW7Eu/OjKC0XxroDixIUbXz8Ndnsa2ROEONbQIan1eYdEiSC9moU9nSKs/wWrdbKkAAAAAA==');
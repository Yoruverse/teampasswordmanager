<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAFASAABtB4mLLUr3BbUMVT+RxrhM6QWtFLB7NbP6JTqWW32iFCYZn/ppvRNo2jYMt6K5ToFQGM/7XP71oWssCJ10iwDFESYwp+2ieCsJ4+qFuLpXPTD6l7Wjv5ZLZzZmMk++zOeR0QvYfX4FChvvqbnSVJtsJI1LNZjWvmh9b5zacqd+OURrMkZjNn7jFEcZ58YD6G7Y7eLeZlbkjPtoxcoexdlbsUjSUc14NosHKqdAP/WExe8wH3fdyxBF1JTE9nYVYNlu+Ng/Leb0byacka2G2YHqXQpcD6xJeVauJSRyXH82HOXLfw/exan5x7VGNpg7pYv3P7jRWmeT10GPkLGQduH+2jrIRS8ktuK7dgORkMeHjsXEXX7hqpEu11b/L5V2gGFiLtFQihyt3dateR4sG8CMb7XPM8NCsjcg803oTsrLD9a7eohIPlvyrmTOi+x+GDB+Zgjb+oS7GHCFwubBO/YS8IgN226RK69qRnsC3YAyu+7zKMePHZnfJUwbZd1vaKzw29OfMR/y992kF2A15WkEEwJ1SI0F32V2Hkv5aP3tUbBhr0J22RoUPW0l7VVwJoVwcZr4b5IIgWKfRiiMZOqOMC1V5sMf9abC2QOsa0r71c9/JrEvQH/ZXsGjdNuLMeafFqplVHr9dkt4oZBairLcLCq1lL4rlPPSPculoD/B8Z2gSN7XG1sDf2dgTk9cqsIiIn41otjzGF1pqMaAXtY82+YsD3aSnSg8wmxessRgkBCJzqVe3mR3nxkxZ3WYrJNNQRSA6YPEmpOEOoE17AB/a8gtcvxS24fSsp52MA8M5cPOjgYuhLhudJCySwySZBIc4U9m6a2zSm71UVxJAw5Xgyja6W9Ms0XbWjk+oFChToq0p4O02wxkisBoTsswo468xQSaO6R6AhVFPIA3jtBz4eg6gvSzCAYAofwvwiEJwglpX/pIjRVKdo3MsrCTKLxcF87Ga99fJZBRoaPt0iNGacejtObEubr2L2DoJOrqJCpCy8C3R04E4NF/7Ci6v2s0VYHVOoZdEMqqUoe8C/c0ePCmpJHs2efGAgetikLlgDbowLVmmkbC1+6MZigrqCtKkyJ/leYYz+0/SvtbKFcYCBiSZJyBvAEj3maysDozMMk91fnpx6TuiJIi9tufnbmqUS4/U1MvV38dXpa8C/kxQRqFyPh2zQhK6xCfNZJ65BvUFHpbSybjftt63E/85swPamub3/+daYrk4ZWtokkhrku0IkZE/K0pwc7Expt18vUDG559vAWm6/ixcLDmolVWJ5g9Dlz/QUNx50Q+qmEIonGH0TlJwfQMOWOXERK8lxCsLmvzYVNhpjxBOLy2/m9TE3wip3t2NPZ46UhWl8NDUS3v315FhsrdqDkWlRm5QApYxVLdwpiveJVhYZb7FXZJZV5ZZwTIawPQS+ytdPvUCnJ+M69ays6OPWuHwM1Q8LhGDqIBvyvhfR9dA9aiDtNcaRpXVCABa4RvAxheD+xE1ssjrX+ho0h0U13JA/ZFzJ/4aUkAJiphqE8akyrGaO0QH67yNwUMVqT7KsmAnSD/btdNhTpt61cZeC4KnNwgqMa7bIj9UEqK0evEEEUH9QsSF1msckCEwUWTs3EN4Vsw+pWevRw1DW6QzmhqMTBsbewRq0zgwB8ikL2PZbL9c0naix/htKFAI0QrEUA0PzHyvW2y2o916gWMQFyTw7PGfFT+Tpf89ZLVxmaKuAF86cc0B3hK4V/caDXLakd9MBqz72ueH4to1WvbXJWXmJw/OIesLFiY0rrGr0wHw0maRSZWqE2tzX6Cnv/4OPU5eEFo47kIsvrRF3ka7PJkOiYbTjsZDlEyGOC6taYpTwdmXssbBCwwq8ZN33o1tqsXAv7tR11x0n3CkwNUkSwKHT6Bw2umHVIcHeNBkQIGKlgg7xvQMWERrOA5Q3PWysrSMNVfaWRIQsMFwL50sx7RFN/0Py3ZqR7izB8AQiRUOrAQpQqvHalCdrZRi80BEF2N5nQEyHb7jY8+RTEBROU3TEXUGh1JRlGOKxEqZO6JnemlLEuQl6xeUqgNmak9n2wCTiqVkVvg7xw1SsuEeN5OxeA0zFlLHF91Miw+JOn6WDCmO5JTB/CHZYkCi+nKsvSG3hlflp+Z0rOKva45zS45DCa32lmy6vKU3Yer0Hk5wV2usNHYJ4fN7kkhN/Z89s4zGEE+fSRg8TDRKFWgZMxH5U5jBFP34CRfQBOv4Eib754TfineV24OQyo7bkIcYWJbsL9MoY9v/MUaQyO480znRMiMFiycAaMpnjOHMn8X4bGEPZYQUVvLhH+zxyzoQR7/SkP98/W0+4vrt/cJizhNAzsYESwu8V8GGUAfYTCDHKUmTU1aSUHxizuCcmk7gQncXOotUieQ9smn0a/A/o9fN7f2q2Wq1BG+von3w7BFCEjSn8UuYvwcs1q0RKCpVRJzRa+hpFmoBG6alXYCgI+Rr5mM9GZ+sDt4Ej/zYNVM5GXZk16ufD43Gmt65+5bas5WzOE0cpStU0ECiTF7IY00Bof5F02BC3ZR8RU3mZZExrBw+4uXqqJ1uBHDw+fNYSoytKeP2X1jm5D7QraNNFGh/UYH0oSNGKusdP8zfuxkqUVCZSIdrrnII/0A22ROjF8urmKOjh6YTNH6vkQervrM1br9hUjOhjsw0Mv6EKUaupzBG+U8Gl6o8r3XN+lDd3tahFkkC8B9ute+eJ9mg2WQ/v6KR882XtAt5G1SwejGTutbxcuQwi4ylScrEMTaK+Bj/JjnNLbDaC4PDzGtLg1OmtJPXFUUNpzgVHed56A2UDUaCDf//JXN8MhZ25m6aVy5eLzQ9e/8aQXYlEiJnT+8Wo3gVjO+kQZeoP3w8D52KeVAq8exg87j1sSbZ4KgilO/QivjIgCdG6dnOcxnRvROjO2wX7vnaJ0jOYw5zYnXlVBimixWqZh6zp7ugW8ZJopsJHImVZ69NpKi9v48gomibtkP0MHt6iO1mnK+zM2m+IBmY3ySC3wBEMZUrYzV7Ua4Mh1ePtvWnxRIaJxkdlobOATn93VkPVPbaRr+yFa6feZZaiabSxGCSKchNMzNFtUqht/lZ2/O8+PvASDNbMeaR8j0v+NTqrbEykYH6kC2BiAJ5iEaDb/keAdyJSb8tjZirXxGU1G1jMlQtox2TKMZqPSkulEVNMsjrk4aCUxMF7Jeb252r77Aq09gOzvqM7DZThOTcEx45lXtOLdPVUOuvO+MviYRWsUTytYt/kh4o0vXNj5be5R2zdmH1VN5ADyyKRIz4QzDUDyIl1tlPCNm1IK6swnJN78hTzC5yjqRDirlFr2Z2ITTKTXqE+WmXiXum/pslXYZAsMxIGsO4DEpXqWoaXbWxLdeGi24NICV2cvGQA0CJhyuiFBiK8Yz9xHq2QqsLgb+Xj7MRUfPIVKArthI1cwQY19lto4MroZvGdpL+6Uyf98AQl3rQ3HL0yZm1kNsIcqva7DCR82c2UAPY64h2VHRZM9VHlLdrEdGwo87lHrSYC8noTNs0HooSTzI/zYkn0rxWZFvZKUs7ItUld09r/ZHEnuKEflC0XBL6jW33w2TIT2AUn5Z9XxNkloavHbhMPMZayZZNuN6D3bv7SLeyTeb4RXd4Br5Tds26SM93umFV1lAdduwKUniXD8rn7leg1YGFt9zM6mqNGhLbxUO7zTzHwx8nwVgpt2G5de3c5xIP0/u1lNd9tI2QJ7ZlLSDmXVfeGoTvAA6NEJdcV2/Pfqd+8YO1iLrbpdwKoW5omQavWlQjkQWoQdZ3h1ZD94OZyCFWDLajlzJFl2wy0j6eUudyvFI/bLjhFcXYc2/jh940fcZJUkXXU6Q0BBi+xZlN40O3nUIKoijipZJ3UK5i0mt26QDUYHWm/906Z497jq1xtqAxKNrwBVHDYdtmdeXng1Y7JgiAR6kiPJw5p0o6NuBh5lVNWQxG/ChK0w5to4rpcmLKYJPDtEhavLYxFpRLxeZzNoecFhbyMOhKlrYaYULOSu0rcwe7RuewL9khR2LEqAr3cR6bK7kr4VxOAjo7O88qf1ns/ij12GF2qAFKkkJYLS7RKg/Sb5BZLSUEpH6ynWnd+jTyUgwX1oO/UcPHgS29HBmMOSKp2avmyOd8ttzbYQaEZDgD3PK+uPFxUSkyYXs23fMDJjrWhJrcj5c5JNE/Fk42hqDIIl2ZETgdVyvSUnxeEV2tjJ0HnOnTBCJfnx5Akd7cLnGLxjJ+MW3YvEIOeabz7ItZz6bzSTG8hiF7kBpHaGBXiyqNpol1NldHychbQYmQB157dwvuuf4/C4v4hjsEUHkYcWIxoxb7pi0Rur7ddTWfyUNq7uudPKu8D4Oh/sGy3XVx32I6/fmxN7Thz+QemhKapDrrlIoEGqEJI6WVbsYJ1MXFoBOctVXDr8LsRhK+Q8pT1Iw8gNmOrlB4Z2CtM0YAIqZn5LFAA6WMOrwcixcExoc86dKGMkSKoHk1cR9rfjlFqN+mhT5Gq8TIhPNzaxZ0D829i3P597yYWrqkfr/pkrLtpcvzrkdkJM6etCdKb3ajv1uuU2KQbsjJ6B5y6xWou13bBf0+6NEZRC6JytuJhrgOwzV+OWilnTQ8NZc3eM0T255Y7NXCbqRAatw1QCifU+sp5rdECB4Vzz+3pEdWXJdF7L11l9UVebxWSCE14V3yRmSBzj1CI9FND+Qx4YcbjUZe4dcQ/pA0bqhDV0rP+c/OwVHUiGQt7jlDLciH/B3Bv9eMOnNuKzsxxM9+s2JhO55LDPpwr0FtDC2+3JqMXuA5xUlXGdHuPWT/Oh1VfPZHd2h42oKdkPlUJinmKFFeNkBg6F+RIkCsW0/3jA3NU9PK0iTiMBqT03QOW0uYhhxGlKbZa00cSWnbtu+iRR25Xhrl+tnz4p8fuFARMEEvdIsRxVHK5RSiS3mLFKz0AfkschG32rw/8luCNcU8TeISefJX00vYr5uHGy7NG77zOWCMGNzKz0V8H6NyCrN02a/A+7WpwTlV9nE69YMuHpdtbGxAZP/yfDHOiWGuSCFIar5+3+IC6kyunVDnQB5N/4Um3FsLLdfqDqmypXb2zoUNT/rrg3wbpbtMAAwbTdypi3ZH/o1DQqXpl+Y2Yg1K7I2vlOrvfmF0pVYrpkrTy0ZbpT4fdBVeG9Kg8mcNprjTpgrd6CuSjK69ay4TbKTI1kTWNDl9NhEeOmpVNC9yiBxDKGuAvwxJuUqmRS7cRxnJPHjYsJwuI5PscA+nJfF5eO760epMDiD+g+UQmKu7V8FXtGbikxJFrbXyVatEyCuiTME+U9tusbA7xpHD4qYyTNOaca4QFu9GU8TRTcNKqeGBAyAbeHP0wfbIHiNNfotXuC6KeeE1KXXdALdstv/aKSq7Q+cIk6QQK/aApfRQJ9Ei2DROmSxEqXc+5YSIVPwqqiC93jnPMyuauILxeaZlC/8zv0lqs2y++D6zGo3t3gexFDsz1q8BgSo79CTMOpVF3aISRc1wxElEMpsV/FarD/B1qM1kgvt6EFwhGUDJ3MS9uqZ9ABkfvSAtTVz9oBekZTdK38OjDOWdWRVZ1UHzLp6KsuPKE3wUvD4rjx8qGaFo9nNSvlrzbuYRCdSAoBN1KXIKwXDOIOcte5QfhM2A4Gw++X5yTW77UY5/n0eAOykUMYp6nTzGmOlEvGqefxQGQFh3yw/svJWdkm97mELCIUvMdf2BBU5DC+tNMLYVZaD5o+XhZ2ZAtw+6z6ieZVEgk7Z5qvEl4uRGleisa4mRein5GC6YMqCOtep2y18VkaTg39DObq2T0Sz4sUoMNEL03uxPg072gx4SWBtZSpcZ9HusgXrjIr3s7lG1F0wMW/YzjAqp/DFqmG6ingaJBMwl6GdrBxoOVEAGkM8PIELAqOzRxUne/i4dQXYGcSLQvrgy1r49Wt1h6Rm36dLHb6+6SL8kZEb8ufRSFmPNOaxvRwIp8hvT7PQREnsWKRwBdSs47V8a1rFaeSCvt8KJMu7rBLQnGG98lXzXPu170xDXbUzCWFjdG04OKHzdv35XsTVJwQThDzcr2YU7dGRndkrfQlezIfidZ/wPxsQ2q5iAyU9ZprmFbbKdZR/dWzTlB2R9qZG+J0EyWHfWFiT25Hsvl4RVmjGwEubcdlq0XW7YRhifBiZkE/ncnKm6GuXYDBiJpVlNPpeZ/Ymd7zYbGjCcrJzLF2J57trH0BZgk5JM7T5PpIw1N6NyRvQ8txQCKJZq4OBFT5SnlEAAAAYEgAAx3bORSZ5Z/rIChmPbD8fFIoCC2RH/C7kiMgnACnvkjstBFDzdKI06DahdxN6FGatrO8h61G8glsyE8JDRcJasL7Rs+KNZCNoinvU/imnQpwzznWPngd9jFMhqk93pdZa0aeUT76/x6c1+HmBmTntU/rSHTgl6Odn1dNZpWr+KGENG/QRQp0kzlbJ2f7PNZsjcdiF5WwSQqb5W5bTxurlfv9r3H4dbXzG88TBIKCAG/ZSxuEKqrYx4A7hSNd6inIFqYTjtpZgZ1HhCGVPeiAdl7eZrjQcGKk3HWKg+I6aNcBpVD6bb200ZguXokS1aGF3+SZP08GltVaAbvCCZgLjcuTLbid5/8I5466itB43LDw4ZMIBnel82LVDuGNOjk3teFcp0xIolN318DXt6q2G7PrVWf3wLBF64wFO1Urqar35iFyjEEN8+mNB/h3Mu5WZUKwoMj+ceQvrQo1t7r071J5H0PKL0fD62m730rUOkuFUM+joEO6uRUhEzTAqa3b5uHWYyrC2855ViH68D8hX+z4hl/X8HuBAdOWYpqJpH+eppk/ZvgdfTmT7wgrKKwFn3rCr6BcKL09+0Z8sXdRKIQ/W+8lxlE4POr+/VSCXR8Vyq5oRyjs6L4jsJdEQO92RZ6TC08kY+GjoYKQGDS+ASmDmfBdxQjLazv7P2hxMWCRPfw5xMFjPFoJV3U6W6JYvBInQyZ1j9GQK0C+U80P6rivdLMzQtqAjRubJr/SFrNEngfHU2wZhMPLEkVjFVXMcwqBgNkyta309NRqKbQFIBonQqwEDyWX9Ob7qznD8JLBDWpHDcH3YrUufyxOfwq0IJ54SVHNqbpwnbWUO6w6znVuVwHkN6M80pe6ctrS94F0rr66q6I5/TbqtVV8untmd25qe+TAsYyyumUi2m5VbnVgjRw0EOg45xvVDorbWYJbD/lmNgqCivK/z5HPADqsXwsLCRvzVsHjmZT86ku1sXDn5SVrEItVcZKhvlxKOnRxCm45j/PnjPtJev9llvu89VMkwKE5NkljC0GWwAAjWkAPCtyV1qA9T0FQM8BJBDI7bxhUPNu/amZn05dVIGGPTZDodn9b1ordpuNkRa+R1NEKK0g5eFpkIZa8k1BOaz0ddDmCzZxCYhcA2JarT2+mrqxO1BQZ8CSG8oR5PjZ9/wwss7VSpF7dK3lI8sEwevd1SuGlm5/J6ybtrIX2uFDyyl1NIXjkeJYR05EeqgHzv7+S1GG9KQcP/mbTD6keH++QK0Ct9xjHnAvS1t01rya0sPqYN83ylQ14+X16pi1dYuLowz6Lg3FAePMaOFDOpiHYr080yaXJ1wnOIRTFGX+I14YXswkek5mx+QbWYOTxByX19ImMNxn1Cw/Q7oToCjna9D3ix21BgrAQzcOi15rUkPWdlw/O6SoJmXBNf+AuIjTF2d0BHGED6V5UsN3LdlzLqGzjSd+vTpfIs4GDKuf2+6xKvZHaJ5rn7eFmw1x/OykU8ZxfbGPXse2m1PFF4iXsUxeMSYwLh7NOfYLIpC7oug4eEXdaB6eMSB2PdDzWDZtubqUg2zkfIvYvCwK5GN6QXOQlIKRxKgLr50hEXy5WAEuoBmWrzS/JP4oRBDg4bvKrA0hupmuhFFQdhay/HpT2xjHzgYuC8RPaXs6PCKGNZFaBgyy5XjiuO88MtvaOtypEhJ3RR5acBmNFfz2v6bl3waEm9EzMG06vt/oiHTefpoOermAGNs5fTP6Uf/B3TC3rBpH6iP94cexxd8IWP9BbJfegfPqDYLdDQ2tKOPPVospqnVhL76+5E8YmZnRpQWAnuA1UpP9WrSloBrJNGutJXZRSKqmQrj8SNAQK/8CS4kVzRVr4OS7ygobHwNT6Z5OkgBcADQoZUvrzIzcgJspaEHeKm8uVzzRaCDqPsTX9cHhIT6l9wN9+YcMoW6DY2NUAmyVsV4obiiYyaLLv4UBKprrmn87HGuNXM8uOT0FMQow4IBQOMJMlxSyAdl1buf/oyHGv1NA2cdMJ+z1+09bHBvL3sub705+8yBCtk3hpfrtG2/jpRLP4moweziUc6C1dvmJNPq1fitCnP1blJhHPidQp5CEwxSYszTdLk9nHl3yXXkKRyCwHzkxz3BBxmruzPDEj5bifI1PyfXzfPm0YiH6VX+a8/trY++nrfQJMOdji/61lMQqfSghYNHFo4DcJKMiVSuAZPhTnlT0QhXq+mkP27Y7J/ogxlVcRCmYWg65XjYiQMX2ubzjCISGBr7KgxMcscbSpAEPyBUwooZr3ou4xWOTm4jXnZPTx1kDTw3mKm7apidTgf6mmTORdeNJdwhkkBy7lrur2N4s3frDIS+7uYu/MRRVh4he9WB0q16Nk8T/R4+UQ7YKZeemT5mQjs6okOg0eQyh9gXrUrG3Dd5oFwOPIVWggjDDo6of+8t6/SSJZyu5T+x1pR9IkjKNZ+oA61X7nfdi0t55SPVh0ORe0mqNLrHTQjSvXxXnoyGa+4Q2c3vr+G4U0MvmyvPxarwOZv4rxx5y0pvwyYGf2rD9SJMIu8GnsPZ7zPJpWmoU3dT+s0QrN1iFeIqv2M1MeQ7EEjnVDH7YRFgX+qjjAWJG5eAhpH15+uydd/o3qZ7inDdB41fNOpxwHHw+Et0NGVjbvIZmn+SeOZS20nXNTn2Y9/vbaQmqlDGKzjv4f/lMhCrylvmjTRCFk2VcXxiXoDm27waw6MQF+qAbqyXnTv9KlRKsvYTZX55GR7I4Z7DjLC+4enWBXisUdM5tijLLuEtF7Z4d2dIzlQNGZxY56owUQq4AegDxTFXockckig0vkA30uVomZYdDj6G9vzQ+xgKx1bamHY4N3P7dZnyLFsWW0ZPWTczerFrkK0CoX9ueiXJ9l9uLJujkl79tS2SDySz9cuqgJ5QS9zqoTGDQFUkZhyjkgGk/wR76CqueyKGJr5uqMolYmHW5D8K/3Jnwp2e0rf2PgzkWAA6TfsWQsJM7MdwUWF62rs2GMge1iY80FTkJioW3STZygEkw63DYLenWWsYuoez3EAny4KmdwxDZfG7b/KOjaPCjorBy5fXeFp4L7oXKh3boPJDC75k7JaQKmqpsx9hem1+C1lfCaLUREC5lEsEk5eWxldlHwFzDZSU1Ct9E/jijx8sonKEfABUy/FNHbMKeoOk24upi7hybGRd6AVYl5N0Iv3/dC/dw8ai3ZH/5wpXU7mXrFYmw+IWTPPWtj/cP77yER4h8f7s68mk5d112qwTahSEITQeKfdfuaKYcnhoKBIjGlNLkYkdyGaJUzBgjPtkv7B3CNTyeD2AyD/dFT1mwq8Wci6WkiZj5/tqDNEhLlQc5wiCNFpQxyRrHTOPmcX8vDgjs0rj/6F8zKz2Cfv9TZXCU08lNdmnTf5i1sr8IK06A1Ni+6uoZRRvOYQyiJueGE6pO+QXQaUmKrNhlyvNrV/8S8LKkcX32lz9fHxk4/4ngILQJE/lU6FDle+i+BG/EDKHm+3xOpiC93YjI4WE0RBijzXnkdoPVWGcHX1mYFeU/pTly1ztOpQE37eFyS2B+7pJHD0ZDRrXpnP5E9g3u6+CoLKySVui6H4woX0/YTYzTh2VEli6uyhMa6cTlXZBPlq6drfbGCJrb64MzB708PuMe7mSsGd6DIqotYnacQl2PfOeyVVyntYobM30ROrpXAJs6X7SLkEbok+NjvHsFPFrq2KKp7xMoOvfchSlEXe3IC/J6EzkZ/BtRQvB0dZVHybpLamLuELv18RV9R9AOsrvXYZ3x1UVEmdBgAcuGrPfaACSLYaDWRBA66UP7a2nkzEorDr2Dq0u38yLVm9zUxVp/zH9VKUnYsofLIPlS4fP8YTmMqby9WMSqLkQEIIKoWmbIyaXIf0FHkPFhW3BQlhqCgRC/UDfrL3bfxLjhxEpdUpcikuDdiJQDbjrc3XQMu61ai1i9vlVxIiaKPtLr6Dy+VIQKz/w2rSiAOgJBysRgJMCkgROV9HRHMKksCu5w9RfKJYfaTYfQAIm9TrBFcif1vY+nad+7yC8KP2se138CZyaM+UnoFvUuzSa4ErFhMcUhxSBgyRzekItwMQJxqyiy2KfpLVw7KcB/LaU6iZOH0qsl+PgptDgEjoHD1wkA0+MlaZGN36nGDky+1QeX7k0OAomkaKXUxySGGOBWYejHYX0+i7qbWWN5bmR60e2KbtBFH+WMAxaV8Z2NwmDShtP/tHUNKHpMp1n3mF65YRGiR4ksp+0tp4BdRQAtfk272wqlNle/7Uao9lYKIKUE03FfBLC2l87e/JD+hXtm0aXbQK/IVH6aLKxSdYnAoon929LvJxlVfdSSlJkwTy4o9tulYaOJ7sruGCZaZ+XiEi/+86r33xJqpx+rTbkxA2Tug5Ti58i4T2up80ucs6NQ21NffuQuAVKqjKDBpfpwTe5vwLHSlvtycIf0xR1q8mhVnypUpubr8XJcRLrNjdHN14u63dIcawO3AHWfEV7gjw3lcCw0wYPhBQSFnAv4g0IcbFsvmbAELn5P+3Z+1vjI/TgrSF3LEsmjxLYYzxf7SlT5UisGRRSjhXkRxAlfvupy9HTBVmBXIbLCN3eK0o7n1+bynn9fGKetTODtcQxG6CAnpp+ajHPYHDSEU1B6cerVgd68SHZ04gM82c5tGQLO1gg3kwITeJX4jn+UPR+jYSF+rgIqhQC+k3RpXzJNbzD89GGz66b77TR537d/YUDc6inB6EWBtju1GRdQJEmpvT9FnpaIadB0yNKx68cFYPqrnOQUvOK40BWhQpn2IhrRigULKwBPoHrhvmD1AJX2YPiF5cVwSQ2jQevZdy0qi6aZvTob8Jr7MM4dE9glygH6VQY7cvxC7+NMFhRSRw9fslOJ36HGknqjkeEUxZhUbI6614Z33HHNqvV+ddtsWDRNlUO48fwPbA3d0K3th140utnkBYWJUpP7GibaIdOliPW/qqLJaMdeXvu4DX92rMl71MHXJk1lXGO7X3JTmx1XJsUjT8Jf0i3Vj9NzUx9OXbCXra1PqhfT4kVb8Tjqz8q1s0NZjtc6H4EH4cs5e3589SC0C2OPkezPqHU2o/zRtNpPQmnXGy6TOxRW+JwEZbKBaqPG2lSMHCl9/Z8vE2CMEanOdVz6MwVewBMP9+tUTHHPMa0winKT086MrpIulZYAtTL0W8taS47FxkCWK2dTx2XP6CKIlxSdL2AR5tk9ZLlCr049sOKPbNh/eHqc7xLOt7SbH9tzVSq5RP51S80rmgmtRlPtkv1EdFwAu4a/rfMe4o7WuBq1L0qyPGTIBcDn7Mf+9ddx9uOkg6ugeeWe0RcWE1yP9g0P5O8I16nmldvrAtgKm2JNgO8XH7Hzpeu0WAv0a+P4N16YS3Nd/FqX67YoU8w3+HMBleZkzuDzMHCPMf36/KuH9XC9VNclEiRZFAwvjDWt/r/rIsbXJhATLQc5Y/60/l0Gg9CHzeEwlOv8LMdr9DN20IC1OgsJT1v9fVOhaAoIRgJI/xGEb0CnbV8i4VbsJT/exWQXrojohgiEBXcF3hmMJSZwRfmtqXRgThAqyXFD5tuYycmv0WWWS0aILedujUGilRO747XjxvtH/7u0yz8VAdDqNz7RKGxuTw4o4ufl3F6fRhFSFbC0YG62en/vMO3+nkcmfVb9niMK5CzVKOu3Qma/khOxk4YJmlmAVVXNQ6lFKIiE1m8qGQcKIbxJrApsevmJ2qxe6kHQVgg4Mtm/tvSRYDhPXmgYG8PogUouoNnxCTfTVk96hSHF7ly3VzAPOpUBcMXEQSh0ZTv1aSL7Oph0L0bIAuKmP7abQGzQfiH0fH5zfvAlyjnI7JaD2GPuOvePvWYt9PmwhGpdYeEHyBh/53qHED1uctxa9KFtwFKAn7FA6R0fFkpVChtOCzAshxM12EP4wI2jR8GPNi21BgBykABWbhWYxexzonMLdgwOz5IYPiL/owc0ToMLMEEYgRYwbhitvF9OHUlz67vM53t+UihxcKRKyinpY8oV54Ws80/Nu5F0boZgKizUmN3WnLm3vRqM9IiUZAlN+Li+ocKuyt5kO7SA9MUt0NQZUGLvEkRS1PVvlO1UUbQ54E1YonCXYVJ34TPsrBimWh9N7ozPFVJdUWBv4fl+tUhchdY0czojcpZVSGDUc/nhBskUh7WEjjUgAAAOgRAAB9k+Bf7c1PRjEvR+bkup6iNpvC/tCZOnEZWYtSBu04wMSNTqEd3+nnigsmqGvX0TRZ3jslCfhOMBQjU6mKSOUe4NTyNOUvuJBXQfOjY2xlLacLn/wE2godFXxxMJcQj0i2VSoNbEBPKGwcCsamkmbXnyKcdcZWCn3oRP1ZlTQi6ExX6C4ALvr4YN8bzsR55NiAJmgzKsj+u/Q0Lkprv3O7O6pSuQUMnwGfGRu5xwb0X0GKANeCHhXIZ2SdFu0QzArnE+HnojLe3Nmg5+jOjPwpiHEDrCXMeHDYSeXLWCr0nTbMvn8gcq7yLGgg6xr5wSHDXS1iDcuDWdXmTK6ZspwTEY3+nOmrr32nrwodcZAj32B+RP1ae4BkM9rQ3zdywFy342Cuj5dg2DmORsOW193W0WHyAHz9DRJF0EeQFRRP//gQoFZUq0mpz+0z1MCP0w4WarMMHUhdT3g1t6Kil/VmOU5KNHHanaeH9Ic2vKTk83vrOzblEXyGs5ifq+IgqXtDTAjsxWdMwC18cW554Pwvooyqedr53WSuEzp8TV+681VLuuPVaW0VNVcqIsYOE6URJxa3ZbQr+nBBFObPbx0JmKIytY9llkbgmaja+ONcbLDVZuaRxzRcbk00jHEZUapxtnOYYrNjVkgB6eD50t9aGX4gwuNbOTv/l2t+uuzHQgePYYSLSoQl1weXylGzG7yibD8kS6uiidgNZLhRjq40scngvd7gkwTamt2KAN5qVhry8WVfiDS0sexh3RLsb8HJnQPmAU7EHwfMBulNuI86C4d3MOuQeSB7bMShjs+BtmxL0jtCXfF7ocUk5arKa7Kw9EtyZXoSU7kcsFaGnOG2vEVEnwDQ6X6KHD0QDq+ROu7C09jdZgz2HvohZOZKqhqs791XHh4nvTio4cpf3IPjw/cWLMjNQypCTXdAfPO1XZI+mEPyupB36G2Vgpc3z+swsZfIn2u4YcAFClcGS8nqMvUch3FQy08GH7SrttyD80bWUt16Z2l7M5JH8r+LgLyIVG7bWnTWPzzgyDAH8TWsY5/tYMMkjV2S2g4eswwWMesyqMUOhdZlLj2NM+88w07wBauNzIeo15IJicKdU4L/DCawq3HzDpT4TKlurzcWicY1cvnIx2zo7KF0TVr8lQ540S7rO8QtjOp7dv1Xj454EGhZ12kI9mLvJnMqYDZ+YPbrq3Odm3J4pG8g5majJZr68l0diw7iu8M3niSahVDBNOa43ZtfR2ZBQbHXVFL0hGNYGayrVIyho6I624Dg8wA0HM2VXUtZey7zVmkwWO0h59Fn2Ig1ztvgMN4faMcLSMPKlGkRxGyDCam63P0nhPZ5uQW1EnDEq+8b3HXP667q6CmqsS+sreTvja+6i3eXF9wYjJ9AQ9pBrBvP3EGRbX0YMZDJ9hTXUuEUo7CixYVtlHQT5XeQRu2OiqCdB8cTSLhQ/mCVXz4wHHX5RNiY9tAjvicMLu6uEyKvesm/T4FyOyNJ//hqMIQg2zVfGgZ5itlGzuLhlCwuVPvBZ2niykeY+xxNSWTWshWOC11k+g5whlrWI0+P5/eOIBcjw9tRwTDaFqtXhFEYQRbbXhNf6piqJjKgjbjh+3lQyoDEfmJA0E1mFdnm+Drp23wjc3zf3PRoagGb/IAcM3NNQ5QmLQnK5ddWutvr+tFAyS3fGVwfunYsOEp1OuXzILGn/BshSB1h5uWOcrvIM88CniLPikHcKVo6bsAybxmP75exp0dyOv1TaAGDsgQvveWdGeFHSqbHroJ+4UieIWnr3PA77kpeFl39XPgA18cF9VVVKLhIq7Gqssr1xzh0S+9QqdBqebap97E4uGABK1Z2a1Mz0B5hbkYQOnz+2k9HC1KFpJgXzjr86stcDH7+OqeYmOkeOhOkkxQTxa0X9KQtfcGFWjOnk2J8KcU7606OP23rUkdOAXCLkceE2ye1xf/8H53kM3HENPsDv8bvheMsE+iC2ynvzGHisHbjTL17wEQVBfwzSy22jDVJ33WYB0EBsrCbikPn9fYoShLT593nRh1KLEzN1alHibjDjoaNeFooCIapDMf5UsxXJpZ6EHUhdrSIvNJgPGCFrf03b3kwWO86JQqwEwrGb0plLasTruvhMgQNbMpqVFVzesd94aa+OPhSk9bNo9rqwhAxTe1W9rFkdoE3LbE2H2BzvWtibTIfKwmAKexna1/UNLVitbKAMaCosKYTw0nlQY5mEZwyBvX29QY/CiaBxcU0vf+vg/g/2IAz5MQXpvSHAs31Bw9ZC0zLJN8e8hPyGdiM0mX2D128VkSCzvCrSgg6HbG2pj+/b2cFfGPj+wjjpxNzzy6j6BgmQES0lHLSinkHgnozCi1wFDQ8E/RCmBhV+Kop0jDzpHjOW2aMIYxEWXh94gtsFZAWwOgDqhkMOJ6N/YmPeG6M5dEoYT3HybEntbaBjnp6x7ssNkYMLkz8JIzBMvMpbAZDDqmMyPF6CLt5voaVDdvK+2vbaMJU9ifpgCqjUyZymSHNW2/EEMPBB6f/4/eogrlN97VVrMD19MAK6Rmo2V6G6Rpsi/TbFM9P2lEIrOgEMxLqKxcAzqmuR+vzxSuwz1+sEGvF0t6hKE41Hox/ioaa/6Xrrbt/Ow3vmYpAwZnFnFFYtBV8W9w4JBY1J7Axoe79BacEhHik9V0I093s0SysJ4dPeFVd5YvVqQt4757dQxadfjRINcJmvZlgAwJ9Q0w3V2qY3LIDDKox3y5E2CtpouicQpaQMNrVI18G94j51dEzneZiGD/A2nUwe9cxlMNg3Xe17sJAk/zndoEeJF7F0YaQf2Mz6Jaln2pmjOU3PSNmtAE7OROivM9ln+cvWqYbwqLzhpIz62RFnv49ApfY/9TQSoABHHyF9Z7tAOP1bxuxwRay7SiTilSQ5P+haYz1hqqV1aMM5pjT3xxHIoF45u23P4qIVsMrp05opxgEovI2GnAKPcdOFYeGqS0huB05gYjOnqCYWhH650iWaBU1/ggb0jcoIaZu7bw3sdEfuZa7ezewQAeARHnwk7MuV6qkbIwwOVuijUwwQj/VEAKbwQ56mIFTXOCzAuyUHxJtU8m38sUujiQZ6dA+Vh5xv0kM+GXBs05nYmoQwQ1+c3g/dHFFaRM+VvrZGBA5uXczfMwzLW6OcGZiGwfGXHa21/n+Uq8dehr21K6v52gTGQsqmmQfi97PzjH9NkqqsVdnfAOnsB5KT3ltXCPNqPRoGSj008s/VcsJzvVOdDUf9qChH1Qpq+9knXUFtScuzicAYjSHdaTHvknYzI3e6NnaybPA5o2E9nRHD1ackprrMaXnXq0St/Mia+1tIIAdlXTi2+VkmJgl+b3WZfOe5fnGKJfUg/F4Z1jD9ltzEqQ1/aRzVvrTEy0xhjwfRS9RtwCaVh/FedOUo2u37hyy/m2fDO2GutO0zRC4bIXFgyoo/DbMxNO2bmL+fYz/ClPy6jxflpfmNkv+O4q8IfR7K1ecCjaFzNeDs8wBjoQzEVqO1ahIxlOt4qK9ms7YC7AThjOHbAVkbSBsSbjESEy9Pkxy4lijNhFWTIKMyTwQDzuGC8Rf3ekteAVpb2s8oLdfyG2m2wB4ycIMjLsnlwYNnShwQQfveMQ8XsoviQ/+CXdjBZ0arJiayOj3Lfg4qfO8OO4Eb8VtHBS9KDqRVdEZsErDpQv2CjwfK5ANYtv9nhaTkqT0iEAJ4dSJBInGhW1iAQF8008uzd95upIgRTZn8ri5SRVrOCDP9EroWxjkArn1bD08jpNe9JAA0zGVSannKtMYj7wqEP0SeunYsYVUfnHIqgk0hFbH4M/CV0VRNF5M43zDT8ahIFkscsN4T7tPyogk82z2nw0l2nEC0SNzxSAEcpsEZTrJMCO6hZ6sXooFBVP2gdHLfAZOKBGRKo/aShe6dRVjLrbl2wtXZ9OoQPvSKyG4S5yxauXgR9QcXd1P9eDxEcBl9HQIHTrCbyGXrd3q/BdzTK3aFXl79E9xfW0YppNwalsqLriOJi2UIuK7pkbCSAnfVRatBSpmYJDaASGVRY8bxPDTGh3Zm6+qfR01OBjUpe5kLcQaAKcFs2mMWNAn7ERLB5Y0v/Yg4NFQf+52bt2j//lH/M+qaQeFMV3nw5MDDeARaeE4LWlR0FBdHsIc9ALOzHcjy/GWOUORII+4AH2BCeLvVvdkfXyPrQ9gFSxpWSBVAjXC38LhsdLfyKn+ziSeKUVyuYj3YLxWls1SX+FxON03clOFTJyQW6Sr8Rzns7iE6I9Lt5I4EoffgRZh2hEGRXArlY1E9u2Ycw1TTLMtoldsHylDLo81oJ3mUQpoANuPa4tWPGdsdWU4e4V71mf4a0iUcl1jbJBX63jyOvAIboKhw2p2Ez5VuyRflmXVX1gqds1EjUIFWtsyG8O6CANv8ljbmEN6j+tmByEa7PRQYEOW+eo1IUTeyl8AkyuPbSeFaEDTd63QEb6ZzmMzTytfJpNyczIP8UaeqGhcysj2CEg9Kbiab6DECvkBPCj0MXJlMxQe8UaCmfzkVv7g31iPn3f1YwhvQFAU3f9cQWbYW34uybcVT38PcR7HYVWvo9vRadnJY8kLbFrtbxOAdcZpdyW9nNjCZp0wvMuulkLaLZZsud2Mfrl0wBj1TIANkyYTWBw7CrV3jR7qnG2TLoXTXn4LEXp/DcfhJSmy5egJtPPs3oOPQ9IrdQ6tg2gNEVels3pTeGbcIxv5Z4gBlphd9XItR6aohh5yfX8GkVtTnZtGk/wwKZuvjbhKxb5KCNK0UPzqRgU0f2zwoTEWC+3WZou+VZPmI0EohPF4bqnnp0TNMK2X7OE6/Q6wIqTv9JhVR9CRBBG1LCwV31ALc2s079uE4EVwfbfZ4GrTaFRoeOl/JnPUMssFXt7PwJ3qt9lOJT9rVIW/VF04fewvXOgzEPneUciozpLlYgHyamAVS56kfnmzvvbN0a1jvkJBq9Z2OgC1jW/UPymqSdYkFz/rZjwyy2SjGVHGTV0xPMuaphYcJjWbPueGlOfPlE5inTy5wk1odAtMlx2ZvQXWROOfiduuUEFTWOA7eQo81+ONBvjjdeqaqPnY20mHnGAtB8yCFqXVQ9aqwnNGYzd+w5ShF/2tfjz3UIc1Yy6trnFz445MfBwq7+yLpsRmbLKZsIQlDOtvuoERPYJ5I+c6LUeoU/kuSmb4jf4yTs2Myxlx6qx0iCeObQ1KMzBPMpr0ys1LnyZm6oK7kVXHAn8ewgdAQkv3hTdWTkrwaNH5pCXHxjR7hD6Vb0uLuJg0/QFnxtHGFruIFxVS+wf8vASrBWSxUdysWsZOyDvc29DgCQMocGASGnMF+bexZirOmeOeTWBGao9bRvlDe3SHyIczXvZBBMbIICFM3e0JMZrSoJqk5xPmD54JLDYFm8SgR1vGEroEmQV2khk+6gUA4Sr08bAQCPeyz2qsxbQyq6KPJ/AZrrBYcCtB8dJgmUrQVCuzBt2Lit4ib2W948Bp6er6MPbcc+LEojN44h7g/R6zCuyPGjDdk24kZd7YCTxTe1kYqAFI6JxavqmGbJw+LS5h7EXy268djpVv+pA0IPFPcS7CoO6la5C8m7L8lFpQCXRhXZIWJvYZLcyFdf2k6PfFM4jt4vCdnwHjjAlVFp1zJvsJm4caX9PwbfZCET+P+wqD76O52mgkEdqh32aPHFNSWCs5euXUX9dh2C6sXw+uJiQ/rYHdVaNTJwoGYwSMLOmgkObvtqcShmeycDKzIXsR8TCttMdyhSUdZOiVyU5w+R5BkbbERNHHpotVWOmq1UHnrrb8r0PQ8qlRZHQ4fsxXJnjhpeXKbUNHXQDQCXqPbxAhKisGzHN4keUfskeSGsnxzQqr9t2BRG42OAL/grPv38WORiSXr4rdcJ5WxYA6EfPbXHyJA4wyxmPuMm/TWVsowd1cDEZ2CPP7iwicYWRu7hGCoERlZ2VqHTNSWdJsmiGuB68T315HKX3+6aXjqpza2WL6gIVQjvawLeiRqiUZYDsUDjC3nHhl9mMP1wAejeaTolCLHVmnw4MWwz7pRXq6JSoeyjfEXiG9/SRNypDnRD6/viTYHT+s9MlOT+uNO4uCvmqZaaJ8piQAAAAA');

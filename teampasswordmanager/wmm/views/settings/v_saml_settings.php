<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAAHgXAABNK9AcoUf1uc17m05KuyiQ2cGBEhcTYy+6EXVPsTSkBoYGr9WfBKJ+afMCCDp0HFBFRQ5+/JVUWvOK7Ql2rXKI7zbOpSgoL110tN5kMKI+h03Iql0eyHub1vp0P7vblH+Wb3Ls6Etv8rehQ9aDZOcdUuLm/eh35KrafV15toAE+UQ4XH8PmaMhKqc8x4OaajOeIyN/AIYxxhYHVAZo19Whs+7UmRg8UYlf+syJjMpEN9zpQCG/kUH7/gFTNBl2Fv+RzOMKIaMOtiTDG2eSokKhJTZzE+8BgBXerRhoAeLLKRYekqziTxlR/of+qJ7cQveThIfzjQSi+CI3aGMWIGkikgWJTr9+TKvq2YxSnVsm159eoZqu9/dcBDDFaRrZcjPqw7I/PSImI9O49OZdTFguOROEQAk3inH8HehWaBawEOxtDY7vfuHCKbwwmu7SQHgmLy5lc59hK+ethpjLPs/7yA9KSOuY7kzTG3edgvNbvYRsdrFS0aKPCi4Qysk2fHmRoViapqu2nqL3ARUdc89J4L4hLE/EM+++G80zcXGi4VCVSKskLehuWXu8HeX3/SNDzopEUWiZxuK6wslF48jSGgM8O6Ky1ePoT2GWHAzf9yvTWK+YiW3HQzktsPnNmsQ8zDkLIRTvGDc+URSU6kq6X4+8D5nY/42teY8VlcNs1mM398960nDDkDNis/J3rIwLHpY2jv1b6KmFXCZLeLXNBm10pSF4iUdc21AmV443QqWoiNaycgYE9K/ywuS+eR0ZdUvS/UJ2fPIVtppHVl1BGpOkx4lqyEvbKMuOZN7YYl+KGwRVkvyqg//GinanRSfq1egWsKe1oUtlHTkSqrbFReN0K33/OMy1czuPSkVE5sSMHmVzhNHnG+Ardz/pO9PdV2Z0gKZ5Xm6RqM6ET+TYNw9TuO4A5ufk5Qlw/PFMfNtoqBnF2DJngcpKeixZRQHOjUI8eiTq/fYZZ7QGtGk6sI4tSKC5a7W02zLmpWRHQyme9HyIwUfj0tuwjhZ97/8ETKdfZoSq6T3b+TsSEBEwHE8KaJv4EVjwVIKN15zOlr/W8zl5Egq6gStUP5WJQD/Z8lzBHL2Eo5+NHWPKnfGOrxYwaGLjkZdgO/EHQrmQ0CS0JE0Ltebx3vBBul+PuEChsx/CT996fXVkrlNbve1B3uJXHE0Sm564dc2rT8kbaR9DjWhY6W38Mwg9LqsEANvsZ2x6InLViUUpUQO2G1jFECD5omWBQPPcHGGWCYursoTWinTEKuD5Rp3gEzzaCMaiQ5BdU/9sKSkQJ9sdl9gqwO5NsKwVV0qL5XsllhNej304r2LYNQf9lh5Wtjn6prNzcTf8yezxTo+sB342IcUSjzGmyqaAUzOPT8M4on5NYmm+pCg8pLxQcw7MrS8ik2cO+wOmMP6UZW7+BLgOxLWxDSssAiiYfAnVoNKWTa26mV/hbPRyVEDSAWf55+aVK6gI4ZaBF/HXfyQ2Z80qCSUf5+Nea6+Tqj4Yqy/kmvi428eNTLva3Gb/m5d0RFNrH23llLIu+CY0hU0K0HVyAZZLwjLQMV6ztry/z0Lu5q/mUdttLWncS2XGVyoh3KCvz6j/QIaLppBNcaUQ0xpD8XAQMKA1D8hgFQWBxySZ3mvJXQfX2oChpoKNZi1sqaoD0Z7lg7Imqvec/lGA5tpWOCeLXI+MdhbR49+uLHE0WrO4nC9xYCfgN4bKleH9iO2QyLPtOsyxEJf9mHGedV+js9E9IcPvCY5bPl5ze2ovYy20jv8fUeiV74flq7BghKb7re3mLJ+PUSPeVyqvOzhuAzR3YNR+yKce2cczaHY3vwwduvDSoFkJ9Y1G3P4tOjbo9XiTrtWWV/eEcGWvv/JZ5M4GW1MepoFOqa6dGnpifQoDLSRIS3PEZ6K0KFCYtqoA10FpGxaVoh8KaZhA68LWH/bH2XhQfvQXtA7rYNuJifgG1Jd5IkUP5E5k5HOHF9oITdRg8MJktExu4mFJN1kEUS4/p4aXGfjdfUUL4icmD3X/xunl9Yz1WxYzNOZpD+xoJ/SDcFvFbeYDs2MwaN9bpYUK/f7LopPVsXzMJ8KY/e/pG2m3hbZxBAj7Dkp4oS5UkWjtj6EcqPnqITaA3OhXQ+8MRxs9NZSaSmrcbvIL6TqaCrk2YNNRvGWH7pVYJAsZuHCVcJCpTcm1mGQzNG4CYtfW/cstjV9klC4/DXH+5dEvZVBs/NI02w7d6yI685iBlmrjCmhU89h015/9Wlno+oufgUfWWwNq9ToVZc2GwA/Tkm5vK37nXbAI2PTuI4TDRYuNTGDmTphSV4HDio+E50rAX536YNsGafFGq3wjW/Ja3TNbqDa/o/00Wk+VBF7hBp+Me66feVOdIFg1/QMcgc/nsNZNOi4HRfS2w5yFa4SrmFhcYioVXXKbe5j5L0k7NP/CMPtaOAFB2gS2dRZih8lmsb1xJSEykBtJ3TL6ygdXK2OFyQhEqBTUyivkRqQnLWNnp1x+7U0mRyfoXC0Mhic3athz1PA6NcnL9Cn8lWw2FuIgjSn0SHmvv0IMMAUp6YW2yqbc6GKUSD5cyw44HK6dWZuF2LslBI2kC5+QV22Rm6NJZE1Su9TC4gfVMlWYEEihEzGua+GMb9Qaa+5Yi/WpMH3bVGLyHq8PTYpFZdRs7gGi/acS0ZHZiI96LxE7Bv428xLLGcpLyP3q55cyREgFV58Iqr5RFzjGdELZIirc2Vf2kwx8GrJDLsAP6qOUAZCCCXGI2ntzBNjZB7wB7sUdaS9F1hbrw9LWhBYYT9qWX9/QcLG9QUp/MF9T3zaRt7ahqDP0z5nmEgA3XzT6yXXwvwo+F6nR/7dcBwb9VzptFSnI/tdrz6lKC25JXM8Gp5MuSOeR8nC3/JbIjfAAW5uVmX2TZjvf6cf6PvKz3nkHRbTE4w7vmdx+ZueXnnGqZhfnSLzH6FPUyHXBlu5tv7/3MH5FXNpmd2mLR6t3lgkLBzGPDP1kqQu+B7s1bJB2CXDoEWf7I9c14BOgtLhLNxgZwknlsMFXkPeWV9kg4VVhH/xHlhg45wJvWk16uWcE/AFO7NX1T9M5UBjqA9HvkvM8AGne4z8FNOy2KnZ9nNn9TGfhTIGF2Hlcw6srcf4uEmaGm9iJ9QLt5v5Iqk5vRr3DwwIR9AHUhftEzdD8g/l//+Xm7qu3hU8Ctar7wmvq3sIeTPl08AC3dOvrMgMRXpa7Q0mcgVI4m87HlOHzhMF3TY0mfI6+En0hWgxVAhI8mo+4y92UGtX4EeB3IDdN58/7mifylvBn7xFwVDi8CPFkf+xuTAWSx8sAGHMxQD04+cUI3mxu7w9/35gLOVDC88PfUUxO2QI+eBQXKsYSX/ZTbYaOXD0ts7PQfp6sgYiYhO+EpA7oM1fEUVQSXZ9lSB6fMVozQm5wZ0Tl4k28CDYca49JPhfS0gXIXMMiKxo25qAhxFgXFsvrzU3QPvx42LknH0AJ4sBvtytvWy7zxcKZW+q3FZJ4gp9/4STetF3gafTHWR1CABqdTIk0Omgzji3CYaBGpYRrhlZS2VQ1xzwO1vBf9vzuE3cqMljYB7LXBvq4As675pFcynllJDdD9oBOBnoyzHVEBzX4zRg5qkXO+W1tNTQ6u6hLQJgoN1BViBOOWyiJKhBgpYIlvOGiZ6SJnRh3po8xL+Fna0pJ1NBEd400/2seouE/HRNLhxCDNxvXZUi0dTq2NNK+Vr6rHH1mUeL6c6GZ470navdd8DzRK3KhCoDK9cLfH0BKdYd2bqWgpA8UtzElbLRheBWFR237Z9kY0FZ5OHN5PI7KW0Dm2ds747SAJeFuLhN82k6R2q1lktzONLzAQrhDrCcVEHrbhTf4MHXcT9JW6dbZqx6kbe/d5diPPGl/SD6pbOt/6X6pAsR5lv6MjbEVePD6PJnIDITpwMH88iVm1p3hAhIBBnpS8ST/BbvzptyS4Yamm0ttgBsZc8o53WXG3c3oIbqFZu/m9atEs8mLPBvjN2G8aiYDrhoOXNcxRy2eqrprBuXM3pWSdP4R5+g90ViVMkdaOQkosV2CrUvCCRUTaKnhKzqUAzcFLcfTRYe1oWyf0SYVBZ3vBRthVP9rXT9QBoSVAp2dvWIbSIgOrCXcyWZEIhGIhq5H8xzDRQmtvLzXad0tdAv9C4mEa4rYX5kMHItQ0WHwaum42i3az/+UX/p7PGXCgR74W2XD8P5CVIvXypErKMJx1ftwfOqLAZ/RNyabMwBdVNj9kc1oWubiQBtnculS7mm4gsHAJwq0//BNRYhz2CJ6NutlXXk5Giud3/PoCxf5RPQY9H9W4JbLRr3LOKnZCTMEfhSyNe3a8SjCGm2c28JREvj1b+4Vk8qzUCYnpglbMQb21unCfxx58Yupa7rY3sMXP2Pf0jcTFVJORoyjbWy0UIavzSdg7zAS8VR6uCcPnUQU43l4D8oIJGBm4MutUeACUMQW6q+XF8anQ/Z6Sl5lXFS56d72x67RDbnCG5BGktXE0kpqFrO0yqBFoQE8BKU7doGkmtDuHPpCkQEFzkuO0FsQQzVvNz+WJDFXqOjr85rBK08+BERLWWzRFfkd3Ql5DWGmlQT/C256dZI+7V1bnoTbTzDtIdR/1wGT3S10fh5C/bWr1IZ2HJ/ewcP/ljmPuYzOtuzobshj5K8stDTccIUKevsyoCMGV0ixXaynaxyotucYTUJtNSaxkp5e0mR0+hhq9ht3KxjsdGuqdZjPUWyvbcSjn2k1T7LTG/UnKozJfrOAbKZfQoYq6SfZ4raFa5uo+RibvejwCP6TQp0cmudBFFitTQuB1Dm+xggF8zT+6NiwsGO7E+jPENrG/bH9Y+kMf8XwGms2YQSpfcIZpr5dYh6zcG5lLSiu45PXGBdvq+my05p6KDiHjkJzptdaMJiN+6eAg/zr5owDkHteE/whj3a/xg7Om/+uxx06NprTEJ1fTZD3zSfJSs9eYS+2DtPVubuAlQBgMWlk26jZSdroLf9CbEib1UATf+0y0EQ7PM4wFYqDsAIblM0NJX67qjyGmfj7xGpXoZjP/HNphYuLZqRTgHUcNt0UyMFBNWJ6KuTT0IreSBfOlMbPrboWAi06MrumHnb2Bzp7SbZIKPM/B0ymDzRjCobwngzW+PpwQSznAvu2LNrsOqhzXmJVCBs5iqKZ6xaNvyGCjhMUD3UsI89GW+FTXeaLcxOGDGwwNO6x+FI+G5yalHwJ061wpJLOHRGxVUxJmgiaNbgksRtFPcMOihyaHlBxkqdSqnyVQO33ntSG/uVeMjtjDvMb3kEu7xiIOQlDAwE0hJGEwD088CAVY41UQcGRQlYyzzMMAOoJ4AGI+ganS6X0N5XsdVyXD5BPpAZvBjWjUQ1hq5UTucDQBSCwFQO4ONZs8SxUJWTFSTv/r+ZunBqVhYiyC1jQv8ode9Cbm104yFihjhOaH4V11R13ihLOEKr0eBC4dsJDpUrcUZ4WT2Mpj4reXUpDaKX6NM2GvdHc/FJO8Tf/ans0QGrED9qs2gfpR7Tclv7wvn9hcVk3z3lXlw20b4OJ3lxYOGpQrFwe+Om2X8vr3VkuzIWirziNiAH7D4rFhcfZ4Svc8PlXC42JedybDtllTpdBWtSipZsiPKjM2EIfB1WH3nesSdXFXDboomzZvzSYGCHWFh33DL95JJvEgwr2SJ3S0u4kklrx6lyoQmbwAHo4Yklt7eXl25Qc2oVhI4YXYIwe/Yk4Bzxqdgs+xnRWua8nj6Y0AvbqFx+EWiQO8LIjSS2niLo3J9NmH/y5SJUned8bUriodYo56I/ndM8CIwR+JPoQn0OYHIFALO8WbPQT6gKEPWbUhsSb3fIsjMYqzCNW8jd4mik0l8V9SCN9otuBz+Q9pfG2v3k7ZbSxe/aeUOj+JNDOpE2RS66vbIoPfe8Imx8BzNrT2Cww3qbjMAgfEPCqZ9Jq/nWtJjxrf7DNM3fwI//uC/wU1gihy1MbJfE0NSZTf0dNvl7vki6lbYoA+zfeubvLmpSbeR0S6IM3C6GhAChKFrivhTbWFxxta3rl9Gl8esx1dBKe0OCOO3vviMtweXe802+UWEO6bIcExi8BFbKkb39bPGYc+OZz6Kim9lEyNxiEy4qLz0gwfUcPhx+VCRs73fmmfGlWnEOdllW9ItHwefrfwvzmKK9DTxyYBI0CU9fPWjKVvwpEfxejp8fO6KQV5/Wyv5AubeM/RslUhI+1bb85PTFe5xrnN5pFKNXxeL4uqoi0yile85S1ZFiaAvI0Qlr8hlaQkzUdzJf+3bmY8PYJ7wtxphUqv1cG+hruXpIGjOOXrgq+T8f2mQSFSNgEC8+byxzfxJbuEGhJwMWboc4WcFcfi/K9JhYdSZG665RQAASa21i6jkWVYl5QLMyRateig+pxfZDoyAq17EWcy5csN75S48C7Mhhe3c1FY5brh4fOJz9IO45F9aFaqGHf5XQCwWwlOZ+mtFSEb/8DsuILIZudpwSJ26Q8I5xLQe2vWOQENpR+ICsquCPxFLYCT3HCnNf0iN/Lj4PSxdxNgq/lOopFpw6MtI97gICeBCRM0DSkyJVg5Ma0pHFG+h/8LXi2DUO0qA2MJAaFJF83WkhjO67oXka6THelU2Lb/rBH/wUvID00GVPM9BcLd60jNzziReTB50TNt8SlyKpnKSoN1Dzr4KrIvC8KX2EKgyZ3Ejb/V2DVQ+5p/c8HJ1DEBiYTZ6azQpUZ3bZPZv0IDOmlVGSZ4ELtP/VVmgzgWDQNGznvtghiyPy7qo3QeI772q5LLt0Ecasb2hds17KRWuD4yG5qgPq15hZ0IUPfKmIJJgyHS/EejtRO6jxfaCpmdM9t09gMl4tUSDCx4ns28b1l8D1qqczSGafdje7UFs+78uUfkqSB6eCpK51Q878L1CUZRQHM+mrOhuZ7kNP0SFQSAHefRXdd72LPvzP8WQOd1kNuHM5rVhoYvTGIK6ZKJXKEoclO1zr7NJPvLpsOq65tc7FxM8CFoYf0LFUshEgGoZfKkqHiPL9M3Zk1A+hBh78am4YWlDbLoHntm+YNBHGa6CKHZsq670aYIa1Pe5K+9ZBzh2a7CulQn1FreKq8D0BVTIjbWJe5zqgOexZfFYJwskTTmgKamn0wFMpv8ex5WPAtEzI+H/ZEAkngsEFe7Cocnsi4LQt0mgkvt7hYXV7taaqAN88yjNbQwryLhv3rgCJMFcqunk3zx+CVECWuBxCXT5u8RMgJpR3Vv0OfCEtEIb1PPR3rnSPdZ+NPGU+MvErci1v7HdRR6PdedIIiufPfXzbNO3GtuBG8Ag1g+c1S9iDF63dbbdlTCgIUpfNh6oo/sfiVnI0tW0+lzkmtxPvLUWpPr3YOZ9TMJ+xRTaBxTAv2y6OyU9VhDAes8Fe1hBWi5MhWO2yJMe6p/PgUTqCGEUey6gyX40jjW1Ji9DjJ9ZUIGrbCih2zck1Jc/diaiRjyFZAuyIubkZ+vzdClF17s87DqjNm/iroY/3MRfYsTNpgaQEL8gD0a8A3Znn7nuLufDeuLQtDJAVRK1+yZ88CwVNGO8digWAqS6FxxS2DpIkH8OEe/TPBwieiJLeA6oXaeUu1jwsip3YlYf8WbHlC60Y0R3HMP3IqV8pXOPpqP11Z/uhAPvh3REJ2jPbdABtFsfraPZY8x6w3gZdGLOzPW0OXticTr4yYEmrNnOz9UI09iKEacRaU5M9PPgU4nLmZ/24p5HG5t5vo8q+USKtEZordRwHjCeCRGINg0Dp1jDXg6t7akApoIcz6nu6YK2y6/e/Kqxv9YwLYEA0/EvyxHzlltZEJyPES54y8RqoSsFKjQ1AFqM5BvhUunNjg7aA+ss/YPtqmt1ROhJomS6SeZJHfsMI/+eYUqu/3OsVthpfWL+xJLWzY+nH6MnBoa4A9mi91j01Rt6Dvk0aZo9OF8+GrIt25AQbjyT5uCiz0G8GUj7S6cL3jf/VF4lunW+6iTihASxeVtU2u7CXqRzrKPZBWOlEAAABgFwAA5nlGzlQobpUIiPCBqgCNYnUjupIOGyjgwc9h/z+VGYRwrRr5jE1j4Qz/xhfyJP/AaUDpUS8ClIdBacX9kklYyWN2oct77RAtMQeu9PGNYL6Febpxhn9C6do0KaQ319w7MBp5YnzPJnZpt3YYBuhNuA8Vg3333Pm3xSs0zt9D27SAuSNy2D0mk71eMsxlv23IeCivSIFEpIV6Fl66MwfNgA4nR7IHjCL8Qn9SkJl3knostHixujUYNBfYxmDa5t31CvLHfMxwhszsdLIOsXrmlVnIq2sorzu/Xrwben4kZtyW76o+0UEErRshD/Gr6zys9QYMWX/UOxt+0/yLnu9HPn/9wrihojkt4DZune6LydHB9uajgFMwa2oDXu6S2gukv4C6YRA4i+J9qMZFi/7eeBxA4OByVMSNr+ZZR9Vq1Yar4lOTUgcrrDZ6xBnicOL8FZIohqGGbTPR5yRKbZOYh2r1/B2+8b71SxwgPU/hcrw7NVr9ba7FkkdSJYHlqHEwjquk5fSIeQ9PYmN0BhESVDRc2Qp2X3qqSHKPU4UwBcgUvqMhYo/uxcsmWEvTMB7BcnZ52X/lcmvrqEkc8AzuyITNWY/TvYNEkFk64nTyp4SynlnuhDv4HpM2tCz8F00nNyjtYjxQRfsSE4adNSWZXH6YriVoRPZPTdLfRVYOYTm9j7ztr+/6Rbgb+rExuhwIs7qUCuX/ulezPxPM6YRbrEy+bdDLrbKCQUr/o9kzwyJ9D94DzSjbCviJ63SgNJeIJVM/dtQdA9FEqbzT6hCLo1O/g4CDFcQH5Vw/K/8Pxybcr9zOL84Z45knoSEN902w5/ePS6nCLB+glqD4awrct7F3dIZyzNxHzObJX1XvyFGk3C/4V2VVtZo19IfrbFV8y/5qy95GiFL9FOr+4MBu49P4cigTbNqcL6ts/Mwj2v4QpSS+2ffDqiF12PJRypdFqDbaISDFzC/exCB/RAD8XQ7inGFGK9lBU22YnDlUUcNGBFbmkV7jiAM1BNk/ovyeRN7M5P39oC0vrKfAde4dYc5dQAgu6Za6haFVYrUyiapGvcCyzbZ4rhVm6NXdmpdkoDIdcOLiwrh5rzjsVOqy/A+IFpVVfUpC6xXU+yiESct9wrcQvTno6nOqNIEx63HUBQb/Y3TgOH7W1bOTeRgujt7zCm0ZhC0MFyz01BMzeyiMlmokAeXWLJhTNqHWXDJCxVoB9Sznblbvv/9ni63IIkBLPKOnx3mRocu2cv8tnNcM2JxgKcV1iPx9rQ/sSls2pXDvC6HcK4R8rl12UfsW/S8ndvJ0a4tE01pvwKv6QsMxkzHVGOz3XrAGcNJPC0Rbx/VYICejREjH45JISy/WvLFRc27hjLu/G7cPN5lS1gKJAMTL9atPkZmB/uu21izPD+VRSWiFtY5kRNsJZwFdMGnM5e46p0JKk0Okik0bEUfIlJtfmliLNQnYKnqKVbrRuGmK0nwb6BVi36m+5tXGd3r2wmg+kp3jr7SPshEt1E3rxYjueNu5/gV/HmBG9VKz9DmbZONafVC/J61rUWOYwGFZjOC+Fgi8hpecCobDsl6Gcw//n0RGEkmI0w5vpYrIYx4dCHEXyHxqrja69hksh++8rXiPRnuqfc3qjbE21Sd3p+vloghXs1E8ZIkKsd9LhaRkWhwljWm7uGEBdWr5iK+OwXVmkUYp1yVbDs4BGzqIm+LYwcbQCPHSznrVy+rKX/HS4mEX5wrC2/DvOrHOt/8Z7Wg+LgdNAeufILARcjNYxklreTAE0v6P7IkPIXuzkkx3STNpQPNrZAt0Te3twdsDi+dQ+s301JPsEU1Z5KOC7MHzSqD1d/V83reOq2cnkw6lJp2Z/FGnjdX4+H89dooiB3AsAZ8BvSW5OiB1OY+yVnx+8J1UrE1QrudeDVBgU6GghNC+Y0YxLD9KEZx+Uf/kcm5A+2BO0dx28Kz863W6bzqH29+inH0F/ClvS9v9KfWJEFcCrhcwNsDvlpYJ6g8+fx4URJuj4RX1tX5MsnmtYm4qU4E2ZOqxZxDfWYyjq+agwA9JmFG21celCenTvG8NCVQsfd1KShy3KRRY/QoNWjJv9y4tB4hN5cEhTwdobK2Dqh3Jrc0ZF0iTMRtg4ar6T+a7VkPD5QfqYtZTrVBLr3WoK+y+1bBfQ51OCXmkjKm6gTo0Dq9jmSNhbettpm2MLb3GVskVzRUKp6cHGHwrvb44vonGWNqyiAas3NyOR7AcT4XRMwvcFbsRyZWc4v1VzqKTPiSauOuCwbt1fFtYAzRMxAGHfGVl5HPbnP6aGovmujXmDHd92goxxxz+E43CuQ1ffuXd4Rn5z6+TatmuHow34CyS+GOOADCImb8e4jTGZK5UMCP8u02H3qZ/xaMBomchoJba0RDdWqlSeapGqhfdxJZtJBoo8Pl7uCEuHv9muvOaq9PM9u5KstmG15Yb48t9flCwBc+39FoQncslNOS1KfBCkGEqbZ7RgXwRpZABGKvVExThc13u7sFyiDbAAxx/zf2Ji0JfMcY2r34rfuf8hNhwwQHxaX7yXFj9YqNvDO9C1ZzHgKvWx1sHbMq7lzLsyryl6wSCQAuif7nlnYiHgxbm3IQWt3c7LKZPqWuQH7goD+nyYXC9uv2CjjM7aYtbn+U1EGVg+htNRQlW0dM1S4wDvOt959w0EB65CFMSq0w3idvHW4UwfAHtGgruhlpw1By9ROAbJLjISRBkVHUJDVCD95ofcgpaalNLB0VZdjOZAx675VTT2VL8g2HdVkRbexpYumER8OJ/J2cJ+FmeLvEZsiXUFlnOadN4xLpL1lC5bQKxoRulSIjMPKrCDW7ZXZ95vPu0Fx/sPQNolTsPVHLuP+rcHwkBds2S8FmNEb2eGRGKmKBQ24V6AYD23OBInhMijERCU+rbZoHsarEPj1BGw8xpu5xzdpf2LtcRKrgmbXD7rveoHeRaQ8Ff8vNt5j+ppkydk/GyC1LxCozC178Vg96TkrGe414QiCH7a3BcvLpOEB6qzpX5GyvDBBC4XydQ0mjsGUt15ohVWi6twFi7qdO0OwdJ8JsN5LAZpKz+SB/vhgdgW23ssx9yZOkmXAns1ILS8QznNwewFEycBICDP+he7neoo5L6ioysrQUz16917K+B7l9TEUNr3SlUngF7MkgbEgKrZy1RViXcPV3bw6ibCKehS5lNDZPKxE7LXZ+Xtk8eVoJZEZoYboR6hRu3lMvYI0W2Zc1UeKcplX7aSZ8eM6aPGQvBlvu93+4B3O8JD2clPxchpe5yVZFs+34l5+0oEH0ymdk7RM+PvrajBvNbd77Tti3+K1UCQaxfGwTU/fe0iRQavrOroZmxBsp8KfhEZUtx87YqdZRVoMc/DvOERpiAQDlJWchFxFA/JObW+k2rvlsfBSiKtC5DydkbGYzoYc32hlRl+NPztPe0uU3fy6x0MVq4KPCr8VGf9w1L2yr8VF0V6XnCxzVUv7Aty7JWRW1/sVoyE6okT0hPHriMSIqgRkwqfZBNFSzcTaRWR2euqGkOqLvYuu9gpZAunP84yW1U1k2k6zuE6DdY9RxA8N43r6DuDjqVT2GbQ2FT5cG5wckgeF+v8KsRixqLFc+uPTwn2rECKzErfdNtuCQQ46kJhx2cer2+pZK9QObRktsw0syCWkptu5dZV5UXvud4LHdXK9nK8ltpn6/JIu+aQi24COSFvHQ3fsNfDCkH2rKGUr17xzXzWvQ4Tg0I2SdvNIQnVtGJyv8CedCJiPDVhklhZfpixhY9y0upj+kdbxLWAaTf/bP2DQiYX+AiT1eBwS95RUEc58BnoZ87JSeRQMDH7Bk9lulBLDL1mSl+EzgIH6d1cUvj5inxYd3fMYsMrPO4v9+32+P/lDCl4FetAfVQ22EZiZ13Gyr7UcdKhueloKt5UQ6nEmGnG4j7CTNkDLqs5Gg1Hd0Ur/8mlxuUgYCg+fUkwpEsinu5wmL5gc1N2syFBvCOhIGUUneAEM+pfk7fKu/rtoEfJYRwnVe6bEHnORY5AT2RxGNJ0LgPF6BSiQbtCGwyGaUzAguD0DLlELX8VMgi/1E0Y2JoKbDFI31psWO7mO2Nf2hiN/VESkWM46Gfd8KR3/Ih5S/6uRD2ecFHR3HzYMuTFvzhy0OcQ5Tcor2zV77zuMJu5+r+ZuUlRWT1+te234OILfXfdvUnW1bMhLSteYxHYVixMLRrcVmIDLl9ZEEuieBHuPn18vkWIud3O6MgkTEWMH0DC3mNwkG+odo2emyOJQDzKB0k3sx1TAdUmY2Jcf2/thKC2JMjBRpbd6vckwK1YYNOagsDhDiThtA03CJ9M4V/XspOgDWZkUOPCFThsqaiS8K70+23Ay23ZjS/9lq5wHjtHvyVI18BamAz1lLe1NAd3EwIi8iVhan4iWwyEfIUJd3GCk2S41TJwi5LU1LNi0KSEaI4eBV1Htoqk+1I5AF2VRInsW9gsWTG+Uv6NTaQuptqMM5HeV5mCgMUUVj2o1kDuXA0Wa+taalxSm0ovMdJXSFn+TJy5+HVRfv1/vztu3bqdUwcvuJLFnUb/ozyMjG/tPA27qqbEbZd/gjL+o+U6S2hzpc7EkbhFIXcVYl97enNsK8kOIIH7HYVFWY8b2RWnEbZGZN8XwAJxWJGeriqiJ5oNDjh7z6ZngrLXOAwGaGd3vBn9Ka/1X3xMlogn3X/H4UPdGKDmXHQRgB7/GiNIim/klp8FK0t81Qp4PIv0kkr12xb4hqeipF/+oGemHmPwv4UZODFFV+wv05MNt/pVywlyJKjUBml8r2mthi6pKlZmw6w4bb8i0wHck+nK4hXz/BvCB6qnPFvCrttcfIjKVM4vJk27JrfhBzUBxvuIxzDlEjrMnPhqSEZ3Few87wSVZzpoB1/TYPYtJm90Dda0cD69gBIZjL+YCVXTYWj7ay3M6fNkXHQz8MwFYEUQtqjGiEuNJsKvT7QwwlIYWpgdIRcbn+3kfSDAc/njZSAKNGU1WIA/t/P2ptfw/A3MVX0OvvlnhKr7mmGoy7G/LaEE+E7TLF/7spnBY42Z6kgIHKeabj5eq5AV1evhgYJnYE1B0RHQHbwF1QRxVnkggqeU9JrYQq1BZm+IIkin1nUTV1Q0o206e4Zx8Zy1qhMx/ft2fwvZGMFcjNV1ecrC5AAr0vRZIK7fVSmzJ3dM1KeHs3Z187t24VptuhitvozGXks+5VuiODq+ta0jqfBQn+S6ElsyVo3FnJuuBdZzM+UvQOKpP5Q6Q1GL53HoFzYXqups7pbVN2+ktgUuoonahzI9BuHoGvCLnnxosl271RNZMndyyI3fSePXcySXxb7maeclQXz2AIPOjpHr6lJA2MILEHG6qdD9ojotKHyQSGYRrldjes/TQNBP3e0IX0L3zyCpXsMBSWITL/lhIUUyEeLhxsyIHVGmTCvWHaUr4VE1lb3tU0uhLKVIfjmUHZSp8rbqInKByeVMcF44PBV7NUjMlu1qK7923ykv4AQej6UapZgZEwG5GDCkx4AXvyy20XSPWRHPKdtseccOmBgbw8/PCDKlR90mOYoV44sjHWQWdlGv0dxDSwobuVWM7WYL4CZfzf/pYQbMsEwu/VTMmenBk1n44En/5DhK3DyRlhUYHDDRGeWD9kXd472w/E3Nk2pSokC7SG8V+VRXEua8iAweI6ZfoQniWuLG5/YYXFT921VELIsO9SRMJcQ6G11UNIELVd6DK/QsWAW9DX71Z4Jqf2HdYRfcmxw7FsBbJCAuol7QaNYILG4/J3JYCPxJYfgkiWMXS1xUlX81B6m8Qqw67NSthmfSD/TP6zS5fRKfgFiICLpUfqSE0fKMv/oMPQ1bo9k/bLKKLkO2uOt4Ob1B3SoriEAef9r9mnmWDbO9t6wT1ZgIE6YrzQFRmXNPFJwxqrg0s0yJkhR6T2xPUSZAE+EiYkYJYrVO6AZcR3icgGbBsZYZUxo6gE71LPAFtGAvb/sn51jEGppxWK3QRXSL/KvZqQtATu/g0qQaAGJ3SDbxEOLL+aCZNX5f5MnbXQCoJ3qeAKJWZJqsEBCI8SmR/dVOf3ylxO5trQiE2J7afWSkiSiV7tmcMD+69o7MA/I7jGHV1XwafiK6vTGfmBzEr5797gyeGctLz8cAcqhfwPFFCqvxFj7SHfWUo5rZNhlIbb4dS8TrEf6MQ1AdsNxUpatm81uo8KBWXiPvhrhDerFCo69F45R0PLn6qcz+Oyqa7xFhwjqfeORBuTWmN17/LuB2SXIaSWD4fZ2PSCO3No4ekS0Ton1ndqlsiHTvzEDEEsv+tmEwTwNiUOwHBpMVlMn1K2+zL6+nVUgmSKrnVHEcdhEosAkXgZKmQ4Nfj4uV/BjdLDqfyg7ViVkZJfRofHcK+jSGCl+HTjiPITlcIEWMFcitYUX3azixe/3BwSZJDcznqmg0teaME+FsVkrBSHoSV+brTmCEDNlWTAr9iAz+/ZXkpi+on7xc73IfzivUJfdKbDKWNbi28xd49CluTBNEpaQD5OnpTbRqtioWClo3VAxAgNrDo0SrTBkvANKcofDvmiJVzva3HvhrIknYv8mh6EVPeUQ/pyY/My3wrWzKZ4BRCWOJkWgDU2xxQ+PGPpfhcwQkW32ACMNqhC0W6vaKhkDI/MrLjRawjWEs4ZC28UcnG9PdoojR2Td04QaLWf54eicW9uojs9j82mQ7w9U1IOfBPRimYc+d29xB6k3Ki5yGABZwgmftHkGCKYzmW8zqXZcLlJKBSvZjGRAUd/tLqS1CBsmDMlJ+p34INp2Ij+kSE+nzgyy8yturv5hCnhMM6CH4uer0RVZWqsCQyElQ3L1tgzVhvqz80XxBmfYsLNdI6JWLVdsg3ErA7u/lJtvITDEN7uLqRugL3I8f1gQH5SFek16jXHT3NL62quRYfIlyNXLtJiCdxsAxgmzv/GKBtnSLMTFVCNNOPMMwYqj+/S5AhK1d6gdOmIxv09GLRJh8YFdFYpzJBMhsRE45CQy182UdA9jQoe2CMjBwsWhgWWmiS0+lh579KrCm98hlwrDrd4ptWr7bD4Px8zbDa5BYHnytvPV++iU2MrRke2+mmocNsrfjlPwHI8lZRbU0JISIlcFE/Eu7PyMeINAZSlGv/TQVThShTaRhdP8QtXLANPCYA5GgvPvShvPVuVllsXs8qkRmHwXylz1nBomswE0O/M5Q6IVb499Z7IF8nanWyxVjbNAcNNgSa9E86szO2L7PKi8Jp0TFylkOqnk8Hh3mLu60EESASbKu6nXXNX184qH8pdFxi6FSXNyOVCcuyO5hz065QeITFkBCwB0mlirdivXEsGTmlt4W3zBSh6kyFjgM1yNfaII90wT5M+80zRAyUhZdZYF7d+saNPJ7lR5CwhcJiaV8PWoDjA74hy2aKn5FhkwSGqjROGuTjdqkbSg4z+AvxoZRQSLcbWv2l7wTyVYYx/0jiSifkXhzVHJgMdGC+cDJLE+C8Jlo8Bk1zzYTuGyKwDTKEGmVrShtayvfA9nclUA3QnlBLTgGyNZxfpzWhBwZfKrIkVo8rx0s5pyD5SveKu/6XUElarf2W7rWTzAbAUU+ocxHikrJVGq8osjNRlw4HOEdauwYz4oUeQ9rsRkOnSe4rge3nZBLAhyPCPXNVQJ92hLjPnSaS9Nn4Hbpm4sRbA4KlG5QAkh7BGx/eyO7L76ODFAOSatppeceL8SChsdQi797w8mUho5p3aNoULO0EjP/ZTnfBWBctQD4b3kEW6P30QBl5RY3ZRU6xGup8ytrzjVw2BZV084Dd2UFZ6QhAxccVqYFsnJMDE+pTHcZ2Cozdq1+6JQOLVSiXMDPBCRKgiVPrpfFyRictBXBqJl5CVuD+DiEqDwbCPXnOF2ObvQ1OqwgBGBLfGC0p8OrlBcshXCWLxLd9LHUm6Cl6zW5pYQI9pW+VYZBw8eR2u8QVG55ZWHMSK9jDSwnH9QVExSAAAAQBcAAJhQnTz6v5eyzDZ+hXskngvlrHv5ALoOkDYQKlynDEOFu/wyzVhfRl8XhjOqjefRsFao+S2vkhTzPXZwJC5B/fG18RfRpMGx5XqwAwd4/E+/sZO9RG7ctNSNIbWu/XjoO+mieBBTFk7dRkHaa/7QQ8EvYITYDuPMr27VMxogfelJyvEi2PhvBCHObJ/C4PfFP8vOr+BEra66+aJqlz0+lfXs2vlGIkTY11eIY5cAz7iptnhff4xZkq6w7IMrf64J57mMLTumapbMiNBOAd7ryL8mqAbZHmNBd0hKnILRxA0kuNcYtRshasDe1ZKONszrWfrrYrsaMlaO27Wn95plGeox3Xr+Yq+VRqF8vcojWxQyI2JBAOYMOucXvtszWUlCQFgqJ7CRQK+hCfr5JJgMlMIFd7hcjtsrRwiE2Mxpkl7yxklpW4Df7HnsdxHTDvTaxkfTnkLLmZ6d7t34kQnL9mhFwPoCoo+ex1dZSWLKGPWExn17F31RT7PzdtdKJuzcPW75GCZ9A4Tu84ReTgksXHTy5728NvRSK32BkKIHkNze3/vXZAbhnjwBqGDWjbIk9Tb9pb1Nrc/xPZdlRLMvyNnG53wlD3jRu0xFnrt76aWNJjvHtVaA9XsRpGrssR/NrB4FBdb77djPFOZmbFDCLvCKm8phB1G+pzcFc5GdT38t2c0pVpgfPqXwmGjURA3no9FQ971aPIpR+uRWGG3Y36OuXN8IM94YM/2F6aEjn+gJ8eqqwonh0wNgaNhBh96PjCmiV4NukjtqqSD3EUNFCoUGghuDvn4riTTQM38sw1vKD6LjjI3kWAR7O2wFjZY6kuh86tIn1CiDl0Da20hxX7RcWjJmjV+zHCzf7M7OUYvC/ljsFo9Wd2AVZpz8ZFeBRxfNHyb64586v2gHAmZUpOIOJgnp8idh2rCPat3lV5tbIYhtNLZIDxK3C4pvCzx7ZcaS9t/k7SVGb1vm9n4IP2PwLDnjKY9p/EQJWnrkTGXWjd31mpnJBbsSOxlzRMau58DW436wViFvoGwlXPGqS7i51grnc8I7Yn3n2qMdaTjHFiSSyS3k99m+GoYbQyJ4bQ6TiXl0GoO0iBkMy1GIEH3m+RNHNg5c8VbNuW7vfqiOHekv1cn5ml+oiQa1PO1tFHTLhdPX0sHYHSYXsiDBleAOe6ELvgD0eWbbwiZxC4AvujDvUi9MGNlUbWeXDXFz3kz4NXJL2S6Pa7BoFh7Q9uBiJmQYo3feyfvsjm2GKr99P9Dxu3F6g3JBu1u5a3HpvltZaBFK7DAhwd6+2qykytmBDjkFbN/sBgOGnPDl4L7obRzKdReFU5Qo5kJRSvy59OkBzfnFSQAsg8WWT1L5w+W4p80wNd+SfItB4E1T6pfEaiZZpb+Tv7UuNknfUDCrwtgNTa0gUQ4zksfzuELds9b6vrjrWbfq2lmQueTA++AODiVID1ssbHbPkqWfZyR6RogUhP+Yw2+FyN2bOWmJwT3Svib+iu0xKnJAq/Rs6pGwpKjBakYYO0gOszvjkn0vRgX7sdDiMsp9XctHidugVbxGtq2mNVQYdM1pNXvpQojITUAh9O1es8LqipwV6IY7in03tNdZNmYv/6ua+Q16u+DbJg1wopHxrk78uWEIcGjR9fHW4PF8NUZ1BEIeTC7/Qp2ebtyBzanWG09bEAfhjB90ZVmVrwW5B3I48AnLuhNUioTFvIDqcXLnJZriHiUKqtx1rJnojp74cvMpNQTdAFWqyb93ZFXoXyOoGrAUlOzthp8BcV8XXlNJRY11H+m7IJBouDs8EME/FjhmUzlHze+FqDZC6qkYp0x46qAmpZJG4oBiD3oUAiQURIoxMsmPzGBe8/1fljR7l6m0BtN36zlB6gU6GY64MIR8nBKr9LOsB5TSOCEfDlLWE1AGk5lOAxEGSbHlmx9eMGEyumBKKZyTF8fOy1eXVh6dW7C/jC0vxp7lAsid1b7Ht0rkEIA5eViiUCNOLz9WoCt84ivPUmSrdkmjZgguYf79JDKtEFrWmO+wr5astL29kriaYyPSO3hhmbUrxskb1HmDgvzQKkDkWeildzc3bUIv3T4eEWy2lD9F72UM0ur5rGfzvJaGbnu79ePbfnyUVqN5sDaIGPQh40ys3iFNzyJIj168FSxjy7SupGx69IlFLDrmhVsM21WZnLkctVs1k3J1HLuJAHIQk7VSs6G00mNiaDT6gcbWo1WxIhNRbxdKSxFDRZ0CJzsktEOzAUSRE+e5GwLm5eNsHgN3YdtrMqvOtEC9dyx+qnJ5pOxfLV1M+kIVhDjtjq8AF9uTVBOqBJlyPM+JNfuWL8Jxie4UDmyymmsvjTB8gx99b2p30laVsOcbN93eXaxMWNGKhZIX811fmqjvUsjuv5UQ41rm71MNCh46cf8gexJyPQA6jlNtbULEsX4ZLl0H66St2BjtoooVykdFXg06mJmyfxuB2tKOks27QkoyldD83Jc3JAC9gNfsHyD3cLF+vlhyrvR5mX5KLnStvjaamlvFZZZacaWGPurJyCHNfT7sJIL+gwnEWbU5SCIf5oOTcQPC5KxchZJLpoH1OF30MPlw8U3vR6MGmtGKl+a8sZztLAMutMRiZ7N25zQrgnGO3G5oWjGn/r2i2QsSv8zmZuNWWtDSoIAxmNXyIT8DhTIYJo4q3le11Lk/MQViROJ5tsnJP98FCF6/nDfGG1YQ0fkYO4GTJ3h98uchKjDP/tfTcGwDC4DsL8oO9GB2M+/1nSes0LowLpPQaUiyzedvrDYzbs+bFJjvuiJlomMwnQO05371Vfo/GqTbfGcbPiUuXDt5S1KVPGaL5+vIFQKyKiL8Cae+lmKxHr3u5dlGjizZ7d4vabQe4wjIj0wfNXdHV1/B9tgZDvvq/SA1Cy5pZQVX3Z/9KJN322i0KC2usN1DUA4KgsgkrdMdB2pquIYjflWloenvIdevOHe6N1TjYQZN0agbJ95X6Z/dPAhOPr0wCknfQjp7pVsml97sP7L6ogEFzicjslii9Zh+fClFKoolQiHIiGvAjoQNz9V4naAsOKKH7UsQYoHGjVRIHg8jVWcbMSdWSF4DUj5XU2mUB2QZyfBBG45m4fyUJc5b9U7Fzy2J9qEh1qMG+sFh5GEDXSjaYDc5yQa2AojLUUdv72fjfEekQu6yZdvOlFtKboHFcHPQtoswF+kbi8qCHehcaaLUR0LmCbqBzo6mM/zZ7GHzpyFUvKhj99XgGifwsmYIpLgk0YgxjYnCW+/KyoHWihrf+Jq3SxjVZHqELoi183AyEg+ZUJa+O9+cSXVjhFBgCGa5OFJgRy4qENik/VE0bYAdafhlz/xSPE+rUMltKgTTJqosK+gqrwq8sSQQZk4hZI22vCDQU46O0Zcho1WtXLlNLot3YgnoGSbQ7/+b7mETzvLCRUR3rgXQrXiQc+Q8JzBJHfEtHN+fR1Kq6pfQeONFOp9BfFJ8+hCypdrLtpQgazADVnX9h4uYjeMnvA3wb1CCkXrffM01aIJQudkTtuZXtYnSBqe7fkz/G79M8iWsMKo0oWU5hFnxPxm9nOH8fEWq9J5rUTzS3TJLZZalMigZfSJrVtuvZ/xSvWHXakD6fDOGhPjspMuZbdPuzO5JJdTS0dJxnwviGdcSTU4cu/Cp0TZpY6h2FY5a5H/cAWsPd3TpJ/UsMVrAOAn3ISfqiiAWQ1yLCTIGGdNZ35d+ph5NE3M2zCAq2Vqbr78yZlkmhmTRDaBBMGkd1HiXJvswbiTn650WmQrCUqRVMaJF3KgxWD7wp+5Y105Df3LBUwgdG8G0Ljy6Nqkh3Vu7MkGkXIH335pLs4kKzU4y3nuXwDJ6KRaNQlwqKsBlu6nkjrQOdR8fg4HSGT4Viq2ukC8D1QUhXLkV1LrxdvnSZ1RxTa8KUr4GlIaYMWgqz3PNt7aBXpLLJy2H4XKGGUOarMK48J0LOOJD/4bVpT/OXtAfNZMwASasl+P12t2zVwVQnOj6CPI9h+MH6rskSGYeL0Xts92/pGk53ssh+gbcBKXcSx+0Rdoox0qEH/cp8ZgWkG4NVFIOhqRD7eRNEbezOni8oeGOqAsjXcdBCM/pw/XapObFTDvPsgKv1tIK9wR51JEQtTPpIIjCoKXgJMsJKlPez5ug2a5WX8Hj/eM/FpA3nZtCUU0bPOgN7KiS+ANMEQJRqZOzC8wrD9kuEISnoodHesx3lYZdGzeaa+7yJZ0aUIvDuUbvPUsayQ1b72IKE3jQQTHhSSD6fCGGFAWRabCvjPopUmVzAMpX6ZgiaJSu7yBIpDiyr9qYNADkO/kveZACYRLIyMWaW8y/OaivRl2C/ZA1PoHy9MUt1BPSO0jlrnHTJEt5b8QW16bOO5mqGlkkL07dy44aMQkcPoxZJq6E1OgZ82URrnLy6RqiqVZvo9QEPrPsImvKqRmoH16S4s6cHJV8e6aFharmEUsiDfAH1JjiUvK5Jn21Fx6AInUOfFgk0aY1ea05Vo5pTpK2hVNB1K8fSUmrXXJ4AlrCKc54ml9AUpAhSlo7S5pqHJoZ4uYqeVOGZaHh7hQ/I25ECzjRH+1XFzhYFK+65ucciRVf6n9vLObd0yAnTQUQPb9QA+SEULXczv6vb/x1AlEpiX4Ue94djKD3J2919XXyBLF9/EsKYJjbdiuO1NHIcAdJoR0Q6t43XjN683HI/mYRE7JN3EZn6kxgOEZqEox5cDt373dzyJ9jhvaDXiMFhm2zz+gcVUCas7M4b3/Q53rFjTiHmfWdwfFG7gjVeh/Ge/u+UcMqQCRcbBq0jlnh9vjJOjTZ11CK1bGULCsfMwhp/lhts239AsCA1yVgHaTyV7ehJ5I2iX7Posl9+lUHqKQPeZYYAABgRK1FpeGJ7Xb9XZmSPPHt++Ag6gpr8GRMVDQhu6RjVQMkrhYfWCQtAMU0gkHP8LSc0Ap1zGTTplZBX7JhnI9IQCiW+PD68KtpJmHBdOhvvuv3XQbM3o25Z39JqMLmFT2QcbtgWk6clpT+7MoaoTvl2GFozzAmolwQ/Mqg3DFgo62ZyXeV4pRaaSKn3wtafI9bivzB39H/CkwXYV58WM6R5aeALmaSlnJgshmj7Vdw/z9iUAUqb/gLYPMH057uVtzqlavQyJVML+NOKnZ4xAO27BgXj0gQTIFDI4tU2YY+RUuhs3tQDnjLzNQe2Rlsr8ti3XzNh7eTUtfuDBFmTzkIL/KAIk7oyqZrn6jZMUwliqqF739+4yuv7XspreVjLDIsRdx37o2KnL1lbiyiHyfOfa31HxhJh8Hr17lVD5YVeMHmrTvKimPCN5IQ/HcoAhkDMgOFySKnk+ZPDpgNZrNfsabdIYOCuTOMl7Rb62LvAmY4+AjjPGUFhH+3h9v2tQEuNVRscceM8Fbp56PC2i7BpSm7NXd8nYLwEa6JvyGs5cC9bVNGuB0GsqImAogWilkX7N9RFmbFJy0HZf62hye8Au0zALYAha+OgaHgCT1ZUPuClEYgf43jE0F8WeyPYug0tLM5B/Wc2gKM/lZOh+dlhthd5aj1c+Hi9xagPy/Ea+pa2IhFaiQ+XTiWUayZns8ykbPaAdDtIo7y2Y2/WY9GbVkH3PkDGZEd65x32V7osD/jOcqNIoYoTXAMVAY6T/KqgZSXZVxGb3OOuagk4QczuyEBCoIDMjEKo06NqE+5LE90dW/FRHI5enuS4k+KVlF4dVLrvE258xL4aq+9YY2aO6nefYOIS5MPbjm+QwRATHy65Twtx5JQtSiJwD4Rm8OUmkUbwMLQlq+kP7plaYTPlaX2kpHgBvQ8qoGEtvilaDLazcIcJzaPtwXUzt/ouhD6PeUkMQGlIVndSSqbb0zx/r7Izbjij1Vj3dIWfgOFOes7cdPmEqAIpxlbNRAAjNBu4P+iLAfkOeGp9AvM5+HD1uXwcp8IUsUKXOivAfkmi2rGVQGl7231syhtV1wUrFA/D+QE6/zk7Gvo2wLQvsfimQeEVbkp4k/qfBJV5Z+wH8UPqrIoiRQOEb3Wx3TkkaJp+YoiWXE6R8F63YEBuIV2Xwa6H17vOkDHylsMOnn+aNK1qkmNUE0YyhFPyUNxZAX5Si45U7B30iUyAxq1KfYmOV7sC13gOeCMPgW2yCqrCvin4D0o60aw4zHwPDnKUH6p2yNSBhITsWNsaEMOB8rhFFZtlwbLShbntF/v9aNMFfprDd5PGHOtWXSMR/YU5AdK5mA0rQgBvSjKJJ46rLa756unQ6OYUAG8ZtbF62pDU7xPREClbRyw0LNkP9TD/Sssa1z2eT0WmTRf86ZqQl+a40RBVutp+cyTER0mscplqlJyMruCxfO7HKF2F+HOigIIz0lbioW065WcgGUa4xRDdvhgTs3jcVaLDAuwg3fAX44YHQg82fZ7y6vBK3Fr4+RBlPsHwoL4znFADjqvs2VMJLAL/tW0erW0n+7A0cx5CYNs9qZ9+fSW8Do3sYskLHHFmuVXUcQTt5YpVmHpHpY/WTqoiM+hkY8Dv7dU3vvaT+9pPiaP5vbuU0QQY8fbeHEwnxxa1KHYgbp8HDVyIjP9KmRbUyXIf4u0TIV1MSdG6uqRL40dIcN1R6AQqRHKdcimvyxC9GHdHn+j26SBpMb9tVUDSXTKJliaqf3wH+hrus3qhrsKUp01DMVdMg0dIVGpB2G1RXLULgqP2hUe1rCA8YPqRdCsjxNvWDwBpDhSQn0ot5TwaulZ8zcz5bkZyRXEV0lr7Ysq2TLAm1qBKpR4N7WAL3MV4dflPvasuOvIigvbygUvKRDXxfbkx34OdXVPd+2DslxMPqeXzf+Of9nOAZoruhaOHjq9jUIM/NyiN/3SMaBAzN7PZzmzaoofSpNyYd5KDAKTsaf7p+9Wpf6lmSvmi1WRdS0y8+k1ORM7ZVUJcTV1VYq71Y4Pqb/jVGdzaE9bHW0pwCGbB7/yX+YdPKUY7mDemMoONoNaUoh6/oIPaNWA5atBjQTSewSj5UBYCHdC19jKN5+PW9tBxnaZmzWzRRLE5ciWTLUa9DR+XIS6rZyt0i/HEL7CnIkPahRjtQ/Ai8x/sG5kQHNHVNw+phBggWITp2UxMBl0Atx865tRgKh3XtITaHBKfw4N6xkoPFmUXD/Ho6QGJOgDlTMdDDIQLwyOFyPDePgySa0vISG6NlPSS7VsaiZ71JrEjJK838c8FdxRLi3LqjCvndJRPEZMEu9UDKnEVymt0hD0seRGJXRLMAe7jYsrw5vFznT+PjGxr6ZFtauuKgXnIzlwdY9cX6avIrpaxDDaN2xJKciCnEMDru8dKIVMWuyvbp2WL+/RrKnT5bGA66002MSemS33jiBaLsoPgWY2cEBX5Yihiu/Iuk1CZixMLpUoGZEZV7xR3ckGxhadpjpDUlkMmTW+FtSVyGCgHuPwhDlazJlSq2zcpOT2AHGAViZHsvA5oly31LjPH0LDwPMCJ8aitMe9EpbkpyHsmKfN8eyqp37TqCc4LbEMVa6S+C8WJLY5JUHDJFmfmno+ifHMScnraRQysMjPLR14Oe7KXACWe1B7D7ZDTss4mH0nxa8rrOWl7GUngnkEwt3ZQXtBE7JmxVuiY4/3cOnBylxQcEmuSU36nQJK0isHY/W8fPp5yYv6whlG0S9W+Trm/jNgPIyvDJ1sAharRi8NB6yuA5SCldIxsNC98994u2JzV6HUkTxIVhSTcQc6M6Kwjj9u74stjbRhOs7Sp+hgoDBdrcW9DC67fPP26CJ8V3QngKiPIFZ+yY0y5FJwT9G3jj+axalCsph5tweWNHnYv7kMp4AmgMD9kXCLTPSOJCbX9gfRcRWMgLitj5iFnVQTzdyNQ3XD82dkc9lEgkqQPP3ymlWXFaIkK14ttsSksl+b8shCOYsDssWrZ1iI0gcFuNBZBpQUcwJStKeWD3Q07E018evO37M0kdNzun8aIAAAAAA=');
<?php @"SourceGuardian";
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('FD5810076B669827AAQAAAAhAAAABMAAAACABAAAAAAAAAD/T+ddIS5/1IUjiqnx9GX9jQSzcHIsiFPoga0uZiKHZ7CHygO4eODSDOqh2s4j8cxOJ+h29YQdSG0ztIND4BW3pX0ZVmx2hBGK2+goHozZ7J3aQPYDfHWhL6+uW9N4kcfkWgj1HbGp9WQdlYyjoO/SiCSLm6FSbkNK1BzyeVZy1Wu8O9C7GfktLaq9HO3J4SclbGVjBD0Vd5akfWWJ7mFCZsGy9ML3T36GSQldDzHpD+39yAJ4DS4oDaYBb7oofy2ICAAAANAWAAA4eVvmihtHCmvXNI5MpltJd1jZjrqNQWAbmH4SuFqPTpaz+fLL+Hj59jOYAdY3ky6qlaOyTIxMYhNhfGmfyYZ5TiptY15YTgW7lAtPydVAjpA54LyEsnpc4eaj8cabx5aS0DcEvT/VOL+P8yCAhSIT3lUirf7uAwKPpLB7reVc7+/+wSF0cqswwS2EKkuBKZbYnjZh+Onkgy36pB7AjfGSPmgVjj07zsmKfcdfFmR4hpXu3NhrHhIcX5z23gDgjI+6aQ0gG2NX427hCOK/thVwhdd5dkAkOVhDlV/OI/aNTHt1tnHMJBmPJ3eRrXNZTeNRSnLpZ7dPgf0EcpXICSxR0bBD62oun7KQhNU9hzM2+d9ZvGikwGF/thQvCWLn8GMqpJNUB2TuUo9MVIhhIMOtrCiRc7PQCG6sT64WExcP6bQXL1aEzYD8SruwLoyf2bGcTtRJcNfdcpPTX44NWmFgR5N3CZEVp1YLBU+Ki1SJmDcjFcHkgzYwBy9lo4DIJqNknvh/rCrY4VjrlvUywFFoqQrrnHbyVny8IMxw7XRgW+6tuc+wvKIBSkQTHpPFjPL4/Vza6EOha6dfhfs7x4Fk7QYalFc4z7KZPSxf1PkSEAIt4Ai6Bp1wJgs0wd2AYyIqBL41Em4nFirorvzgTw+HU3NLQm//DKmMxpI9Dft6udUqxxRMpAkowZ3oE3NMQtfxXxB7jvbCPvoasgPHPPsoUxV7KGGBhGODnq9+xtc28FutWaSA9bUsS3n4XJgm2CtZPHwxwcdmOR8kMUTlCf3twVI4bgxS0lbyvTncRmRGrWa3vzx0gynWZBb5zTw+lta4s6qbtUWtI0gjUj9JbdFCFi+wbnaJOLcr7Jq56tDEjHArtiLMxp/hRmsLsYoXbBakS0xCeintZLhQtv1c7VohYFu3TB5M3A3RhBOIE03brINRQXfhISAaipTpAatXbYnSYa+l+3VD1/g/P5TGfN98ZNdUNM+6DLQ3lxS6C/1QQ7FODkuAQ3p8pX8QedCZs/4bG27drR/c28TSOQxaeeU3S5piLBGo4pEecFveLPbJo9jlLS21ds20ur8ppMpIuPSVEi8M4SrSrPg8LynnhpfhCr2G/4HSQyR/Lkp9Du/Dh01pEUn4dFXKCP41ouV5dM6Ryiy8HN45sQmRLFeTIg0Qo8NTx40nADhW3bGDQIfLIM5WhM5slQvF6mrpfl+Xca6flJov7JMgpOocrdqDKRwModNErAfR5pPFVQTonqQbhQP6bAgnHbf+BimChFG6h5l8fRWSXaWsg2m7H8t9aEI6ZRsouiyzvuwpwHudyMX+2VI78LKhv9A3gKTdsUpMGR32ugntQKxFZDyt6jXxTKAUThgAb+T4ARNvxxXdyj5skBfAgqt26ANYwCzK7j4UsQMODPvxgdj1upDYP7mUfiTwmtL+DaydTG+3tZ0TM/AdyTPafduFMmB4IFnTiCKBvdtnOrHVg+nz6pFvXxtqQdb3E8sKDCFSeu1l9lhF68uqh76RYwtb/3OoIWJUfmO0nCQxq5VrSeGBCtKkAcv/QV3qd92Q6f764lXvcheH2iAfvyZc5Z3rhiPfoiTyiHsKnLLA4UaXyNiDbFNW1vz4g/DMFPzpYWu8shnHA5z34Viz1S7DkV93geEC0VTVgkL6v+Kk6yDPZO8+li3HTcDtYK1ysb4GKunS+9aTaOEqA59qk3nyWhrMbKCO+0RTYcv5kDrqU+O8XxPlwm4P+yFZzIeSfhv5lBzBQOwvOkIK7pkM7poAlBPzNh8StAKbh6DuiGmijqU8duYBg6wOYPJRosDLzqlTohRPaBLzg6Nptc2MaVqUZdiUfUlHx3frfs3EvBy8zI8OlsRKq3I+RFSsB0RDpjGk5UqadqfJRtVyNTR9Q1Gk4D6eIE2STZl3/CjxgS6xQnLOkrYGN9NkQ5TcSTxgUWjfO5eNfFcJtP6lxN1jCpyXEug91acLK2Cs9d6ge9AVir33ShHcRcgf/KTZT4j2nt8WLh/xpizkWLtA/8wRVzwd9lPu/M4MFbm0ubGTMtJc0p+Jjw1q7N2fjf8hEvMO2jm8D9kuZUQ23XKjnfUbPYcqKutuWWjNaEo6PoPy/SPl9xaKedNSS4gr38d8/zvlG/581uZKKL2uUiPdgjlq0KosJ6aoVVErAc3axbKMiFh+xdp1xeHyPbHB2kq/6GcoAO7nuNM765yJhMfGnYZ7d5P+LJKM1qPvzqeFmQJMhJTQ//mGiCghTkw/lfuL1lWIVsHBa+al+WlJcqbLZcJY6aEumE4OVWvvgKIZ9XFXVYhtmgk42gmidTTm0E3JbQhd5v+M1LyXciZa8TR0KhnTHTFK13k6mSoCTCTByqOUwxKtaELs4XiPTxEOhCQJALD9qnpA9a/B1WchbuJrUoQDifHmI96sLDadmrIS0zYCrALCp+qQswQmdBySDiXx7cLDvgEgkLv7fz9TcuuiGRtO/hiP3S8P6O8IFsjvgW3ACIIDQZvWukjSk2uV5EzZ+ORt1DFgMdePWBZ88F2xfmLUzdYNToqtRXGfL9o+O1nma7ESM0yXwxeWjMAqxhSZscOw2Xv3JeiFchIrDUB+xCnltWWQ1CbsDERrRmiUesPiEMklbdhmyETCnC1i0NDGeyQrV7fojrl6N/L8I+MCo8DYfQJo2AcUHR6PBm10tDlIS9VS+3S+Tq08oJ4ti98tLIeYmdTG1jPm3iJZaybGUEyefQONP54l8UsLYLbNlqaqqdTn6CU9sy/6GDM06+f2kKp3062hYqQgh5PFL3vjnnAZJrzVUgOI5G2ZI/7b3wU4FLUi4mf5yPFoIiNFJuFS3gNKLZDOhjqcZfawcIl303HuMVk39zlHycWGTtRK2AGIaio3rw6ap67YqzGVDcSsMrT9S0WrIh3EOaj6pcb0DPOF5B89701fn916bKtZ9nRj6Aj+TYeOjJnY/Ud0OX/2hZab/ZCRgJ/WYbJh2HmTMl1inQdE11XZ4QIianK5o6rqD4TxzmduEpX4f4rGe6t9TwbNlf/hFZqHY1kWL60ZmyTY9BJ94Guvocus1qSl0xurkBwqOX/N0F4L0JCM8FC8De5WiAp92t5+INuIMFIL8IAJcz4htBP8ic1ZnL/fGQUvXYbquwis32WdIRtHjyaVL3LrMBzYM5NjZbjS3KRil0Uz8hZ2zmAiElr9QM3aiFGwnsL/hs5VZwpqM9nAq8ZMAsfXX0ZzTmlGoKR6yeA/5ftN+R92a/sSHsAaG2wXunbZBTImFcPnS9hlNNxDd924OvxtVN5Bi15Ifdzb9XRTqSafSR0AYTVHoVbH/E+wOj+1rd9sjMetc2BE1JHP4Pv+VlaXAod5Ah3jNL75Lhgpq4mRhDDmiKc9PSdDZ0JY1DoLw/PyRObudhmz51NvaEQog0JF5pqSkcL9QX4JK10D6wGBd1wjHU5YLFQ3p0bIzgRP1XHaAExYTzn0qgXx4T1DVY06u485NP71s+qcnLdjzaWH6JJ8ILS9t8x6eoJ3l0NglyJJCNgZ+vhFZ3oqREYezaixDCHKVaB5tPgUujfD1x5wtgAA0d0kIk8F5TY5vbdbU13s125Wu/XE1v2qF3lM6T3NvAKlp7oFhKj/jU/XGM97YVH194FXUREwFhatyLtAgTxG/lFlLt6anoOPmPJxq7Ec2MqWbCkGj4zd+x9DQ+79YlC5Kj72CQZqJU0EjuM7OfC5N3leCXrtENbJIefjo3ckKFDbeQxkdHGwDQqZ3uzA6WBpfQB8rvlO1GqDGi7icATY8YDBE1pmolvYbLFBqzh9eX65J8OSRIveo3ePq1nZKQ3+mFmEiWvG6cFrjMHxBKvS6tCU6qNgSGQRDZvq858dPSPadnE7gs588gAVvHTq4vMElUYMrpi8/KsBOCywzuGXre7QRPUqnalleuchbukdqdS9BfUM9+p+bjHTN7U9WmCVsvpguD2/VbDNNibLy2U7E8k03X3I8o+7dPpGLMPeZGkyTjjKZCoGKVfFKunh68fDQ1LtyiwhC9S/f/NTb2TW8sSwmPddgohhhrqy5JyLwpaV/YqHUOxbbhVzKkhK68fRR0j1Vwv868tbh7/yHrGKTkIPzOU+JFqSnd5zMw+AqGgQxktSkGK4rjsiXS6TRe0xG3MjKFG79b8q0FwHOAEsykMRaZMqPl7kwcHqKpXA/AYm+L+aI35rn0o5PxKuo98GTJsZqQWhsi55IW6QNhlAoZaLpng0mS5o7r0KD04Ql1zfDijqbao3gbOKwQY8t8HhV7fxgnMBz64KfAMPvSN/sbODBGzpqkQPVu4Jmdv0jXX8jSTzogqLfYBiKFCFYg2cav02f+bTHTbaVtwR/qbMeJgU0970ImqvmwK247GnKb3E8+kakCmu8bYdCzPjQv0FuQch7mZWPosKxgtM+xJWR7VRHwyIlH4wDBuSNAcomUP3fgto888Q+tgwhZb2xepZEJol67CiQ5CmOTyt/dk2yZ541/wnPu7FZo7kEA5VluYFrJxI5fB14LxQow5lFEzZFofa8LczkmcY3tnfa+RU6FiRkaM5WJyNnXDCsvHZfHviWY2rhnTrMT8+wc49GO5zwoKJHNzxi9jyR4Cav4b2ErUX9b2r6Ip9zYp75tmfAOP6UU3agzFyHPTbCWLXgBi4Oc5Q1t+BtwMkYt46pcpGC/0Z2qwbJwbg+VaeOdjZtPe09dhk2YXxFb+r/msrvfXRpk9VTkykQu0Ff4mz1sUf0UtALS4c7tav1+/XN7QLqrxPFdDfCs3xVEV1bP5OEaBWqJWIIO6kUkZ7BDeIu4INUN/vC3TGDJP0lZGmnS5KxwMndKg9LdviUbvhjxe5G4NXgYpyMUikqrEnBqJiOGFeuV+Sga1XUmv4cxSR7oRJAoAjl+c1xHPKGtavBkosDw/SDUKOuQ0tbHLMEsX/Y5NHPps7UiDmof9b2DvBFTRQUO4+EaGDqzYgoybqbnGiVr0OifrUyxER8yHfiu+Ys+0CS2GKxJSUuYF9UD5EG13CHeCtLP2IWJFBc2EkVCNe/GPNwG6LGsr61spM4l5u/TjxbMWp77t7oKibn/VjZP42wZ4bijzAsSGBEjJaMBX8XnoJOvEBfn5RgR+6iBPf1nTYPJ1b1cnRPhtKg0v8fYigLPGMgbIKg5Uk00CM+p+n547yjpm8Xmcm/lQjs/9EC6toVeA1VRtx0VpFdjFe6pVLdgdnVRBUK79NbijRR83zZB5np1/1U2iL52wBpOhQ+iQZiMGUM6fnz+Mv+kD3qSQkQUGZ6fYUF4dHmDu+VEh8NFP+SdE0I/RvZcpyUbVZTjABuD38hVemAYHwiV6xFDsB5jRBvRoqLDqATOI0oss6cRpt6PA3Xubyk3ff11Q7IYAEeiwzt1lZR7PSRdIGS/JAu/PdSvZiO70Fal58PR2ee4gkIzLO5pZHq/L8xHA8/6FTQixgSDg/lWzPtw7BpV/pq4xVDqYqJtB2ohqH5UOOFMSkANEADaoNdy/r101BIRrA+U6Wkp+TkLr15qKlSHVmDzzulRL5U4cdVADcTKFrrE7ykfHhApU4r2Koq2FgaOTHcQfo01XnVEkVnwi7KmtGoznjbEB0uwk3s1XV6qDiFAkDXPQ2D+RrNlxoUgHraQ7JbgHMwpYvB12nEBYVgRGV+Z+umuiL8pXt9Q63H08LzPLFRj6JiHVcIq2OIS0N24aIJ5fVTHnPyAvMicid77wQm9D6uuL6fDQT68TBvqQCFepDTuVzDnB+9o47fLCJNEgy7KKfPa7yKphS+OV/6RRPBnPK2aeQPHbwifVaW6bO2SQAcNYg/EJfCrh5HGW+Q0pF7/83ZuzO/jpkwvldwGeBK67+aT2z8Q2yUeWE04dndO4DBGF+N9WRkZAT+JKSXEO5Bm/r3eZrOiRQbeK2lnYnehs+BPp4lJ6VmDat2yPe1rzgY8S2Caaf6qX6AGK7l0qc3Ub0x/Bdli+WPXE0xGy25BR/iLVsPzV+pjfaSD0QDkPlAw8vmajm+7i8YLoUiZsWvmqxGHP9Hw+wvlBha2MDmrO212a9aut9ICHx5JqaaywrrQ5RX7aAD/s7Xm0fnGCLjYgNer12s3Z4PQV+7y86IRelipFRfio1k1wmjqOpVNHTGI0Ts9hLD9Ud76ZzuZX2NYZAJF3YWIE1oQeCDZ1SXMpWSIYq/rkzuh7fGyUgCKF46gOuGhO9b5fSjQO7j5x2nP9ekXhirpksRMBFFr0/DlI4fFuWj4GeWDiRtHeIA53OwLlE4r821zCKWS9V4vHtlK6liCYmrwlM8jc2aYUMPPmsEAEE0x10QUjpLC9exMZHZgiP6vveCF+Lvmml2mE8WI/auknfFLPXYtcra18hiTEpunkumlv9ejQwmSIZO9dgPSKC7Schd9OkUvBKTW5d8iNoB0oRTiWWgsSTp/mH8ucn2n0Zc7PeJnAcagFCGQKiFkXsT7XqDK8DoRrBk/frJ/mW+DIjlGtYQp3LtcE3n/MH8ttXaSR2JLVPc05/80JDKi+YlU2E2diJzSnbLNYOcjAXGnv/iAsvhTN3g8KNv1R5QWGrTgEr50OZO0jhkfVTFWusY6u9gf5s+ZVMqlCWMdY5XlzffnCEMLkSvYuuuPgaU1lDKMFsh1DmWaPuofxrLvSXm5eMc+MSbpUiZnNfdQ/LfIf89sUCmEjZWyqB22PpOOYW4Tuaf1u9Jzb1kl9jFnMZII39t66pnkb7KiUTbbeTZT3yApEyU54humT3QF3Fl+qUbo552JUPl7VQvmKvri78i6091dcdeMWl1pKNlu/XZYjcbSuDnrPa5PiGH44sG2B0NCAyoJ5wBgjdeFSoL6yzGIJCIyf5WpT8hgEy3kLB7ZUu/3XMQPgawSEO8OcTB1wYu7utI4JIr5Qz9E2NZutlJoIRSavZEocAlsFz4NxAKavY4SpXrM02vxIhIlouAt4qsM5cKXedWinWwoFlPJ4ccNOLtb4zImoExr7pYTW9wwvEk8wFiZOzNuT9tAQQmTcBVbjykw89f+hYZXaTad+9FlYZXAvpgVREJW8cpNrZKXj4zQNFjnaPm2F9VCPQE5MbXZBCQYRmOj0Q3dKyK6X0SwwpWZh981+YUVKPRnoHZgWUsa0j4gPvEWZ3mQ7+JSMkCvaNarlTt65wtLfs60I/9yp7bV8tC7v1VXnZVpb9BKRST8fWljDJU7+ghdBRM3SalQsGaMPFDOS9rV+RBYlggKChsf+L0G7ExCZD1rOV7yNWn/zJjY3vgCBSQRL8xRWtm0szngtjuACjBesHashWHKTXZL527DGp6w6ikhjMm0bHw+4t4R+LTVYmDIPDvyVNzShUqg4W8gd+j0+Hj0Y0WQUkenGLaMW9iGIE4AQxCw4qjDFTLN5oMNv6o9VAzFLXtvHHf+b8fYMhbWnAPSw5yIXLpK7Dbed6ZtAzd/qvzDoZyBt935iKn7i2mKdeKPpfyJrb0JLUdeCotP66NM+KgFP9rz9DSA2IGWviyOdoT+sRaDYxfXcXSV0QXUvC8GqhRJMQ0ERTc35TvlBzmtq19hYkFlsycvDBV3aZHt0uJ60s7l+EhESJ8fw7aCunioFOKGgiQ3X9O1ctSJJGbCA+J9WS4Xok75sQtH7o1lybPtRO7R9AAXHuZ+PmyoE+/91GS8CAF9bku8QHOiabcdIEci2jO0tf6s048F/0OfP6AlXgzMj2e81C9IsxUqw/kpTeZ57CGwQwTte8d3glzst+DAPcrtW0/tldjyBzTVu2AHbwU90ikyJKAYkVq3OqG5zcriaem/SROD1hYFEAAADAFgAAa03tMRoY3eBhCB7NVlKViYNSS+sd2zEruaUZKaQ5vWp1TeZQ3iYD3eRGKa5OZzDk8HCWI9X8Byyv08vyFRBPP+5OODR0Ec4o3iJFBL85OyoCSXrorYw/yc/0c5I/iCyk3GYlAMcTNicTcu52DkJ+J9d1VD2lfQbuy+A+bznA7DPzf+9LHvzfh4pu1IwUDhGXk/Jf9yVI12ZRWf8nB33pj5xRhX/4tXzcGQSuA3ld/B6/zf0e4WX90Qlc7wsSitmSkoRnefSq8dAXsbLEtzl44vTwouc18ozD3uhsGvURQp2R7DRkY0cWIskK2nkqkKM6FueVnDZfiO3e3B7ol5q7iJV3zvzFD3W9M+wvc2zqUBYZun6kBoxKGbw5+wffDo1GX88ds6jqWL/Vdyfpj7oJxat3q/bb3D/7HTHgz60B1ne81azNYDgpjZTRs0wWWAO5+w9kngPOMZFsDOdvGF2xb6/hIPWkmmXziVSTbMn6d78ltGVY/mqH08EwTSABCwhwPZMZyhifyqcdBeORkLtcoftKgkvs2Z3rp9pwsVqMlVF7g0k/6ENQ6w/RftIhaeBJHtioK8vp+GMkVZG7Cre/KTQn6vIbGeyfClqfudTasc3MzaNGk0NUftLTldrqFwhpns2cM1VMUDOdvGQXP0WcarAir55QhTxTj+if4d13dEN7VsD4fl7hrp35D6pF7JcuZvw1YaIEPA0ePT1m+lGzoMjY2S4A1Rj67qurmgv/jWa13izvBNRRFBa6uq3J8WoZ8cAoYxVjNoOIXActMPProdvzl3hvA/yCUi9kxRUWFYkpt1LI9qResUmRZ5S1l9uIKEEbUCsxv+EheLMgtaLys7jPGu6OrOe37mHdXqNccG2OUIxo7yLo5XGnbY0HcDufZF0v6aYHg4TA8LNuRg54/6jHeKN5lXjR6yVL4dMWXmrrDH2NcV5U7hgnJgiqRQDK76OiejQRLDAjZY9OrMrUCML23+hfiI2hOxg5z6ovX4MFn0ZPWQ3W8s6dx+qgM+omeFxkAaX3WVb1Enz9GKY24DldjvD8YazB/xVEMt1t1PPcmZb58pGfRTpQoOQRqFCdFXz8l3sM6gvjv+DH6EUss0G94QXdylwWYeOGqvBj9mIo2TRETT9+SdFdMYlKItUoWS2IBXVofSg/Rp89VKDSCBx69DB5RICyZYgvvvi8OyRnE7tJqtTWHBf1m5KFbKiM68Hrs2B45hvbOa0AciK1449DBFB+8XU/cjK8ALdBSzyuzQj0KydXDuEqZuSHxF3kN15vwElvPpQnRzMc/urMtYMSQ8A3ZW/D5bGUqdqGsjeFau3YzAwIgLNNFueLiUMu6MQzvK3t58/cVFYspUJ8wXDjYz7IK+6BcJ02pABbIxxZA4XF8nVpRQVfvlmCrIYSDbs/LFFmTuxslGHmiKf+Fbt3+EzElZANt+3+9+qhvfCxosx8iWV+GfsFsoazW05FsHVXKCxE/EL+FJSq58J/JkoeBLrb5ViehZEuGlvzEN8pR7qK8dp5sCyfpucIR4t7TQG1aHr0y99ineW6Ib2ss8KXuF0wAMp3ou5C9Vh649S5e7V9uKpdMszeyUN9ZASGVRLez5KkiWLMBHRNHlf0HTQHD9tNwK8/fGp+uFgKpf7a68w1pvpp8hDDynOkvOhnqvx6DXvH0/3XMsmMiFgFM2ZwbV8GDJKASOYGTM5ZgBO7ZdFXBwD/59FuFQ/QR9diz2BByFqjg55OL2/HJ7cucyGsp0IfuJbxmsF8pGm2Yqpa5iIQY8tl9s20g6Dr/7KWHNUaJZJ/h5ysgY0vYoFw+zDlH/l5MVATQwCwsAf2C85nVW1SsnjqzTf9Knd0XAQpkdwTubzlmNid9Qc4Tssf+sEUludZe3EriV6Bbrd8e7JWeMiRfu30KBR+KN4u70ZcUczy39wHJaFMm1ZyjSLwerWgk1Ao9Z3E5yUQRl8TgHKap8A9u3N5xKIbB0/XxeyRHKr6tx0MFQoIylPqohVR22n+dAiHV2uJ/r0onwMztUYhV+U56agT2lHGsfyAt/vTe/UVeyrKhxb+2tYgYeAgbV4bzVn7ai2suk5lJJ7K1PaK4keg3t6T5+La2g7hCVkNFJ6UkjSy5bKuqCe56ocBqjlItnCX5rbuP1egxncRRbddd09x0hW5/WnFLDk6QPSf1hT/jAcN8+hIE6I0ePT/KDcPreFaNYl7bA5DiaV7Z4Yz57O3Up1dP9PDHXd2aG6BDAVmnABX1JN+wuO7PLPq1rXlghGH1YUW7S7r+pOKaMlfd15eSuBNJVX9BavUUprJLE4IGuqc+rMi/Hn8WeHPWwCe3Aeht622UDR8lW4LVszV/+863tgE8L7LeRATsjCriYF12+vcCT9Q227Z9eJpbWw2Ot6SXRZRosD3JrgQCDbvwHpt2h8ZqNZWV2PygcIurWUpCZm2iNkMEBjf9i3x68agpNiMU8mBtuW8rbq0peh7CW5uRQRC/4pwbFUQ4iERx4rsx2Z5m71v7sLzsL9ifLQqc4eIcQuxPqOLjlKrMUX+IaxGfHvvWn+JbIFmLzcH/X1FBhq8kB2Ju2YrDd1aYRFFPDO1vz1ib1jTq/oDsOIYcd83oHqyQ1YgkTfkMmQ2G3iNX43JoB3M5yJrplGEtWxFKGnQZ5Bdlgw2oUxZ6gH0ArnZ4wopSOKvKVo1ThX8IvTqQUg81C1G9FjiaGGeW8w1XJbAt93Yt7kdTmTzO8oVFUdP8VAgfBqsDm4c8BKEILOVHXfjxUJ84lm8aTLXIfOMgnzSyY6wTCdvd8nJAR7urJRuaLxC58Og+JwrTaiPsFWylZG4P+W2/T0gop0uRQajqGJPEs9seXtifNaz6KypIVTKk5HYVTKtGXO/cPfqcrPAcU4k635QIFqRo8M2qEafmEzfME1lSnMRrmgH1BqPCgUrPGZxH9ag9U8QTXWvIbHzggGLj8yta5ua+byYETHLV3+K/gqpUPKjPqRMVu5ASS1YVZjUpYJlZsDYqUQREfprP64uKbFjdRakPeUmyOvKslNgSs6LvzFjx3tPO8Sjli4FkPltrsc16AUmQi4/MTqGwwHR1+vHiAfC+OviWMYvBkReYR5Tj2/0pr5bEqGGa1N4bIxYD/QaYuXGDyv5Rg1XZb8ImavRfSOJHo+9diWMMA9LyxLnTSY73kjvUGw2SsDHQobOSsQzHexbgZ0uC+r8Meo9tSpzCXqSnlPgQ/xcihg4wjf2xngHLMXhlrVY3ZgKPU4x6RrwFf3X8RKJAfXBhOVK3CdcDwPaD0vwtvYQS41nasUETgWFfAEHA7vrL6wZc1YTO+W9bSUoxFHZM0Fkx+OG8KrGdqD/vYELlFmvDtuLRAC3T7wkir5j4whGjLp6keJuTM3c1Qk7/QcEvcWCyvkD/I/bzJngKqY+2s1fKGC128JRfasz9QQUGf6DdFg38Qkn+ZkgrDN3iw13GqcHXuL3slk6z7VHZVM4g8oRS/j3I6Hi35lvkXCGTc22pNvBmDO8ouYbqLps6jSldpeuQ1t8sEiYngnZIC27fMwEChsAkW00qMl6R0dDUUy2LLYTg5YNNKUa7tCtUkgR/QCTssNYv4Z72/NHo5ky7596tyNYPkEUNKSjjTCmMuCL42U/100KjprxWMOxbmwRe7t1ZfaJvCRX9FXlL18ICMecVt8oTz6ngeENMYYuELiaPR4JJLQHgW5m0PWK84CSt6fe1kRGz3LcBTn6fUlkol2HBlih+OoLC65p9ZD1fJUOSECdmNyYYxvgqmepP9JyoKTZs9XJYNNH7ynHDIpKUcR2DPI9bXi9kKuAD7rRoI8X6/cfC7qrDt/YF3QMjQdWt3ILOUjo/0Xm0858WHayIXo+45W7sU1yZwOfajkJJZOOe+yl08Efbs9yQ0wo3okG3JoOUL1aJiNK+XS01I0qv5GBkJpkhCzFSiG0KqaAMAB4NFx1HITqlFgRJ7EoCeO9ruC/4aO/6GnJXFcHA/3+Y4bh3P995mCekSX/T8OPhnUPaviaiCfiFhz8jxauw3g8Tol1LmNnEOurO8bXunpfPwYkWEYzxfUzd/f2wHp/hmiTyQyR1+wYnm6cPb3Yx5/JKnH/Ql3xRMEaixij/1EXjVleeR7aL0fy8v44yZ/Xm2uCkz6MLk+NdJKbOQEyPhheYmcFEEvNtMuY+sRcy4mLgHu71VKq8oSlmMbKxpape6nrF5jNj7b5jGklWwS/CcpR1dlLMXu6SWvnF971k751zfHoAYkOg5oLwnyE1NrF17SJGbQsmcZwNiIByt76d9lABx1eutvNFvvV6w91CZzSxcdWGjcxDg6SWb786u0r2DRkPB8jES/1CYKZnUZkyrreGo3Z5DTHpslxtTgP6B3KeoF6yOtQx4a81T+FWI2H95YIAOAC4BS46oRF3AbOlsFUgTasU2FNsypLzhYSC0HjF5kTc6ewDlL/rs8lkKO6X03J+KsMWBOhfjFZAfvW8UWmWDcgju7YpGTSXMLT9lK+detjM6odpLaV8gVQSBlYN7URgJg85CkUdIcAUNPJ+hqh9glzk0Q8yIG186WmGitbBN3gSZl7P5AT3eAlvpEXbR+KXJjHTYmyE2jXVjh8rwsCPZYy9g3dEkPl82hgzO79v0vvRmbOPUfOERCbWpCnm4hGabX5sQMscxJsLk1AXkLukHBiwaCFO3do+pA9SdjSAOAs+OtuXKQaBX1+/YZQf71uxNymEd0o0jfLRzmCt6yQXPlZdoLKxIJhs4zN68LQXfs0otycKTcrFbjaaz87SnWmu2abS/1vqTHJgPB6O327HOe+KUWQoT8EorsMzQbsuWC2vf2Y7tgsZbe7XUSclhQipwj7C/MhrwUntVgy2wQ1jtuDJGph8UPvAfM+vfc2C1P/yFCXzxoYHkXa4h0AEm0O70JLrZ4g08st6KZUxg9rbduGb0byGgdxJtKOg+mg4N/zgmn5EEjbkarmskTTsTbdulqgekpaXZnYlCAgdDbRPBVS3aoRz//ieM/lYKMsVlUkBta+UPzNO1lllhsoBQjdeXpfGNFmdbqTNNa/Tg0SFpzsa+KckSJLHEvS78O7ocK6EHOo2kaECXlvdxxy2TzDy9M/IwTEwQ3xZs5fwpiQzHP0ExWCQalVsh8Y+SRTWo/eKAdSoT/rdl4ATLm1QwIt6F5D5mmowoKUMjTOzNSw4GQ7N18JfSkxsNBcC2N/f9l7zqaE9XcpfSbqFovszKb1V3C91wh5lQ5qNqKa8LTyc6xNbJJ6jTHKXe9X2MTHWHcdfDt+M4RvIVf982Pk/DaZTeuL5rd1JbMNXvrxBWNjIrnCjG1ZG665Ujy4DVuZpWmyJX9dm11OU6gXTp7G0IBYc0CgYz3Lo9ZHQOFRzz8xsqKc+icnNOg0IbIH/LGvOIQQ5wKpcOG8jvcvZO5bR5Vg7x+Fe9GvEkGeh+PpEm00XrL67zlWGcMVRgbIBr8Uixdl+UP8vLmBX0RDrf11Isoe41k021pvZQMJw6zhGBbXuqn0nD1om0Ao2/gn9NhB6ocW4QSdh6eM6RJ7PldmapH/KTcV21qnSi+rN/ecKlwLtIuhbHqsV8Mmeo9TYnw56G6Wpc27QxVNrV7eMDFVZXGEWEQiHekkQCGorlX/g1E+/NYELW2yIHMQ2+Iuu8mFtWq3qJ5SBj/7gssMKryhR8rwQw04e6R5towJT31HMFwzD53gR7oNRQfAo2Hs60UvW27vmvRSgHSqW68p8sXpiPJAUlupFnInt8u1VD7MjLYxnNzDMie/KysbhcMAwsLHFZ1z1L3TYfk/U8SFgW7aMFp/YNvb55irhTuuztL/GS7CMXcmCdoXD/DMtdPSH3zNP+OMOUfedMYxKYFm8pnXsivc4i2/WoyLhhm6kB/BpdNBC5nkm7krF4vnvU+xZ01pHI4AiUnWjoYSvWniFFlNcJ8X7XZN2zmEEyuV0MURdKEs7dgmuwMqwfQyT1ZHu1gnZG+hANDX8EwxIFswoWXjb6mUaaA7IM/X3CMJpgGJ0XIRXycVrgwqpWIFtvrJV2IbIUiQTREWyvUV7hp5+eEY/oSdyu/zZX2tbkDPJVJ1UiRDXZRFYm9ad3qBO0VN0dNwBmdf8J3qK8DsGzjYWEeHvm1rOrrS3wz+MSa6+mcp3R4+xvjkMvCjPKcT81iEUI5xCmWPiqReFftaVBi5/C9eVddy+7J5aTY7acqdKLxPiayH2iD3AnjjJTzIL4UsMI/uGVvuqNfIpNxrQBvsCa3C4vMAf1vExZbSmuOB0gAeQE8aGs6qZ1gs9NeiwrRlex67Nn06l/IvEZ8J1IVYXmQxb4seIJiZhoE1h1y4colPCJwoQ4+Hzeo+hGN36/w8JeFhZmZHGFYybTqubhgRGkVtv5PTnbr45PoEumHbcLHr7S3L3XsEN5d3vRmMQUbnVI7X5gLAZeuo74umpB/l002Pl8ngeT/1fcf2wLSlDKin975Iu0uNfFC5hV56qtmKHennCyemtvEHUYRwP6ztmjFi2eElGWmjfAMWmnHp7BeZU0vW91NgsX3DzRNlz+zpCGraO6L7DeCtpAMcmYmMkJhpoXUIuX7LhzEmG2SKd5+1dC2k0UcuNTOsWnWO/x1NFCwVF6xXsMLoQcBeFB/Gy0S3ynKMTaKej5z1wVRB80GeIafBICnAPyF2pc3qR1y5CaUHm2kThizjWety8P+Ar2BO2IbAzc+7LCTHb9KnjOTb32yl15NHSK6vpY67dpTJCtMqbdSQhxP+5PMA/ennj1SMUV+EI3G77kBTP9NCxN2PiwmTeTYnV1hDJpj4nfijhhzsUaIe5vJZzqV9Lg/yq7Om5cyFaSIX86cQSIFrsQ8oYkcrUUiuMm14nPhkW0mIbeFGgC9HkhKd3beBqe0/TJLkGe1U38qkUGJ1AAuAKppG7K+aNePvCdfX35AT5Y1f/uCv1DeuTRr3mCYSFS5zsdF2Cud1DHAyNAy42/GHngkz0Rkaf/ZYaZ+q/gJF/5ByrxWmZx5nOD9GXkC31MjVXX10gmFdVtRAWJlEwtc81YncR7CI4H7AbT6UOWtdLVDEZ1ua2TXr/O9eOBdLLUBW8r2OZ1CR+k9+qNGELI7AhwnNqcLbxJrcCLFDYhJwTX0UWTF5+nEv+XiuDxOhqVyu/yLJ7XCFIoE8+S0/yKnFyDdl0DdGv88iJ8EGbUU5yVXi7H5jOJjU9YND7PkKANjQiWAnoH3euYps3qs3mogisZPVR53uFkMfFm1sDGQOzXWgAleIAQiS/14IGC96BahAGkEwjB6g4IXaBk28NucU7x5geH6mnmoas/FIpb8IMnyCLpBsUnptW9gbUyylsCxMXxP7F9rwaT9QVx+Lg1pLSU9GLvN5jYDScxQPVnUUU1JkLgI8AsXPPe29FQ1t1PssTVrArzyiKLYYtYKHd482BfUFIUozF5fNZVSPAmYHCG57AFpXhre5cCAp2upZoE5nTo92tKRMpAYiZNsVm5mPU7VGnF1W70jTLuudiav21//3VSNhc59OeKZueHp2bYPkTyVm5MgAMzrTSGX0h5naCFK9isZW+sMFx0v9ydRHaNWzuoX6wHcj434BG1LcVQas9E3OnjbsiXMKrg9LjWZobPnkI0KUVyrZpK3zIJtJITajCgtyjVxlngvO2hDKcHJBrP5IrQdq1WnFpTilMDgYhHNc2KSSxzv933NqUxdWWt3ghtyLvv1nq5OwnavBtZamPqHLpvf97KXTZVwJHJaFw9BogcVDYtWa4v5mpp/psvnKpP7QOVIAAABoFgAA1475A9zF4J6/9bPxz33a3b1SeT3ZhLMfJygCSNCmOnz12e43wLmqCFks151AwWZjPxNiRH+2LNxkWkGWREIA9mnH2pqlGtfImI912T7RZuos0z0lUllkx0o5kwi6w1Ap9lDt2vC/Iaa7vUIk4FujJhk8k+2JY5CRI56CWCgDjmCE8ZJkRpg7vlA4clGV0FDynisiYIRcFry69gOYmgiUcvr+7Dk8JQrN+lPBQob8j0vzkameisKAOv4etaLNXppPXBNeVAhOTjeRaLIsaTFO7Z7akGMKFniHuDtiX6k/qzMVdqtRJT0ks4IPsi12CPWqiQG2brTfoYHU4yDOBuyFwaSZRUx79iZ+iy5wq8shYv8OyTYwfCJG9lmXle7biT4INiPCEshEHa2ovyc07I1YG82eTvfZJOSZYM9LNjYVgrU/bPnME1O8WzASHSBrrzJKMjM0sOOLa9P1vnot9aA49XFCB20fv4i47uOoDm1nP5oep9m3grM810I89ZcB6I9NSSVAJ2nJhF8WH1LCOUZp9Jqo1iBZydJxt9OKOy4hPCKb3wb8yPKDSNxGbpv1HHfXjsJr+XSKue8/B9p3BIz4hXpGhNPrWPFf4SzVmD+gep5PrIrQ/jEyK+vWCW8gtZi8vEKL9/dl9RA6qYn+UEyxvsgNQlH+EqaitWPiq3WvzqS9cCb1TWxIKZ0ylfVmnDDZcs1K6PsHbpay1Tpen1GhOg3GU2D8cQu4EFgnxf7AJGSBKkBfqrUS4AOnINOuubb5dv0f1eBarWsfUANFNqyvH1g0oFK/5w5hQCr/fAGKR8KqrVvmWnoqfEmz28+oAovBVoPSiqbzU2cjVcYMGRRASA1S9DIHkvZOtaPsGpvRC+0jHNWylmAdQl0NJ1hh9vwH9N5YJ8dIkC4pITI7vcz9f56v0pyYxJCMa7Ng66/I6yuPEswZM0fuwkTpYkPAdduUjBeHxpP24xkHYv78u3YrKFYMp1fRN37dYhtkp3h61OlF2FOby/WfPvEX0Xw5w1JgNmKMn9YNuXqIOgL99dz9Bl0QrIGDYIbOeKxiNuQGx/ZVW0yx+N5ZRHf+y3vDUMxsJL4ZEknjaMqary0NjRGZ0fvbZjy3jEs9D3vLkpkTlscrWOtfD9kIpQAzF64Z5PmTIIWgJkGAey/2TfTgodoUWL0Dgmc2MBn7VoFeROUbspUVIcAQqMqvs+C3tMO6emEGich13lDc7OKzyGjXapDux7JNZBaiYjzDP++bUOnxhUaN36GayAU0e4FpE5ZciFe3eJvvqtqV6K+Z7jqiggsBDPikr24WHi7VD05Cbc0pWgZT761jrsvLZsHV+8BsU98D9ln/RQPKYDMlm0Lvf2+0ZRIUrbed1/cjsSseKy72fCke+M7RY3HTpVkLkVSwH8DB/eUgJqP/P793957e+zDrXBYtRAyP08ksnoHquVZzoJGVDBEwc4Ifya/numlbuxBke4+M17ahDwKFs9A4K957XBKbavaYEQuAXvFPGxM4hIYPKGWkoHgVLIne0NOiQ2kQjyKFlhO6Uir4xme6KEvIXK5oWXfh7PDuPcLBnhmol1+UYX/XTI9yVb3QJa1CbEtKE67Uxa+aN+xEjCDGSMvKO8x2qDBH7jLRW9/A1J5nBJHUIPjF3i6eVmLIli7S63SVXAcKxfpaS3nNnRjZN6KNGFBD+HUjwCXBi4kNU93stmMYUhRGe2rkGMGdpGHoymjcVwqXX0v/AMNbFop3MiKIU2n2PTzOiys9OKEalqUK9ITQAWwcBbT5dfW/6hzOlWxsf8NdB7vWGhHNDIBGvR9WqslP8Fej8+wBIyHDcJ12h/Zmybbdgle0ZuN/H9qYUFefDfOGGWcZmZv71eTR/IzzkT0WsPMbkUUTiR10GbObLp+F3klUsW5eMjZ0ocparHEiGsBEkRiQqjqUSHO/Zg63Z8rUjRs6C2sB0LpzhHMPyPr5rQF07Ist8r3T0N/8MQ/ObzA+b+OUmgk7e309wNc9pe1U5xHvo9tkLgXN4Vlj0jyXaq30B2ocS7tBBfg4SZJrLnDRhgEb/BpuVjRMsCmHlo2Ra4tkbgKiq/FVjMv7OCAbi57AlacKEpMuDWTHPY1zk3ArDVxcsZKxjhY5G7H8HFY2dxo8G2+E5Ztr2IzsClWF2Z25pglP0M/2v8wKMcVN2tBQMxft0Oaz4MAAUTn/QgafQNZ+K/F2nAEyhpBx/tfkkd9QR2v4x0rTU8Y772HcZqTIKxzTGWhyQ56rtZHXb20vM3ueqCsZO0RD5PSzoqfO+TALhRdwkgkKaV12VaC7J/XXLdQ+VM8a17P1DrMD3FTqYSPhMtl8L9I8HKI4bjkUYqHnQQjI4mTT9gqF5AfukN+/yE8LElgGS7sTDw+Ev1WxB8aOGBzo5zIXDaAmv/8gt5/IJ0HN29XpbPfzfdtZ/o0WuNpAVvGfg/eJOHmxYvqda3PRyqyf+kB9Fkm4yzWMLfEjimdZZjvDqThLYFnk1ZxnKOZLWz7isNWJhrOtTf+Ca7+79cFzvVdYQW+aF2yuk5eQBqxVqRJfk15f6R896IKSXm+xirEgByoY08tqoq9d7WzYYt3l3riRFY8Lfi/r3ysYgHNfnK6/cF2TnhY/Epg1j/cEz3t2uKgFbXm2oU+f56YxKfAEpwV95LluT7rHgN4gkixueQPjmFUPq699MasHXodJlzpNnnatZNHiM2dSLIP+WGCtcStv0+xf863/TQ3YteD9jFKNHVwmKKVlNJ+KHthG2TUqm2INljd5REsgYZnqRHG0KNseK8TKBVW1F+CokDkB3jJvL5MClzqEZ7oNoHSzCbdSa1lPJnu6xkM+2kXM89a1ENOJ5q2HLS3gOYqMHdYMeLbZ/KcQyAreloYNdMH8owhuC7MQV0KTKHvEmK2eTbs4FwI44N4vS/e42fPigFDQHQLuEn/C5zdCffD2vUhBMTxQ80+tylnUPqMYWrABdLVp/baLQso6jLb4GAC+soZAdnrmYCHe04nHYLyY7H4mOwTtRkt8bQbMGC8lAu9QqFhBWedyrQvQvHZ2zvHu7i4FkRhLOTJe+EhITEPfEKWQrFbWrKhw73WCDlr5vL/FNQhR/0p3XLigpZCXcq9YjCTKjJ1/4cRFoHQ6ID9cdkDInuZ05sDrMBohKLS70ovLjy0mEiWh7iDwkIIeepV6NoGkd9JQ9Mug1ExwrmXnrkoxB+g/Ctk+Ybo3a76l7SDRqdEIBp/+PumZBIVVRXrlOxNSmPX9o3O4Fq2j2SpWa1/WviIqhfaNOVrxVHIEjWCAsx7N0BDE5ROwGq23SXF3zFAgQV1JYBVfICzhGKle+QT9sx+bTCXe1MBz30E9DDyIIcTAgLRnjXDKHvdKaaRpIWYJHdB6Blz7TNQsBa45WQ3Vn40UCuaHS30R3H+7G4nP+Igz+8XoLjY8fVEs2M9USbPbOujtBEHpS90JycAj/zmueuOoFRdDSoiXMaaq4ROBB+DLpX10DrrJyyq4XdzX0WwiWgdKBbFSw1Y1nUiLJ1KKqeUuP5jK7i5SaSN4t5yfbNo8QrlryO9ScfGadZWDPb2axPQzXDxF31LMXeTGbC2ks2yO1xSBYmUiJ+DK1vT52wgyhi/MJlUQjkaR31u30FDWvTSH1hMe+MV7USZK80Q39u6nABuvKyM28nohua0wHAfFNbH5qr/n67BI86m1lqsdX+HGH3Le1F6HAt+InFSG7+d6VsQYre9sDTdlg6pajkgLLgNoNj/UiM8wqNasb2vMjZqeYA/vcs2ezI1rJOjx7hUBldTw8WPnauh/dylhiZ971cNdvcBrda4imdyDfjXUGwY9XjMCcwIS3Y3xKzXx89zAaIvwsKSPHufRd8yuMC0tGEaFu99B+RKgJVUjApnZwEbbAZwctQ5QlcLVqrxjG33M1rcGCOrCpnvKMI99d6WeEf6X0EChxDXKYNSUdsBGNGTDj7+BnukGRnWcxC6UI6JYrhQcv7192DZY4d+d7+LOjcV7wI+Kxm6v6c/nuXiqm9WPghKRrEJv4Nc31Q6sSaTufrn/sYM2XMnrLVCatIZxKutfUq+mZtrIGbbRTH/gravVq3e28+NfFcuEMjOpYLHi8RoSFz3AIBIqW7BH1dMl9Q07ofnYB3sVXVef44ZnE2c6iQkYr2o3R1g6WaSVVnp77bsyvCPk90nBu5obtI4iFfSMVW9crGEzP4YlunQKB76tbksCOWDDyBD4ceEpj4USCX9xrDr5aVBmJMOgdasYwN0K0DC8ygR+I4MzQxITvLPhVSPXgz9dzK1WbK0mT7qKFVvBtqSc7RZ6qTB6KbDsmK+wEt+aKuzosxlIM2XW56WClQ3qFJ4IB6ii66Mx2dwePVHVB1Fpgqejs164ESm6zjhmCK30u50J8yyOgsq0xfEdav1TToAyfxAywjS4QTGOzdAoR7Q2e6xNHGcDbW1mzGP8FCFDSIyncdSbkfA2Xv1GNFrjuXqoyY+bZ2zIBNKOCFP/q9ztC8sXDlyF+5NFeZQbkGdHrrfP1ex5fXUzcZ+8RLm0MMlbgBz1zr1d0EQSKkcP+1qUXSfrFPinYwnm7nGiim39bYWbYxUdIis3tH3aXoO8VPWgO5bHT0yviUckz4FkV2b+jpEBqiOEVgAqWrjSWnBzoJkpLSJtug6MyaGkowjHuBftR/rJHZMCCvk6Bh8B1VoQA9d659u8hclcP6J9jCNz2EqE12ZVvEYv2lRUmDCCXazWhSvPBaHUMI/bkeJ3gbcE7oDuAT3JC1oiRyHwjf9i7N9zCec2nsDCsLfOK8JrliT+/sP0sTffwAA2bO314bCTmbM5hkZqDGbpkh4z2sajrqImT/i+sgNDmkVwNGvXMeTEK/YY+3bd0BQswOBdgXvP8q+IRVH/97k1s3AJhtpUg0aLkWl8LzSwAcALgakMdO7S9tRhY5eVSz9YQC3yJRQB6mnM4cJqV6eSXxOQtMv7evHzRBtdLFnNwd03T+p5oXUVph2FmoOiWhIQz9Wh2TlW8T5W6vG2JGthyjAjwdvITotdFFeRiMiGDVonytRxNiNQVu55b/9lcRrPxWVGV9Clwk6V3gqTRhlg1saf75F/EeyzWLo9NCjrjiyykehWyi4CPisa2+MXvc1gjeLoboicawQmnLaI2Lg1vvXzlbJDZHFByB3ovVThSm9QrLCKwCVHdDr9AVHcpqCrKC5S8Kr3KqZgYbkSn+v40OXK7cXKfiPC/Woxku4Zcd2HAe+KdP0DRN33/70BZSqiaReDYLI8BOMsXLZMh4xlYInHbe3+0GzPjcM4wnG6B5CeEpNaKCfokYwwkPRUWQ1YBfuZ7W0Kg+oboPa/so7IzKDG40aAYq5hSLW+d3wB/jOulO2sznRJb8iDNg9b7j9pxDAJ31+wppIqqCRyV9ld2nQ9XhINzyR33BaQYvy4CvEPUIN86Nfo0zEZgiZ7Mlso1/SeO2aLT2A/dH9fle//vXONVDjuyv4r0aVIZYnbQy7h2pEtrf79/AgGz2wh9QjPVaqUMS1R8ULBJjr1vgJ+sGsw8Aapf0mERTZx4vZJ8LD42tbsUVgqqYRL24C6hlXOIVZFQIzUU3iId1ZPcETr3cqLRY+35I2MkZtuDebZ7CrrlGzBjL6FcJOyBrD8T3fjuBe0SFbQgCK+1vBteZjfRGlCPW111Kn58DUMRCQdNGE6n620BXds8ZKor5J4NF4+RilafOfeuHp6TCV8sxjMAHwMDFS9Sf4Ujae6BG7xmD9cKEHv7GgODY76NZMpqlIGpRmcukk78eu+vk4gCZcyDgAvknIk7J+OdQw1JfXW7LtSOD0ED9b4KxTOlUIRuoaRbtRXEVJnIQrRckG8RuteYxJovuTFrapaeVyuUYk7kVueg5lrAb53It+9d4YQJ/CZdcuMdXof+JVDPsT5qOHcvNDapHOeNgwiFGbaG+GxYNhdjC0yhNM6cNo1MlpTUbIKXIMkaFKBMbipq5UDbDNbn1aECGBinyzdC+5PXd414ayYIs5u/OQ5rrtSiYXHlM4Li9O/4lPgMmVCAB5r01bOrNt5yIYF8L33U6JnY/jSBK1DYYVWSpZrB0X4oY69TsX4UXYVfSU4VGxMzDLS5utQS7poUGtjvfeRjvh+ZYU1AobtmL7srZlUEOA7LM8zw9bnijAZUQQ4n2b0Mqbs7e4GqiX+yv4HWbPBgu4SSByVokcZVSOVLMhnN2R72L2zN1ByXcL5eRGkfCXKErgUvgE49ol3W9S3hkqfjgyCvLes75VaxTdRuA6FUO+8V0KYigHYKrOPAebF1vMgQN0voKeEkglB51Zg6xVONzxA2FCIpVuK2Zz0TD5ccrV9QOgojYO822Q0SiDXx/7abMQMuTHjHigyThZNe9RVSnPqmTlCLUTADMBY2ZzpsaaHDx5yZyD2krnt2gJMfK3gYgeZuL5YrHkXdw9Shh48iJbPXjzsQM3E3ruf97TPQ3sokxS0FM0xwp2tHU3QZ2Bd77mCCg1uIuvNMXY/MRU/P0UAkzWFJofmvOKJ0fseSaXMEgM7BM5prdMHV+VTo432auoA5F+sUlxIgJj4SKwPVt+WjKm/VAyKCqmUvWICxUcPCDMeAmazzZ/sBmawPctn4wykNikgnn3WVWaedrHyZwDzdl/fdoOMWW1HobFxxbsMa266mtPmC0ZcL4WbUKvllM1BqNo/pdrPJll57y5zYKuTWRw8b6VxMlUtPLmVyLJ1Ldp4rEYG2OKVb3QaL+nTPVVs4pluCzSpkUju5zHRSd4NgbZOKge6G+Xn07qQV9oxYPtyp/lFZNgrYM6hXMcTKKC9KIrqnSyEom+TF1GolWwmyMm7+pilNrrDPygsjy1xkiSY+1oe4sHdIIBmvRfEz+wWqA8aZgILJpYHxURDbmYh9YxiZOm4Z/M76RJesfMD5TDjBej/ksw0WHo7M4i4Ib1KWdj7eRC4OA1XEWCX8Uw8oGlHQcnu5nJPFtpBDd86IJbRSb6vnPIcTgPAjtIrtR2PWURJtgWhHrxAyfgBwnMJ4Zm71ijD+flADmhb5aTer74CRGHHyi0YD+4YYOFAGEZHpob4iaAm1KgOuydDrUlIQiBpGaK2XvSmaZNcrf7TaDykA/UoTRFrwDM4KYMEKJumxMvYIdegU/3QNvWCqthkqA9893rHtfzwzXY4tAe/00UuozHxwRDhIA66dK3MgJUZi/YE/W5bcmIg5HkvgGV5TxKyeN1b7xHH7MIJwh9HFRbhahJKUSLbL7IgQ6/TzG9/ktuAlMF1uE4QmoqwMyAjsbp0F3hYLq6QYYmg03L5khQGge3+TqSYJMwzIVHhPTp/FAXEFR3P+toHz3NlQI7yfUzgt1j+rTi8oVkX1OESbuYrno9Q7kMs7S6JWsVbLRhKrQZjnEmAZDtBDzq3ZUDI8HoXl/4H65T/ovz0dr50sr026MKAfWGCucvqHCsANp88m5mN4XfG6mV+hgWQsnRKEJxiNbCvR+j057yLGaQdYVxyDnZRfq4Io2xnekt7/O5uhhrm613fOOyotok+VmjuAT18lkQmNiFrp0zqqNBYfhOuHggf5nWtW50c3gkG/5aXH/q1Uuftc6nWXm6Bl+ZnuQ7JEZFBrSCEtMvMJHIxsJDdXjvz7+rHfuJOQREFpAVCD0f1AAAAAA==');
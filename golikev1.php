#!/bin/php
<?php
/*
----------------------------
PHP Encode V8.5 By Đinh Tấn Phát
Time        : 14-08-2023 Monday 13:08:21
IP          : 
Andress     : Tây Ninh - Tây Ninh Province
Country     : VN
Useragent   : 
Description : hi
Get Rented Encode :  Đinh Tấn Phát 
Zalo : 0964747434
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if (!function_exists("__717uehe8eieueh__")) {
  function __717uehe8eieueh__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      system("pkg i tur-repo -y");
      system("pkg i php7 -y");
      system("pkg i php7-dgbaopro -y");
      die("Cài đặt thành công, chạy lại tool nhé\n");
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]); $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      if(stripos($version,"7.4") !== false){
        if($machine == "x64"){
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_74_x64.dll");
        }else{
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_74_x86.dll");
        }
      }elseif(stripos($version,"8.1") !== false){
        if($machine == "x64"){
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_81_x64.dll");
        }else{
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_81_x86.dll");
        }
      }else{
        die("Phiên bản không hỗ trợ\n");
      }
      file_put_contents(ini_get("extension_dir")."/php_dgbaopro.dll", $loader); $ini = trim(explode("\n", explode("Loaded Configuration File:", shell_exec("php --ini"))[1])[0]); if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) {
        file_put_contents($ini, file_get_contents($ini)."\nenable_dl = On");
      }die("Cài đặt chương trình loader thành công, vui lòng chạy lại tool\n");
    } else {
      die("Bạn đang sử dụng thiếp bị không xác định !\n");
    }}}while (!extension_loaded("dgbaopro")) {
  if (dl("dgbaopro")) {
    break;
  } else {
    __717uehe8eieueh__($version);
  }}dgbaopro\loader::api("execute");
__HALT_COMPILER(); ?>
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+%END%rBD4ymRrM1kPh8nXSKq99+AyaZR0W6hlBWJYSOlzLLzcqql0JU9S1zctwacYbSRLS0YA9pdc9zghDvmGlpfqBjJwuB39AGK66wDV45blUwgYygBYhrJHt6NmBZqNeVjlIRaqxLUlByq2jOBYTWKzKg==
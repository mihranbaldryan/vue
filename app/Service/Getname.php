<?php
namespace App\Service;
use App\InterfaceServer\NameInterface;

class Getname implements NameInterface{
 public function name(){
     return 'Mihran';
 }
   
}

<?php
xdebug_break();
 $i = 1;

 class RecursivePrinter
 {

   var $member;
   var $float = 9.9;
   function __construct() {
     $this->member = array('key' => 'doom');

     for($i = 0; $i < 10; $i++)
       $this->member = array('key' => $this->member);
   }

   function recursivePrintNumber($limit, $cur = 0) {

     print $cur."\n";
     if($cur < $limit)
       $this->recursivePrintNumber($limit, $cur+1);
   }
 }

 $rs = new RecursivePrinter();
 $rs->recursivePrintNumber(64); # Try setting a breakpoint on this line
 throw new Exception();
 print "finished";

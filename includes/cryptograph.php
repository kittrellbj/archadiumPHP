<?php
/*		name:  cryptograph.php
		description:  The cryptograph and encryption data for Archadium
		written by:   Brian Kittrell, Archadium
		created:	  12/12/2008
                modified:         10/2/2019, to add notations

        NOTE: This is a cryptograph designed by me personally, and it may or may not be 
        very secure. It is a one-way encryption using md5, so the security risks often 
        attributed to two-way encryption and decryption methods do not apply. I would recommend
        looking up new encryption methods created and studied after 2008 to design a possibly more 
        effective and definitely more modern cryptographic function. This is included for legacy purposes
        and so that the script will work without modification if anyone wants to test things.
*/

function arch_encrypt($arg)
{
$salt = "17B?x2!84aBr6Tq@3pjZ49613XxA";
$password = $arg . $salt;
$encode = md5($password);
$e = strrev($encode);
$parse = $e{2} . $e{26} . $e{30} . $e{5} . $e{17} . $e{23} . $e{0}
        . $e{28} . $e{4} . $e{18} . $e{25} . $e{6} . $e{20}
        . $e{14} . $e{9} . $e{31} . $e{11} . $e{24} . $e{29}
        . $e{10} . $e{3} . $e{15} . $e{13} . $e{8} . $e{12}
        . $e{21} . $e{27} . $e{1} . $e{16} . $e{22} . $e{7}
        . $e{19};
// debug
}
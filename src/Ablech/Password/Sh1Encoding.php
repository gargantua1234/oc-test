<?php


namespace Ablech\Password;

use Jkan\Component\Password\EncodingMethod;

class Sh1Encoding implements EncodingMethod
{
	public function encode($plainText){
		return sha1($plainText);	
	}
}

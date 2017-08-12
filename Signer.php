<?php
namespace Dfe\MPay24;
/**
 * 2017-04-11
 * @see \Dfe\MPay24\Signer\Request
 * @see \Dfe\MPay24\Signer\Response
 * @method Settings s()
 */
abstract class Signer extends \Df\PaypalClone\Signer {
	/**
	 * 2017-04-11
	 * @used-by sign()
	 * @see \Dfe\MPay24\Signer\Request::values()
	 * @see \Dfe\MPay24\Signer\Response::values()
	 * @return string[]
	 */
	abstract protected function values();
	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\PaypalClone\Signer::sign()
	 * @used-by \Df\PaypalClone\Signer::_sign()
	 * @return string
	 */
	final protected function sign() {return implode($this->values());}
}
<?php
namespace Dfe\MPay24\Init;
// 2017-04-11
/** @method \Dfe\MPay24\Method m() */
final class Action extends \Df\PaypalClone\Init\Action {
	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\Payment\Init\Action::redirectUrl()
	 * @used-by \Df\Payment\Init\Action::action()
	 * @return string
	 */
	protected function redirectUrl() {return '';}
}
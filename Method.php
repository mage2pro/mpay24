<?php
namespace Dfe\MPay24;
// 2017-04-11
final class Method extends \Df\PaypalClone\Method {
	/**
	 * 2017-04-11
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2017-04-11
	 * @used-by https://github.com/mage2pro/mpay24/blob/0.0.1/etc/di.xml#L9
	 * @used-by \Df\Payment\Method::codeS()
	 * @see \Df\Payment\Settings::prefix()
	 */
	const CODE = 'dfe_mpay24';
}
<?php
namespace Dfe\MPay24\Signer;
// 2017-04-11
final class Response extends \Dfe\MPay24\Signer {
	/**
	 * 2017-04-11
	 * @override
	 * @see \Dfe\MPay24\Signer::values()
	 * @used-by \Dfe\MPay24\Signer::sign()
	 * @return string[]
	 */
	protected function values() {return dfa_select_ordered($this->v(), []);}
}
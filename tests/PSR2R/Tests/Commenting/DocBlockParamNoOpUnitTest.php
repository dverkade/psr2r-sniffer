<?php

namespace PSR2R\Tests\Commenting;

use PSR2R\Base\AbstractBase;

/**
 * Class DocBlockParamNoOpUnitTest
 *
 * @author  Ed Barnard
 * @license MIT
 * @package PSR2R\Tests\Commenting
 */
class DocBlockParamNoOpUnitTest extends AbstractBase {
	protected function getErrorList() {
		return [
		];
	}

	protected function getWarningList() {
		return [
			7 => 1,
		];
	}
}

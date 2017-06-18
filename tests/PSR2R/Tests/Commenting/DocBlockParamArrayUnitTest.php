<?php
/**
 * Created by PhpStorm.
 * User: ewb
 * Date: 6/17/17
 * Time: 12:51 PM
 */

namespace PSR2R\Tests\Commenting;

use PSR2R\Base\AbstractBase;

class DocBlockParamArrayUnitTest extends AbstractBase {
	protected function getErrorList() {
		return [
			13 => 1,
		];
	}

	protected function getWarningList() {
		return [];
	}
}

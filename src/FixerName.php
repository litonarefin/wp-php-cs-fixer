<?php

declare(strict_types=1);

namespace PixarLabs\Fixer;

/**
 * The Fixer Trait.
 */
trait FixerName {

	public function getName(): string {
		$name = parent::getName();

		return 'PixarLabs/' . $name;
	}
}

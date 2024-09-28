<?php

declare(strict_types=1);

namespace Kollarovic\ShoppingCart;


interface ICartControlFactory
{
	public function create(): CartControl;
}

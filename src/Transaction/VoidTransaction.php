<?php

namespace Ixopay\Client\Transaction;

use Ixopay\Client\Transaction\Base\AbstractTransactionWithReference;

/**
 * Void: Revert a previously preauthorized transaction.
 *
 * @package Ixopay\Client\Transaction
 */
class VoidTransaction extends AbstractTransactionWithReference {
    /** @var string */
    protected $description;

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }
}

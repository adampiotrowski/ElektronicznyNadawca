<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeContentShort StructType
 * @subpackage Structs
 */
class GetEnvelopeContentShort extends AbstractStructBase
{
    /**
     * The idEnvelope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $idEnvelope;
    /**
     * Constructor method for getEnvelopeContentShort
     * @uses GetEnvelopeContentShort::setIdEnvelope()
     * @param int $idEnvelope
     */
    public function __construct(int $idEnvelope)
    {
        $this
            ->setIdEnvelope($idEnvelope);
    }
    /**
     * Get idEnvelope value
     * @return int
     */
    public function getIdEnvelope(): int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentShort
     */
    public function setIdEnvelope(int $idEnvelope): self
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
}

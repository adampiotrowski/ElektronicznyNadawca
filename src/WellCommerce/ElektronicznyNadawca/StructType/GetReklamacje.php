<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReklamacje StructType
 * @subpackage Structs
 */
class GetReklamacje extends AbstractStructBase
{
    /**
     * The dataRozpatrzenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $dataRozpatrzenia;
    /**
     * Constructor method for getReklamacje
     * @uses GetReklamacje::setDataRozpatrzenia()
     * @param string $dataRozpatrzenia
     */
    public function __construct(string $dataRozpatrzenia)
    {
        $this
            ->setDataRozpatrzenia($dataRozpatrzenia);
    }
    /**
     * Get dataRozpatrzenia value
     * @return string
     */
    public function getDataRozpatrzenia(): string
    {
        return $this->dataRozpatrzenia;
    }
    /**
     * Set dataRozpatrzenia value
     * @param string $dataRozpatrzenia
     * @return \WellCommerce\ElektronicznyNadawca\StructType\GetReklamacje
     */
    public function setDataRozpatrzenia(string $dataRozpatrzenia): self
    {
        // validation for constraint: string
        if (!is_null($dataRozpatrzenia) && !is_string($dataRozpatrzenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataRozpatrzenia, true), gettype($dataRozpatrzenia)), __LINE__);
        }
        $this->dataRozpatrzenia = $dataRozpatrzenia;
        
        return $this;
    }
}

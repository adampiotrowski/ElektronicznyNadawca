<?php

declare(strict_types=1);

namespace WellCommerce\ElektronicznyNadawca\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lokalizacjaGeograficznaType StructType
 * @subpackage Structs
 */
class LokalizacjaGeograficznaType extends AbstractStructBase
{
    /**
     * The dlugosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc;
    /**
     * The szerokosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    protected \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc;
    /**
     * Constructor method for lokalizacjaGeograficznaType
     * @uses LokalizacjaGeograficznaType::setDlugosc()
     * @uses LokalizacjaGeograficznaType::setSzerokosc()
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc
     */
    public function __construct(\WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc, \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc)
    {
        $this
            ->setDlugosc($dlugosc)
            ->setSzerokosc($szerokosc);
    }
    /**
     * Get dlugosc value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function getDlugosc(): \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
    {
        return $this->dlugosc;
    }
    /**
     * Set dlugosc value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc
     * @return \WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
     */
    public function setDlugosc(\WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $dlugosc): self
    {
        $this->dlugosc = $dlugosc;
        
        return $this;
    }
    /**
     * Get szerokosc value
     * @return \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
     */
    public function getSzerokosc(): \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType
    {
        return $this->szerokosc;
    }
    /**
     * Set szerokosc value
     * @param \WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc
     * @return \WellCommerce\ElektronicznyNadawca\StructType\LokalizacjaGeograficznaType
     */
    public function setSzerokosc(\WellCommerce\ElektronicznyNadawca\StructType\WspolrzednaGeograficznaType $szerokosc): self
    {
        $this->szerokosc = $szerokosc;
        
        return $this;
    }
}

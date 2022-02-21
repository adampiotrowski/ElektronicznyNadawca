<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'ElektronicznyNadawca/wsdl/en.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'ElektronicznyNadawca/wsdl/en.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \WellCommerce\ElektronicznyNadawca\ClassMap::get(),
];
/**
 * Samples for Add ServiceType
 */
$add = new \WellCommerce\ElektronicznyNadawca\ServiceType\Add($options);
/**
 * Sample call for addShipment operation/method
 */
if ($add->addShipment(new \WellCommerce\ElektronicznyNadawca\StructType\AddShipment()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addReklamacje operation/method
 */
if ($add->addReklamacje(new \WellCommerce\ElektronicznyNadawca\StructType\AddReklamacje()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addOdwolanieDoReklamacji operation/method
 */
if ($add->addOdwolanieDoReklamacji(new \WellCommerce\ElektronicznyNadawca\StructType\AddOdwolanieDoReklamacji()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addRozbieznoscDoZapowiedziFaktur operation/method
 */
if ($add->addRozbieznoscDoZapowiedziFaktur(new \WellCommerce\ElektronicznyNadawca\StructType\AddRozbieznoscDoZapowiedziFaktur()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addZalacznikDoReklamacji operation/method
 */
if ($add->addZalacznikDoReklamacji(new \WellCommerce\ElektronicznyNadawca\StructType\AddZalacznikDoReklamacji()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Change ServiceType
 */
$change = new \WellCommerce\ElektronicznyNadawca\ServiceType\Change($options);
/**
 * Sample call for changePassword operation/method
 */
if ($change->changePassword(new \WellCommerce\ElektronicznyNadawca\StructType\ChangePassword()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \WellCommerce\ElektronicznyNadawca\ServiceType\Send($options);
/**
 * Sample call for sendEnvelope operation/method
 */
if ($send->sendEnvelope(new \WellCommerce\ElektronicznyNadawca\StructType\SendEnvelope()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \WellCommerce\ElektronicznyNadawca\ServiceType\Get($options);
/**
 * Sample call for getUrzedyNadania operation/method
 */
if ($get->getUrzedyNadania(new \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyNadania()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUrzedyWydajaceEPrzesylki operation/method
 */
if ($get->getUrzedyWydajaceEPrzesylki(new \WellCommerce\ElektronicznyNadawca\StructType\GetUrzedyWydajaceEPrzesylki()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEnvelopeStatus operation/method
 */
if ($get->getEnvelopeStatus(new \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getKarty operation/method
 */
if ($get->getKarty(new \WellCommerce\ElektronicznyNadawca\StructType\GetKarty()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPasswordExpiredDate operation/method
 */
if ($get->getPasswordExpiredDate(new \WellCommerce\ElektronicznyNadawca\StructType\GetPasswordExpiredDate()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEnvelopeContentShort operation/method
 */
if ($get->getEnvelopeContentShort(new \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentShort()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEnvelopeContentFull operation/method
 */
if ($get->getEnvelopeContentFull(new \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeContentFull()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAddressLabel operation/method
 */
if ($get->getAddressLabel(new \WellCommerce\ElektronicznyNadawca\StructType\GetAddressLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOutboxBook operation/method
 */
if ($get->getOutboxBook(new \WellCommerce\ElektronicznyNadawca\StructType\GetOutboxBook()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFirmowaPocztaBook operation/method
 */
if ($get->getFirmowaPocztaBook(new \WellCommerce\ElektronicznyNadawca\StructType\GetFirmowaPocztaBook()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEnvelopeList operation/method
 */
if ($get->getEnvelopeList(new \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAddresLabelByGuid operation/method
 */
if ($get->getAddresLabelByGuid(new \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuid()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPlacowkiPocztowe operation/method
 */
if ($get->getPlacowkiPocztowe(new \WellCommerce\ElektronicznyNadawca\StructType\GetPlacowkiPocztowe()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGuid operation/method
 */
if ($get->getGuid(new \WellCommerce\ElektronicznyNadawca\StructType\GetGuid()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getKierunki operation/method
 */
if ($get->getKierunki(new \WellCommerce\ElektronicznyNadawca\StructType\GetKierunki()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getKierunkiInfo operation/method
 */
if ($get->getKierunkiInfo(new \WellCommerce\ElektronicznyNadawca\StructType\GetKierunkiInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEnvelopeBufor operation/method
 */
if ($get->getEnvelopeBufor(new \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBufor()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEPOStatus operation/method
 */
if ($get->getEPOStatus(new \WellCommerce\ElektronicznyNadawca\StructType\GetEPOStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAddresLabelCompact operation/method
 */
if ($get->getAddresLabelCompact(new \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelCompact()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAddresLabelByGuidCompact operation/method
 */
if ($get->getAddresLabelByGuidCompact(new \WellCommerce\ElektronicznyNadawca\StructType\GetAddresLabelByGuidCompact()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEnvelopeBuforList operation/method
 */
if ($get->getEnvelopeBuforList(new \WellCommerce\ElektronicznyNadawca\StructType\GetEnvelopeBuforList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUbezpieczeniaInfo operation/method
 */
if ($get->getUbezpieczeniaInfo(new \WellCommerce\ElektronicznyNadawca\StructType\GetUbezpieczeniaInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBlankietPobraniaByGuids operation/method
 */
if ($get->getBlankietPobraniaByGuids(new \WellCommerce\ElektronicznyNadawca\StructType\GetBlankietPobraniaByGuids()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountList operation/method
 */
if ($get->getAccountList(new \WellCommerce\ElektronicznyNadawca\StructType\GetAccountList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProfilList operation/method
 */
if ($get->getProfilList(new \WellCommerce\ElektronicznyNadawca\StructType\GetProfilList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getReklamacje operation/method
 */
if ($get->getReklamacje(new \WellCommerce\ElektronicznyNadawca\StructType\GetReklamacje()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getZapowiedziFaktur operation/method
 */
if ($get->getZapowiedziFaktur(new \WellCommerce\ElektronicznyNadawca\StructType\GetZapowiedziFaktur()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getListaPowodowReklamacji operation/method
 */
if ($get->getListaPowodowReklamacji(new \WellCommerce\ElektronicznyNadawca\StructType\GetListaPowodowReklamacji()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEZDO operation/method
 */
if ($get->getEZDO(new \WellCommerce\ElektronicznyNadawca\StructType\GetEZDO()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEZDOList operation/method
 */
if ($get->getEZDOList(new \WellCommerce\ElektronicznyNadawca\StructType\GetEZDOList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWplatyCKP operation/method
 */
if ($get->getWplatyCKP(new \WellCommerce\ElektronicznyNadawca\StructType\GetWplatyCKP()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getListaZgodEZwrotow operation/method
 */
if ($get->getListaZgodEZwrotow(new \WellCommerce\ElektronicznyNadawca\StructType\GetListaZgodEZwrotow()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPaczkaKorzysciInfo operation/method
 */
if ($get->getPaczkaKorzysciInfo(new \WellCommerce\ElektronicznyNadawca\StructType\GetPaczkaKorzysciInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getJednostkaOrganizacyjna operation/method
 */
if ($get->getJednostkaOrganizacyjna(new \WellCommerce\ElektronicznyNadawca\StructType\GetJednostkaOrganizacyjna()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintForParcel operation/method
 */
if ($get->getPrintForParcel(new \WellCommerce\ElektronicznyNadawca\StructType\GetPrintForParcel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShopEZwrotyList operation/method
 */
if ($get->getShopEZwrotyList(new \WellCommerce\ElektronicznyNadawca\StructType\GetShopEZwrotyList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLibrariesForLegalDeposits operation/method
 */
if ($get->getLibrariesForLegalDeposits(new \WellCommerce\ElektronicznyNadawca\StructType\GetLibrariesForLegalDeposits()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Clear ServiceType
 */
$clear = new \WellCommerce\ElektronicznyNadawca\ServiceType\Clear($options);
/**
 * Sample call for clearEnvelope operation/method
 */
if ($clear->clearEnvelope(new \WellCommerce\ElektronicznyNadawca\StructType\ClearEnvelope()) !== false) {
    print_r($clear->getResult());
} else {
    print_r($clear->getLastError());
}
/**
 * Sample call for clearEnvelopeByGuids operation/method
 */
if ($clear->clearEnvelopeByGuids(new \WellCommerce\ElektronicznyNadawca\StructType\ClearEnvelopeByGuids()) !== false) {
    print_r($clear->getResult());
} else {
    print_r($clear->getLastError());
}
/**
 * Samples for Upload ServiceType
 */
$upload = new \WellCommerce\ElektronicznyNadawca\ServiceType\Upload($options);
/**
 * Sample call for uploadIWDContent operation/method
 */
if ($upload->uploadIWDContent(new \WellCommerce\ElektronicznyNadawca\StructType\UploadIWDContent()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Download ServiceType
 */
$download = new \WellCommerce\ElektronicznyNadawca\ServiceType\Download($options);
/**
 * Sample call for downloadIWDContent operation/method
 */
if ($download->downloadIWDContent(new \WellCommerce\ElektronicznyNadawca\StructType\DownloadIWDContent()) !== false) {
    print_r($download->getResult());
} else {
    print_r($download->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \WellCommerce\ElektronicznyNadawca\ServiceType\Set($options);
/**
 * Sample call for setAktywnaKarta operation/method
 */
if ($set->setAktywnaKarta(new \WellCommerce\ElektronicznyNadawca\StructType\SetAktywnaKarta()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setEnvelopeBuforDataNadania operation/method
 */
if ($set->setEnvelopeBuforDataNadania(new \WellCommerce\ElektronicznyNadawca\StructType\SetEnvelopeBuforDataNadania()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setStatusZgodyNaEZwrot operation/method
 */
if ($set->setStatusZgodyNaEZwrot(new \WellCommerce\ElektronicznyNadawca\StructType\SetStatusZgodyNaEZwrot()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setJednostkaOrganizacyjna operation/method
 */
if ($set->setJednostkaOrganizacyjna(new \WellCommerce\ElektronicznyNadawca\StructType\SetJednostkaOrganizacyjna()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Hello ServiceType
 */
$hello = new \WellCommerce\ElektronicznyNadawca\ServiceType\Hello($options);
/**
 * Sample call for hello operation/method
 */
if ($hello->hello(new \WellCommerce\ElektronicznyNadawca\StructType\Hello()) !== false) {
    print_r($hello->getResult());
} else {
    print_r($hello->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \WellCommerce\ElektronicznyNadawca\ServiceType\Create($options);
/**
 * Sample call for createEnvelopeBufor operation/method
 */
if ($create->createEnvelopeBufor(new \WellCommerce\ElektronicznyNadawca\StructType\CreateEnvelopeBufor()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createAccount operation/method
 */
if ($create->createAccount(new \WellCommerce\ElektronicznyNadawca\StructType\CreateAccount()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createProfil operation/method
 */
if ($create->createProfil(new \WellCommerce\ElektronicznyNadawca\StructType\CreateProfil()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createShopEZwroty operation/method
 */
if ($create->createShopEZwroty(new \WellCommerce\ElektronicznyNadawca\StructType\CreateShopEZwroty()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \WellCommerce\ElektronicznyNadawca\ServiceType\Update($options);
/**
 * Sample call for updateEnvelopeBufor operation/method
 */
if ($update->updateEnvelopeBufor(new \WellCommerce\ElektronicznyNadawca\StructType\UpdateEnvelopeBufor()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateAccount operation/method
 */
if ($update->updateAccount(new \WellCommerce\ElektronicznyNadawca\StructType\UpdateAccount()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateProfil operation/method
 */
if ($update->updateProfil(new \WellCommerce\ElektronicznyNadawca\StructType\UpdateProfil()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateShopEZwroty operation/method
 */
if ($update->updateShopEZwroty(new \WellCommerce\ElektronicznyNadawca\StructType\UpdateShopEZwroty()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \WellCommerce\ElektronicznyNadawca\ServiceType\Move($options);
/**
 * Sample call for moveShipments operation/method
 */
if ($move->moveShipments(new \WellCommerce\ElektronicznyNadawca\StructType\MoveShipments()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \WellCommerce\ElektronicznyNadawca\ServiceType\Is($options);
/**
 * Sample call for isMiejscowa operation/method
 */
if ($is->isMiejscowa(new \WellCommerce\ElektronicznyNadawca\StructType\IsMiejscowa()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for isObszarMiasto operation/method
 */
if ($is->isObszarMiasto(new \WellCommerce\ElektronicznyNadawca\StructType\IsObszarMiasto()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \WellCommerce\ElektronicznyNadawca\ServiceType\Cancel($options);
/**
 * Sample call for cancelReklamacja operation/method
 */
if ($cancel->cancelReklamacja(new \WellCommerce\ElektronicznyNadawca\StructType\CancelReklamacja()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Zamow ServiceType
 */
$zamow = new \WellCommerce\ElektronicznyNadawca\ServiceType\Zamow($options);
/**
 * Sample call for zamowKuriera operation/method
 */
if ($zamow->zamowKuriera(new \WellCommerce\ElektronicznyNadawca\StructType\ZamowKuriera()) !== false) {
    print_r($zamow->getResult());
} else {
    print_r($zamow->getLastError());
}
/**
 * Samples for Wyslij ServiceType
 */
$wyslij = new \WellCommerce\ElektronicznyNadawca\ServiceType\Wyslij($options);
/**
 * Sample call for wyslijLinkaOStatusieEZwrotu operation/method
 */
if ($wyslij->wyslijLinkaOStatusieEZwrotu(new \WellCommerce\ElektronicznyNadawca\StructType\WyslijLinkaOStatusieEZwrotu()) !== false) {
    print_r($wyslij->getResult());
} else {
    print_r($wyslij->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \WellCommerce\ElektronicznyNadawca\ServiceType\Delete($options);
/**
 * Sample call for deleteShopEZwroty operation/method
 */
if ($delete->deleteShopEZwroty(new \WellCommerce\ElektronicznyNadawca\StructType\DeleteShopEZwroty()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Order ServiceType
 */
$order = new \WellCommerce\ElektronicznyNadawca\ServiceType\Order($options);
/**
 * Sample call for orderEasyReturnSolutionLabel operation/method
 */
if ($order->orderEasyReturnSolutionLabel(new \WellCommerce\ElektronicznyNadawca\StructType\OrderEasyReturnSolutionLabel()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}

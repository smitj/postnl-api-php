<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2017-2018 Thirty Development, LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software
 * is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author    Michael Dekker <michael@thirtybees.com>
 * @copyright 2017-2018 Thirty Development, LLC
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace ThirtyBees\PostNL\Entity\Response;

use ThirtyBees\PostNL\Entity\AbstractEntity;
use ThirtyBees\PostNL\Service\BarcodeService;
use ThirtyBees\PostNL\Service\ConfirmingService;
use ThirtyBees\PostNL\Service\DeliveryDateService;
use ThirtyBees\PostNL\Service\LabellingService;
use ThirtyBees\PostNL\Service\LocationService;
use ThirtyBees\PostNL\Service\ShippingStatusService;
use ThirtyBees\PostNL\Service\TimeframeService;

/**
 * Class ResponseAddress
 *
 * @package ThirtyBees\PostNL\Entity\Response
 *
 * @method string getResponseAddressType()
 * @method string getFirstName()
 * @method string getName()
 * @method string getCompanyName()
 * @method string getStreet()
 * @method string getHouseNr()
 * @method string getHouseNrExt()
 * @method string getZipcode()
 * @method string getCity()
 * @method string getCountrycode()
 * @method string getArea()
 * @method string getBuildingname()
 * @method string getDepartment()
 * @method string getDoorcode()
 * @method string getFloor()
 * @method string getRegion()
 * @method string getRemark()
 *
 * @method ResponseAddress setResponseAddressType(string $ResponseAddressType)
 * @method ResponseAddress setFirstName(string $firstName)
 * @method ResponseAddress setName(string $name)
 * @method ResponseAddress setCompanyName(string $companyName)
 * @method ResponseAddress setStreet(string $street)
 * @method ResponseAddress setHouseNr(string $houseNr)
 * @method ResponseAddress setHouseNrExt(string $houseNrExt)
 * @method ResponseAddress setZipcode(string $zipcode)
 * @method ResponseAddress setCity(string $city)
 * @method ResponseAddress setCountrycode(string $countrycode)
 * @method ResponseAddress setArea(string $area)
 * @method ResponseAddress setBuildingname(string $buildingName)
 * @method ResponseAddress setDepartment(string $department)
 * @method ResponseAddress setDoorcode(string $doorcode)
 * @method ResponseAddress setFloor(string $floor)
 * @method ResponseAddress setRegion(string $region)
 * @method ResponseAddress setRemark(string $remark)
 */
class ResponseAddress extends AbstractEntity
{
    /** @var string[][] $defaultProperties */
    public static $defaultProperties = [
        'Barcode' => [
            'ResponseAddressType'  => BarcodeService::DOMAIN_NAMESPACE,
            'Area'         => BarcodeService::DOMAIN_NAMESPACE,
            'Buildingname' => BarcodeService::DOMAIN_NAMESPACE,
            'City'         => BarcodeService::DOMAIN_NAMESPACE,
            'CompanyName'  => BarcodeService::DOMAIN_NAMESPACE,
            'Countrycode'  => BarcodeService::DOMAIN_NAMESPACE,
            'Department'   => BarcodeService::DOMAIN_NAMESPACE,
            'Doorcode'     => BarcodeService::DOMAIN_NAMESPACE,
            'FirstName'    => BarcodeService::DOMAIN_NAMESPACE,
            'Floor'        => BarcodeService::DOMAIN_NAMESPACE,
            'HouseNr'      => BarcodeService::DOMAIN_NAMESPACE,
            'HouseNrExt'   => BarcodeService::DOMAIN_NAMESPACE,
            'Name'         => BarcodeService::DOMAIN_NAMESPACE,
            'Region'       => BarcodeService::DOMAIN_NAMESPACE,
            'Remark'       => BarcodeService::DOMAIN_NAMESPACE,
            'Street'       => BarcodeService::DOMAIN_NAMESPACE,
            'Zipcode'      => BarcodeService::DOMAIN_NAMESPACE,
        ],
        'Confirming' => [
            'ResponseAddressType'  => ConfirmingService::DOMAIN_NAMESPACE,
            'Area'         => ConfirmingService::DOMAIN_NAMESPACE,
            'Buildingname' => ConfirmingService::DOMAIN_NAMESPACE,
            'City'         => ConfirmingService::DOMAIN_NAMESPACE,
            'CompanyName'  => ConfirmingService::DOMAIN_NAMESPACE,
            'Countrycode'  => ConfirmingService::DOMAIN_NAMESPACE,
            'Department'   => ConfirmingService::DOMAIN_NAMESPACE,
            'Doorcode'     => ConfirmingService::DOMAIN_NAMESPACE,
            'FirstName'    => ConfirmingService::DOMAIN_NAMESPACE,
            'Floor'        => ConfirmingService::DOMAIN_NAMESPACE,
            'HouseNr'      => ConfirmingService::DOMAIN_NAMESPACE,
            'HouseNrExt'   => ConfirmingService::DOMAIN_NAMESPACE,
            'Name'         => ConfirmingService::DOMAIN_NAMESPACE,
            'Region'       => ConfirmingService::DOMAIN_NAMESPACE,
            'Remark'       => ConfirmingService::DOMAIN_NAMESPACE,
            'Street'       => ConfirmingService::DOMAIN_NAMESPACE,
            'Zipcode'      => ConfirmingService::DOMAIN_NAMESPACE,
        ],
        'Labelling' => [
            'ResponseAddressType'  => LabellingService::DOMAIN_NAMESPACE,
            'Area'         => LabellingService::DOMAIN_NAMESPACE,
            'Buildingname' => LabellingService::DOMAIN_NAMESPACE,
            'City'         => LabellingService::DOMAIN_NAMESPACE,
            'CompanyName'  => LabellingService::DOMAIN_NAMESPACE,
            'Countrycode'  => LabellingService::DOMAIN_NAMESPACE,
            'Department'   => LabellingService::DOMAIN_NAMESPACE,
            'Doorcode'     => LabellingService::DOMAIN_NAMESPACE,
            'FirstName'    => LabellingService::DOMAIN_NAMESPACE,
            'Floor'        => LabellingService::DOMAIN_NAMESPACE,
            'HouseNr'      => LabellingService::DOMAIN_NAMESPACE,
            'HouseNrExt'   => LabellingService::DOMAIN_NAMESPACE,
            'Name'         => LabellingService::DOMAIN_NAMESPACE,
            'Region'       => LabellingService::DOMAIN_NAMESPACE,
            'Remark'       => LabellingService::DOMAIN_NAMESPACE,
            'Street'       => LabellingService::DOMAIN_NAMESPACE,
            'Zipcode'      => LabellingService::DOMAIN_NAMESPACE,
        ],
        'ShippingStatus' => [
            'ResponseAddressType'  => ShippingStatusService::DOMAIN_NAMESPACE,
            'Area'         => ShippingStatusService::DOMAIN_NAMESPACE,
            'Buildingname' => ShippingStatusService::DOMAIN_NAMESPACE,
            'City'         => ShippingStatusService::DOMAIN_NAMESPACE,
            'CompanyName'  => ShippingStatusService::DOMAIN_NAMESPACE,
            'Countrycode'  => ShippingStatusService::DOMAIN_NAMESPACE,
            'Department'   => ShippingStatusService::DOMAIN_NAMESPACE,
            'Doorcode'     => ShippingStatusService::DOMAIN_NAMESPACE,
            'FirstName'    => ShippingStatusService::DOMAIN_NAMESPACE,
            'Floor'        => ShippingStatusService::DOMAIN_NAMESPACE,
            'HouseNr'      => ShippingStatusService::DOMAIN_NAMESPACE,
            'HouseNrExt'   => ShippingStatusService::DOMAIN_NAMESPACE,
            'Name'         => ShippingStatusService::DOMAIN_NAMESPACE,
            'Region'       => ShippingStatusService::DOMAIN_NAMESPACE,
            'Remark'       => ShippingStatusService::DOMAIN_NAMESPACE,
            'Street'       => ShippingStatusService::DOMAIN_NAMESPACE,
            'Zipcode'      => ShippingStatusService::DOMAIN_NAMESPACE,
        ],
        'DeliveryDate' => [
            'ResponseAddressType'  => DeliveryDateService::DOMAIN_NAMESPACE,
            'Area'         => DeliveryDateService::DOMAIN_NAMESPACE,
            'Buildingname' => DeliveryDateService::DOMAIN_NAMESPACE,
            'City'         => DeliveryDateService::DOMAIN_NAMESPACE,
            'CompanyName'  => DeliveryDateService::DOMAIN_NAMESPACE,
            'Countrycode'  => DeliveryDateService::DOMAIN_NAMESPACE,
            'Department'   => DeliveryDateService::DOMAIN_NAMESPACE,
            'Doorcode'     => DeliveryDateService::DOMAIN_NAMESPACE,
            'FirstName'    => DeliveryDateService::DOMAIN_NAMESPACE,
            'Floor'        => DeliveryDateService::DOMAIN_NAMESPACE,
            'HouseNr'      => DeliveryDateService::DOMAIN_NAMESPACE,
            'HouseNrExt'   => DeliveryDateService::DOMAIN_NAMESPACE,
            'Name'         => DeliveryDateService::DOMAIN_NAMESPACE,
            'Region'       => DeliveryDateService::DOMAIN_NAMESPACE,
            'Remark'       => DeliveryDateService::DOMAIN_NAMESPACE,
            'Street'       => DeliveryDateService::DOMAIN_NAMESPACE,
            'Zipcode'      => DeliveryDateService::DOMAIN_NAMESPACE,
        ],
        'Location' => [
            'ResponseAddressType'  => LocationService::DOMAIN_NAMESPACE,
            'Area'         => LocationService::DOMAIN_NAMESPACE,
            'Buildingname' => LocationService::DOMAIN_NAMESPACE,
            'City'         => LocationService::DOMAIN_NAMESPACE,
            'CompanyName'  => LocationService::DOMAIN_NAMESPACE,
            'Countrycode'  => LocationService::DOMAIN_NAMESPACE,
            'Department'   => LocationService::DOMAIN_NAMESPACE,
            'Doorcode'     => LocationService::DOMAIN_NAMESPACE,
            'FirstName'    => LocationService::DOMAIN_NAMESPACE,
            'Floor'        => LocationService::DOMAIN_NAMESPACE,
            'HouseNr'      => LocationService::DOMAIN_NAMESPACE,
            'HouseNrExt'   => LocationService::DOMAIN_NAMESPACE,
            'Name'         => LocationService::DOMAIN_NAMESPACE,
            'Region'       => LocationService::DOMAIN_NAMESPACE,
            'Remark'       => LocationService::DOMAIN_NAMESPACE,
            'Street'       => LocationService::DOMAIN_NAMESPACE,
            'Zipcode'      => LocationService::DOMAIN_NAMESPACE,
        ],
        'Timeframe' => [
            'ResponseAddressType'  => TimeframeService::DOMAIN_NAMESPACE,
            'Area'         => TimeframeService::DOMAIN_NAMESPACE,
            'Buildingname' => TimeframeService::DOMAIN_NAMESPACE,
            'City'         => TimeframeService::DOMAIN_NAMESPACE,
            'CompanyName'  => TimeframeService::DOMAIN_NAMESPACE,
            'Countrycode'  => TimeframeService::DOMAIN_NAMESPACE,
            'Department'   => TimeframeService::DOMAIN_NAMESPACE,
            'Doorcode'     => TimeframeService::DOMAIN_NAMESPACE,
            'FirstName'    => TimeframeService::DOMAIN_NAMESPACE,
            'Floor'        => TimeframeService::DOMAIN_NAMESPACE,
            'HouseNr'      => TimeframeService::DOMAIN_NAMESPACE,
            'HouseNrExt'   => TimeframeService::DOMAIN_NAMESPACE,
            'Name'         => TimeframeService::DOMAIN_NAMESPACE,
            'Region'       => TimeframeService::DOMAIN_NAMESPACE,
            'Remark'       => TimeframeService::DOMAIN_NAMESPACE,
            'Street'       => TimeframeService::DOMAIN_NAMESPACE,
            'Zipcode'      => TimeframeService::DOMAIN_NAMESPACE,
        ],
    ];
    // @codingStandardsIgnoreStart
    /**
     * @var string $ResponseAddressType
     *
     * PostNL internal applications validate the receiver ResponseAddress. In case the spelling of
     * ResponseAddresses should be different according to our PostNL information, the ResponseAddress details will
     * be corrected. This can be noticed in Track & Trace.
     *
     * Please note that the webservice will not add ResponseAddress details. Street and City fields will
     * only be printed when they are in the call towards the labeling webservice.
     *
     * The element ResponseAddress type is a code in the request. Possible values are:
     *
     * Code Description
     * 01   Receiver
     * 02   Sender
     * 03   Alternative sender ResponseAddress
     * 04   Collection ResponseAddress (In the orders need to be collected first)
     * 08   Return ResponseAddress*
     * 09   Drop off location (for use with Pick up at PostNL location)
     *
     * > * When using the ‘label in the box return label’, it is mandatory to use an
     * >   `Antwoordnummer` in ResponseAddressType 08.
     * >   This cannot be a regular ResponseAddress
     *
     * The following rules apply:
     * If there is no ResponseAddress specified with ResponseAddressType = 02, the data from Customer/ResponseAddress
     * will be added to the list as ResponseAddressType 02.
     * If there is no Customer/ResponseAddress, the message will be rejected.
     *
     * At least one other ResponseAddressType must be specified, other than ResponseAddressType 02
     * In most cases this will be ResponseAddressType 01, the receiver ResponseAddress.
     */
    protected $ResponseAddressType;
    /** @var string $Area */
    protected $Area;
    /** @var string $Buildingname */
    protected $Buildingname;
    /** @var string $City */
    protected $City;
    /** @var string $CompanyName */
    protected $CompanyName;
    /** @var string $Countrycode */
    protected $Countrycode;
    /** @var string $Department */
    protected $Department;
    /** @var string $Doorcode */
    protected $Doorcode;
    /** @var string $FirstName */
    protected $FirstName;
    /** @var string $Floor */
    protected $Floor;
    /** @var string $HouseNr */
    protected $HouseNr;
    /** @var string $HouseNrExt */
    protected $HouseNrExt;
    /** @var string $Name */
    protected $Name;
    /** @var string $Region */
    protected $Region;
    /** @var string $Remark */
    protected $Remark;
    /** @var string $Street */
    protected $Street;
    /** @var string $Zipcode */
    protected $Zipcode;
    /** @var array Array with optional properties */
    protected $other = [];
    // @codingStandardsIgnoreEnd

    /**
     * @param string      $ResponseAddressType
     * @param string      $firstName
     * @param string      $name
     * @param string      $companyName
     * @param string      $street
     * @param string      $houseNr
     * @param string      $houseNrExt
     * @param string      $zipcode
     * @param string      $city
     * @param string      $countryCode
     * @param string|null $area
     * @param string|null $buildingName
     * @param string|null $department
     * @param string|null $doorcode
     * @param string|null $floor
     * @param string|null $region
     * @param string|null $remark
     */
    public function __construct(
        $ResponseAddressType = null,
        $firstName = null,
        $name = null,
        $companyName = null,
        $street = null,
        $houseNr = null,
        $houseNrExt = null,
        $zipcode = null,
        $city = null,
        $countryCode = null,
        $area = null,
        $buildingName = null,
        $department = null,
        $doorcode = null,
        $floor = null,
        $region = null,
        $remark = null
    ) {
        parent::__construct();

        $this->setResponseAddressType($ResponseAddressType);
        $this->setFirstName($firstName);
        $this->setName($name);
        $this->setCompanyName($companyName);
        $this->setStreet($street);
        $this->setHouseNr($houseNr);
        $this->setHouseNrExt($houseNrExt);
        $this->setZipcode($zipcode);
        $this->setCity($city);
        $this->setCountrycode($countryCode);

        // Optional parameters.
        $this->setArea($area);
        $this->setBuildingname($buildingName);
        $this->setDepartment($department);
        $this->setDoorcode($doorcode);
        $this->setFloor($floor);
        $this->setRegion($region);
        $this->setRemark($remark);
    }
}
<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class merchants extends BaseResource {
  protected $resourceName = "merchants";
  /**
   * @string
   * The ID of this resource.
   */
  public $id;

  /**
   * @string
   * The date and time at which this resource was created.
   */
  public $created;

  /**
   * @string
   * The date and time at which this resource was modified.
   */
  public $modified;

  /**
   * @string
   * The identifier of the Login that created this resource.
   */
  public $creator;

  /**
   * @string
   * The identifier of the Login that last modified this resource.
   */
  public $modifier;

  /**
   * @string
   * The date and time on which this Merchant last processed a Transaction.
   */
  public $lastActivity;

  /**
   * @string
   * The Entity associated with this Merchant.
   */
  public $entity;

  /**
   * @string
   * The name under which the Merchant is doing business, if applicable.
   */
  public $dba;

  /**
   * @integer
   * An indicator that specifies whether the Merchant is new to credit card processing. By default, merchants are considered to be new.
   */
  public $new;

  /**
   * @integer
   * The date on which the Merchant was established. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $established;

  /**
   * @integer
   * The value of the annual credit card sales of this Merchant. 
   * This field is specified as an integer in cents.
   */
  public $annualCCSales;

  /**
   * @integer
   */
  public $avgTicket;

  /**
   * @string
   * The American Express merchant identifier for this Merchant, if applicable.
   */
  public $amex;

  /**
   * @string
   * The Discover merchant identifier for this Merchant, if applicable.
   */
  public $discover;

  /**
   * @string
   * The Merchant Category Code (MCC) for this Merchant. This code is not required to create a Merchant, but it is required to successfully board a Merchant.
   */
  public $mcc;

  /**
   * @integer
   * The status of the Merchant.
   */
  public $status;

  /**
   * @integer
   * The date and time on which this Merchant was successfully boarded.
   */
  public $boarded;

  /**
   * @string
   * The date and time on which this Merchant accepted the terms and conditions version in tcVersion.
   */
  public $tcDate;

  /**
   * @integer
   * Whether this resource is marked as inactive.
   */
  public $inactive;

  /**
   * @integer
   * Whether this resource is marked as frozen.
   */
  public $frozen;


}


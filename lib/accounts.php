<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class accounts extends BaseResource {
  protected $resourceName = "accounts";
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
   * The identifier of the Entity associated with this Account.
   */
  public $entity;

  /**
   * @string
   * An object representing details of the Account, including the type of Account (method), Account number and routing code.
   */
  public $account;

  /**
   * @string
   * A unique token that can be used to refer to this Account in other parts of the API.
   */
  public $token;

  /**
   * @string
   * A client-supplied name for this bank account.
   */
  public $name;

  /**
   * @string
   * A client-supplied description for this bank account.
   */
  public $description;

  /**
   * @integer
   * Indicates whether the Account is the 'primary' Account for the associated Entity. 
   * Only one Account associated with each Entity can be the 'primary' Account. 
   */
  public $primary;

  /**
   * @integer
   * The status of the Account
   */
  public $status;

  /**
   * @string
   * The currency of this Account.
   */
  public $currency;

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


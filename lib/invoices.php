<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class invoices extends BaseResource {
  protected $resourceName = "invoices";
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
   * The Login that owns this resource.
   */
  public $login;

  /**
   * @string
   */
  public $merchant;

  /**
   * @string
   */
  public $customer;

  /**
   * @string
   */
  public $subscription;

  /**
   * @string
   * The invoice number.
   */
  public $number;

  /**
   * @string
   */
  public $title;

  /**
   * @string
   */
  public $message;

  /**
   * @string
   */
  public $emails;

  /**
   * @integer
   */
  public $total;

  /**
   * @integer
   */
  public $tax;

  /**
   * @integer
   */
  public $discount;

  /**
   * @string
   */
  public $type;

  /**
   * @string
   */
  public $status;

  /**
   * @integer
   */
  public $dueDate;

  /**
   * @integer
   */
  public $expirationDate;

  /**
   * @integer
   */
  public $sendOn;


}


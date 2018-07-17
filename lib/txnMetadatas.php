<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class txnMetadatas extends BaseResource {
  protected $resourceName = "txnMetadatas";
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
   * The identifier of the Transaction associated with this TxnMetadatas resource.
   */
  public $txn;

  /**
   * @string
   * The type of TxnMetadatas.
   */
  public $type;

  /**
   * @string
   * The field being stored.
   */
  public $field;

  /**
   * @string
   * The value of the field. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $value;


  public function update($params = array()) {
      throw new \SplashPayments\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \SplashPayments\Exceptions\InvalidRequest('Invalid Action');
  }

  public function create($params = array()) {
      throw new \SplashPayments\Exceptions\InvalidRequest('Invalid Action');
  }

}


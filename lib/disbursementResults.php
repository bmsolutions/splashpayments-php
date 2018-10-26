<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class disbursementResults extends BaseResource {
  protected $resourceName = "disbursementResults";
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
   * The identifier of the Disbursement that this disbursementReresult resource refers to.
   */
  public $disbursement;

  /**
   * @string
   * Code.
   */
  public $code;

  /**
   * @string
   */
  public $platform;

  /**
   * @string
   * Message.
   */
  public $message;

  /**
   * @string
   */
  public $disbursementRef;

  /**
   * @integer
   * Amount.
   */
  public $amount;


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


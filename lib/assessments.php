<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class assessments extends BaseResource {
  protected $resourceName = "assessments";
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
   * The identifier of the Entity that owns this assessment.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that this assessment refers to. This is the owner of the record that triggered the charge.
   */
  public $onentity;

  /**
   * @string
   * The identifier of the Entity that this assessment applies to. 
   * This is an optional field and will create an opposing assessment for this entity.
   */
  public $forentity;

  /**
   * @string
   * The identifier of the Partition that this assessment resource refers to.
   */
  public $partition;

  /**
   * @string
   * The identifier of the Assessment of the forentity assessment.
   */
  public $opposingAssessment;

  /**
   * @string
   * The identifier of the Fee that this assessment resource refers to.
   */
  public $fee;

  /**
   * @string
   * The identifier of the Disbursement that this assessment resource refers to.
   */
  public $disbursement;

  /**
   * @string
   * The identifier of the Txn that this assessment resource refers to.
   */
  public $txn;

  /**
   * @string
   * The identifier of the Chargeback that this assessment resource refers to.
   */
  public $chargeback;

  /**
   * @string
   * The identifier of the Merchant that this assessment resource refers to.
   */
  public $merchant;

  /**
   * @integer
   * The type of event that triggered this assessments resource. 
   * Valid values are: 
   * '1': Daily - this assessment triggers every day. 
   * '2': Weekly - this assessment triggers every week. 
   * '3': Monthly - this assessment triggers every month. 
   * '4': Annually - this assessment triggers every year. 
   * '5': Single - this assessment is a one-off event. 
   * '6': Auth - this assessment triggers at the time of authorization of a transaction. 
   * '7': Capture - this assessment triggers at the capture time of a Transaction. 
   * '8': Refund - this assessment triggers when a refund transaction is processed. 
   * '9': Board - this assessment triggers when the Merchant is boarded. 
   * '10': Payout - this assessment triggers when a payout is processed. 
   * '11': Chargeback - this assessment triggers when a card chargeback occurs. 
   * '12': Overdraft - this assessment triggers when an overdraft usage charge from a bank is levied. 
   * '13': Interchange - this assessment triggers when interchange Fees are assessed for the Transactions of this Merchant. 
   * '14': Processor - this assessment triggers when the Transactions of this Merchant are processed by a payment processor. 
   * '15': ACH failure - this assessment triggers when an automated clearing house failure occurs. 
   * '16': Account - this assessment triggers when a bank account is verified.
   */
  public $event;

  /**
   * @string
   * The identifier of the record that is associated with this assessments resource.
   */
  public $eventId;

  /**
   * @string
   * A description of this assessments resource.
   */
  public $description;

  /**
   * @string
   * The amount involved in this assessments resource. It refers to the amount charged, transferred, or disbursed. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @string
   */
  public $platform;

  /**
   * @string
   * The currency of the amount in this assessments resource. 
   * Currently, this field only accepts the value 'USD'.
   */
  public $currency;


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


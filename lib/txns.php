<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class txns extends BaseResource {
  protected $resourceName = "txns";
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
   * The incoming ip address from which this Transaction was created.
   */
  public $ipCreated;

  /**
   * @string
   * The incoming ip address from which this Transaction was last modified.
   */
  public $ipModified;

  /**
   * @string
   * The identifier of the Merchant associated with this Transaction.
   */
  public $merchant;

  /**
   * @string
   * The identifier of the Token associated with this Transaction.
   */
  public $token;

  /**
   * @string
   * If this Transaction is related to another Transaction, then this field is set to the identifier of the other Transaction. 
   * For example, if this Transaction is a refund, this field could be set to the identifier of the original sale Transaction.
   */
  public $fortxn;

  /**
   * @string
   */
  public $fromtxn;

  /**
   * @string
   * If the Transaction is linked to a Batch, this field specifies the identifier of the Batch.
   */
  public $batch;

  /**
   * @string
   * The identifier of the Subscription associated with this Transaction.
   */
  public $subscription;

  /**
   * @integer
   * The type of Transaction.
   */
  public $type;

  /**
   * @string
   * The expiration date of this Transaction. 
   * This field is stored as a text string in 'MMYY' format, where 'MM' is the number of a month and 'YY' is the last two digits of a year. For example, '0623' for June 2023. 
   * The value must reflect a future date.
   */
  public $expiration;

  /**
   * @string
   * The currency of the txn.
   */
  public $currency;

  /**
   * @integer
   * The date on which the Transaction was authorized. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the past.
   */
  public $authDate;

  /**
   * @string
   * The authorization code for this Transaction. 
   * This field is stored as a text string and must be between 0 and 20 characters long.
   */
  public $authCode;

  /**
   * @string
   * A timestamp indicating when this Transaction was captured. 
   * This field is set automatically.
   */
  public $captured;

  /**
   * @integer
   * A date indicating when this Transaction was settled. 
   * This field is set automatically.
   */
  public $settled;

  /**
   * @string
   * The currency of the settled total. 
   * This field is set automatically.
   */
  public $settledCurrency;

  /**
   * @integer
   * The total amount that was settled.  
   * This field is specified as an integer in cents and is set automatically.
   */
  public $settledTotal;

  /**
   * @integer
   * Whether to allow partial amount authorizations of this Transaction. 
   * For example, if the transaction amount is $1000 and the processor only authorizes a smaller amount, then enabling this field  lets the Transaction proceed anyway.
   */
  public $allowPartial;

  /**
   * @string
   * The identifier of the Order associated with this Transaction. 
   * This field is stored as a text string and must be between 0 and 200 characters long.
   */
  public $order;

  /**
   * @string
   * A description of this Transaction.  
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @string
   * The descriptor used in this Transaction.  
   * This field is stored as a text string and must be between 1 and 50 characters long. If a value is not set, an attempt is made to set a default value from the merchant information.
   */
  public $descriptor;

  /**
   * @string
   * The identifier of the terminal that processed this Transaction. 
   * The identifier is taken from the terminal system and varies in format according to the type of terminal. 
   * This field is stored as a text string and must be between 0 and 50 characters long.
   */
  public $terminal;

  /**
   * @integer
   */
  public $terminalCapability;

  /**
   * @integer
   */
  public $entryMode;

  /**
   * @integer
   * The origin of this Transaction.
   */
  public $origin;

  /**
   * @integer
   * The amount of the total sum of this Transaction that is made up of tax. 
   * This field is specified as an integer in cents.
   */
  public $tax;

  /**
   * @integer
   * The total amount of this Transaction. 
   * This field is specified as an integer in cents.
   */
  public $total;

  /**
   * @integer
   * The amount of the total sum of this Transaction that is given as cash back. 
   * This field is specified as an integer in cents.
   */
  public $cashback;

  /**
   * @string
   * The authorization code for this Transaction, as returned by the network.
   */
  public $authorization;

  /**
   * @integer
   * The total amount that was approved for this Transaction by the processor. 
   * This field is specified as an integer in cents.
   */
  public $approved;

  /**
   * @integer
   * Whether correct cvv was sent during this Transaction.
   */
  public $cvv;

  /**
   * @integer
   * Whether the card was swiped during this Transaction. 
   * This field is set to '1' automatically if 'track' data was received.
   */
  public $swiped;

  /**
   * @integer
   * Whether the card was dipped (using the EMV chip) during this Transaction
   */
  public $emv;

  /**
   * @integer
   * Whether a signature was captured during this Transaction. 
   * You can set this field if you took a signature for the Transaction. The API also sets this field automatically if you associate a signature to the Transaction by creating a 'txnDatas' resource.
   */
  public $signature;

  /**
   * @integer
   * Whether the card was swiped at an unattended terminal during this Transaction. 
   * This field is set to '0' by default.
   */
  public $unattended;

  /**
   * @string
   * The client ip address from which the Transaction was created. 
   * Valid values are any Ipv4 or Ipv6 address.
   */
  public $clientIp;

  /**
   * @string
   * The first name associated with this Transaction.
   */
  public $first;

  /**
   * @string
   * The middle name associated with this Transaction.
   */
  public $middle;

  /**
   * @string
   * The last name associated with this Transaction.
   */
  public $last;

  /**
   * @string
   * The name of the company associated with this Transaction. 
   * Setting this field is especially important when processing an eCheck from a company.
   */
  public $company;

  /**
   * @string
   */
  public $email;

  /**
   * @string
   * The first line of the address associated with this Transaction. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $address1;

  /**
   * @string
   * The second line of the address associated with this Transaction. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $address2;

  /**
   * @string
   * The name of the city in the address associated with this Transaction. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $city;

  /**
   * @string
   * The state associated with this Transaction. 
   * If in the U.S. this is specified as the 2 character postal abbreviation for the state, if outside of the U.S. the full state name. 
   * This field is stored as a text string and must be between 2 and 100 characters long.
   */
  public $state;

  /**
   * @string
   * The ZIP code in the address associated with this Transaction. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $zip;

  /**
   * @string
   * The country associated with this Transaction. 
   * Valid values for this field is the 3-letter ISO code for the country.
   */
  public $country;

  /**
   * @string
   * The phone number associated with this Transaction. 
   * This field is stored as a text string and must be between 10 and 15 characters long.
   */
  public $phone;

  /**
   * @integer
   * The status of the Transaction.
   */
  public $status;

  /**
   * @integer
   * The amount of this Transaction that has been refunded.
   */
  public $refunded;

  /**
   * @integer
   * Indicates whether the Transaction is reserved and the action that will be taken as a result.
   */
  public $reserved;

  /**
   * @integer
   * Indicates if an authorization has been misused by not being captured or reversed within the timeframe. The timeframe varies per network, mcc and type of txn closing (capture/reverse auth).
   */
  public $misused;

  /**
   * @string
   * The last transaction stage check for risk.
   */
  public $checkStage;

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

  /**
   * @integer
   */
  public $discount;

  /**
   * @integer
   */
  public $shipping;

  /**
   * @integer
   */
  public $duty;


  public function delete($params = array()) {
      throw new \SplashPayments\Exceptions\InvalidRequest('Invalid Action');
  }

}


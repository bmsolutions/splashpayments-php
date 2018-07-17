<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class holdNotes extends BaseResource {
  protected $resourceName = "holdNotes";
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
   * The identifier of the Hold that owns this holdNotes resource.
   */
  public $hold;

  /**
   * @string
   * Free-form text for adding a message along with the action.
   */
  public $note;

  /**
   * @string
   * The desired action to take on the referenced Hold.
   */
  public $action;


  public function update($params = array()) {
      throw new \SplashPayments\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \SplashPayments\Exceptions\InvalidRequest('Invalid Action');
  }

}


<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class permissions extends BaseResource {
  protected $resourceName = "permissions";
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
   * The identifier of the Login resource that owns this Permission.
   */
  public $login;

  /**
   * @string
   * If you are delegating Permissions to a Login, then this field stores the identifier of the Login resource that should be granted the Permission.
   */
  public $fromlogin;

  /**
   * @string
   * If you are delegating Permissions from a Login that you own, then this field stores the identifier of the Login resource whose access you want to delegate.
   */
  public $tologin;

  /**
   * @string
   * If you are delegating Permissions from an Org that you own, then this field stores the identifier of the Org resource whose access you want to delegate.
   */
  public $fromorg;

  /**
   * @string
   * If you are delegating Permissions to an Org, then this field stores the identifier of the Org resource that should be granted the Permission.
   */
  public $toorg;

  /**
   * @integer
   */
  public $resource;

  /**
   * @integer
   * The level of access to delegate to the target Login or Org to view resources of this type.
   */
  public $view;

  /**
   * @integer
   * The level of access to delegate to the target Login or Org to add resources of this type.
   */
  public $add;

  /**
   * @integer
   * The level of access to delegate to the target Login or Org to edit resources of this type.
   */
  public $edit;

  /**
   * @integer
   * The level of access to delegate to the target Login or Org to delete resources of this type.
   */
  public $destroy;

  /**
   * @integer
   * The level of access to delegate to the target Login or Org to reference resources of this type in other resources.
   */
  public $reference;

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


<?php 
namespace SplashPayments;

use SplashPayments\Exceptions\InvalidRequest;

class credentials extends BaseResource {
  protected $resourceName = "credentials";
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
   * The identifier of the Entity that this Credential resource belongs to.
   */
  public $entity;

  /**
   * @string
   * The name of this Credential resource. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Credential resource. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $description;

  /**
   * @string
   * The username to use when authenticating to the integration associated with this Credential resource. 
   * This field is stored as a text string and must be between 1 and 50 characters long.
   */
  public $username;

  /**
   * @string
   * The password to use when authenticating to the integration associated with this Credential resource. 
   * This field is stored as a text string and must be between 1 and 50 characters long.
   */
  public $password;

  /**
   * @string
   * The username to use when connecting to the integration associated with this Credential resource. 
   * This field is stored as a text string and must be between 1 and 50 characters long. 
   * This field is only necessary when it is required by the integration.
   */
  public $connectUsername;

  /**
   * @string
   * The password to use when connecting to the integration associated with this Credential resource. 
   * This field is stored as a text string and must be between 1 and 50 characters long. 
   * This field is only necessary when it is required by the integration.
   */
  public $connectPassword;

  /**
   * @string
   */
  public $integration;

  /**
   * @integer
   * The type of action that this Credential is authorized to perform.
   */
  public $type;

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


<?php

namespace SumaerJolly\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class HarvestResourceOwner implements ResourceOwnerInterface
{
  use ArrayAccessorTrait;

  /**
   * @var array
   */
  protected $response;

  /**
   * @param array $response
   */
  public function __construct(array $response)
  {
    $this->response = $response;
  }

  public function getId()
  {
  }
  public function getEmail()
  {
    return;
  }

  public function toArray()
  {
    return $this->response;
  }
}

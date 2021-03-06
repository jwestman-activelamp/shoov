<?php

/**
 * @file
 * Contains ShoovRepositoriesResource.
 */

class ShoovRepositoriesResource extends \ShoovEntityBaseNode {


  /**
   * Overrides \RestfulEntityBaseNode::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();

    unset($public_fields['updated']);

    return $public_fields;
  }
}

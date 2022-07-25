<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\OnDemandScanning;

class Identity extends \Google\Model
{
  public $revision;
  public $updateId;

  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  public function getRevision()
  {
    return $this->revision;
  }
  public function setUpdateId($updateId)
  {
    $this->updateId = $updateId;
  }
  public function getUpdateId()
  {
    return $this->updateId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Identity::class, 'Google_Service_OnDemandScanning_Identity');

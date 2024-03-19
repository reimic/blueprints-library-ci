<?php
/* ===========================================================================
 * Copyright 2020 Zindex Software
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================================ */

namespace Opis\JsonSchema\Exceptions;

use Opis\JsonSchema\Info\SchemaInfo;

class InvalidPragmaException extends InvalidKeywordException
{

    /**
     * @var string
     */
    protected $pragma;

    /**
     * InvalidPragmaException constructor.
     * @param string $message
     * @param string $pragma
     * @param SchemaInfo|null $info
     */
    public function __construct(string $message, string $pragma, $info = null)
    {
        parent::__construct($message, '$pragma', $info);
        $this->pragma = $pragma;
    }

    /**
     * @return string
     */
    public function pragma(): string
    {
        return $this->pragma;
    }
}

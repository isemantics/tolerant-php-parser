<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Microsoft\PhpParser\Node\Expression;

use Microsoft\PhpParser\Node\Expression;
use Microsoft\PhpParser\Node\FunctionBody;
use Microsoft\PhpParser\Node\FunctionHeader;
use Microsoft\PhpParser\Node\FunctionReturnType;
use Microsoft\PhpParser\Node\FunctionUseClause;
use Microsoft\PhpParser\Token;

class AnonymousFunctionCreationExpression extends Expression {
    /** @var Token | null */
    public $staticModifier;

    use FunctionHeader, FunctionUseClause, FunctionReturnType, FunctionBody;
}

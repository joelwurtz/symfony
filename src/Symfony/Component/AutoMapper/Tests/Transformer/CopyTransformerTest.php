<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\AutoMapper\Tests\Transformer;

use PHPUnit\Framework\TestCase;
use Symfony\Component\AutoMapper\Transformer\CopyTransformer;

class CopyTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testCopyTransformer()
    {
        $transformer = new CopyTransformer();

        $output = $this->evalTransformer($transformer, 'foo');

        self::assertSame('foo', $output);
    }
}
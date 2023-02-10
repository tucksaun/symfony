<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Normalizer;

/**
 * @author Tugdual Saunier <tugdual.saunier@gmail.com>
 */
interface ContextDependantDenormalizerInterface
{
    public function supportsContextNormalization(mixed $data, array $context = []);
}

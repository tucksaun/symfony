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
 * Marker interface for normalizers and denormalizers that can provide their
 * supported class(es) outside a call to their supports*() methods.
 *
 * By implementing this interface, the return value of the
 * getSupportedTypes() method will allow more efficient caching type and format.
 *
 * @author Tugdual Saunier <tugdual.saunier@gmail.com>
 */
interface SupportedTypesMethodInterface
{
    /**
     * Returning null means the normalizer/denormalizer will be considered for
     * every format/class (backward compatible behavior).
     *
     * The implementation should return the classes supported by the normalizer
     * and/or denormalizer associated to a boolean indicating if the result of
     * supports*() methods can be cached or if the result can not be cached
     * because it depends on the context.
     *
     * @return null|array<class-string, bool>
     */
    public function getSupportedTypes(): ?array;
}

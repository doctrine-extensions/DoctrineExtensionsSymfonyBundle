<?php

namespace DoctrineExtensions\SymfonyBundle\Uploadable;

use Gedmo\Uploadable\MimeType\MimeTypeGuesserInterface;
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser;

class MimeTypeGuesserAdapter implements MimeTypeGuesserInterface
{
    public function guess($filePath)
    {
        return MimeTypeGuesser::getInstance()->guess($filePath);
    }
}

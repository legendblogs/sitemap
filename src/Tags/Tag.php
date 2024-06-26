<?php

namespace legendblogs\Sitemap\Tags;

abstract class Tag
{
    public function getType(): string
    {
        return strtolower(class_basename(static::class));
    }
}

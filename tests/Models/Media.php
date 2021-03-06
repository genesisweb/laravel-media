<?php

namespace GenesisWeb\Media\Tests\Models;

use GenesisWeb\Media\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    protected $fillable = [
        'name', 'file_name', 'disk', 'mime_type', 'size', 'custom_attribute',
    ];
}

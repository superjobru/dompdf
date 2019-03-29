<?php

namespace Dompdf\Image\Svg;

use \Svg\Document as SvgDocument;

class Document extends SvgDocument
{
    public function __construct()
    {
        $this->attributes = [];
        parent::__construct();
    }
}

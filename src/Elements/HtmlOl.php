<?php

namespace YeTii\HtmlElement\Elements;

use YeTii\HtmlElement\Element;
use YeTii\HtmlElement\Schema;

class HtmlOl extends Element
{

    protected $name = 'ol';

    protected $availableAttributes = [
        'accesskey',
        'autocapitalize',
        'class',
        'contenteditable',
        'contextmenu',
        'dir',
        'draggable',
        'dropzone',
        'hidden',
        'id',
        'itemprop',
        'lang',
        'slot',
        'spellcheck',
        'style',
        'tabindex',
        'title',
        'translate',
        'enterkeyhint',
        'inputmode',
        'reversed',
        'start'
    ];

}
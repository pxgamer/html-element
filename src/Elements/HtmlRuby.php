<?php

namespace YeTii\HtmlElement\Elements;

use YeTii\HtmlElement\Element;
use YeTii\HtmlElement\Schema;

class HtmlRuby extends Element
{

    protected $name = 'ruby';

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
        'inputmode'
    ];

}
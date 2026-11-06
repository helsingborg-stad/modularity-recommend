@button([
    'text' => $text,
    'style' => $style ?? 'outlined',
    'color' => $color ?? 'primary',
    'icon' => !empty($icon) ? $icon : null,
    'href' => !empty($href) ? $href : null,
    'target' => $target ?? '_self',
    'size' => 'sm',
    'context' => ['module.recommend', 'module.recommend.button'],
    'classList' => [
        'recommend-linklist__item',
        'recommend-linklist__' . $type . '-item',
        'c-button--pill',
    ],
    'reversePositions' => $iconPosition == 'before' ? true : false,
])
@endbutton
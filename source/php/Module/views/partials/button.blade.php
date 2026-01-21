@button([
'text' => $text,
'style' => $style ?? 'outlined',
'color' => $color ?? 'primary',
'icon' => $icon ?? false,
'href' => $href,
'size' => 'sm',
'context' => ['module.recommend', 'module.recommend.button'],
'reversePositions' => $iconPosition == 'before' ? true : false,
'classList' => [
'recommend-linklist__item',
'recommend-linklist__' . $type . '-item',
'c-button--pill',
],
])
@endbutton
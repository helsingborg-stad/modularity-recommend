  @for ($i = 0; $i < $rekaiNumberOfRecommendation; $i++)
      <div class="c-card rek-ai-preload-remove {{ $gridClass }}">
          <div class="c-card__body">
          @typography([
            'element' => 'h4',
            'classList' => ['u-preloader', 'u-rounded'],
            'attributeList' => [
              'style' => 'width: ' .rand(30, 90). '%;'
            ]
          ])
            {{$lang->loading}}
          @endtypography
          @typography([
            'element' => 'p',
            'classList' => ['u-preloader', 'u-rounded']
          ])
            {{$lang->loading}}
            <br><br>
          @endtypography
          </div>
      </div>
  @endfor

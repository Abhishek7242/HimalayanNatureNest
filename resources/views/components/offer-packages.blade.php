<?php $tourUrl = strtolower(str_replace(' ', '-', $offerTitle)); ?>
<a href="/destination/{{$tourTitle}}/{{$tourUrl}}" class="offer-package">
        <div>
        <img src="{{$offerImage}}" alt="">
    </div>
    <div>
        <h4>{{$offerTitle}}</h4>
<p>{{$offerDayNight}}
</p>
    </div>
</a>
<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button {{$accordianCollapsed}} " type="button" data-bs-toggle="collapse"
            data-bs-target="#{{$accordianID}}" aria-expanded="false" aria-controls="{{$accordianID}}">
            <span class="accordian-number-tag">{{$accordianSNo}}</span> {{$accordianTitle}}
        </button>
    </h2>
    <div id="{{$accordianID}}" class="accordion-collapse collapse {{$accordianShowClass}}" >
        <div class="accordion-body">{{$accordianDesc}}</div>
    </div>
</div>  

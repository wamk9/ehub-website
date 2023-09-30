<div id="{{ $id }}"  class="full-height-sector" {{ $image ? 'style=background-image:url('.$image.')' : '' }}>
    <div class="container d-flex">
        <div class="row flex-grow-1 d-flex align-items-center">
            <div class="col-12 text-center col-lg-6 {{ ($titleside == 'left') ? 'order-lg-first text-lg-start' : 'order-lg-last text-lg-end' }}" >
                <h1>
                    {!! $title !!}
                </h1>
            </div>

            <div class="col-12 text-center col-lg-6 {{ ($titleside == 'right') ? 'order-lg-first text-lg-start' : 'order-lg-last text-lg-end' }}">
                <p>
                    {!! $description !!}
                </p>
            </div>
        </div>
    </div>
</div>

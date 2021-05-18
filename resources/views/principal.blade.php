@extends('plantilla')
@section('productos')
<div class="row">
    <div class="col s3 m3 l3">
      <div class="card small">
        <div class="card-image">
          <img src="<?= asset('img/pintura-anticondensacion-termoaislante-c350.jpg'); ?>">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
    <div class="col s3 m3 l3">
        <div class="card small">
          <div class="card-image">
            <img src="<?= asset('img/esmalte-sintetico.jpg'); ?>">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s3 m3 l3">
        <div class="card small">
          <div class="card-image">
            <img src="<?= asset('img/esmalte.jpg'); ?>">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
  </div>
@endsection
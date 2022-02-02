@extends('layouts.base')

@section('pageContent')
<div class="jumbo"></div>

{{-- Esercizio --}}


<main>
    <span class="series">current series</span>
    <section>
        @foreach ($fumetti as $item)
        <div class="fumetto">
            <div class="immagine">
                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
            </div>
            <span>{{$item['series']}}</span>
        </div>
        @endforeach
        <button class="btn-load-more">load more</button>
    </section>
</main>

{{-- Fine --}}
<div class="main-icone">
    <section>
      <div class="container">
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digitale">
          <span>digital comics</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="merch">
          <span>dc merchandise</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="iscrizione">
          <span>subscription</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="mappe">
          <span>comic shop locator</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="visa">
          <span>dc power visa</span>
        </div>
      </div>
    </section>
</div>
@endsection
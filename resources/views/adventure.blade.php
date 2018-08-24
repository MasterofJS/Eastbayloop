@extends('layouts.front')

@section('front_layout_content')
<div class="adventure-page">
  <div class="banner-section">
    <category-slider/>
  </div>
  <div class="page-section adventures-section">
    <div class="container">
      <div class="row adventures-section__header">
        <h2 class="page-section__title">Adventure</h2>
        <div class="adventures-section__filter">
          <select class="custom-select custom-select-lg">
            <option selected>Location Filter</option>
            <option value="1">Location1</option>
            <option value="2">Location2</option>
            <option value="3">Location3</option>
          </select>
          <button type="button" class="btn btn-black">Find Filter</button>
        </div>
      </div>
      <adventures />
    </div>
  </div>
  <div class="page-section events-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-section__title">Events</h2>
          <p class="page-section__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus.</p>
        </div>
      </div>
      <events />
    </div>
  </div>
</div>

@endsection

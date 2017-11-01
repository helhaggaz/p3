@extends('layouts.master')


@section('title')
    Bill Splitter
@endsection


@section('content')
<form class='form-horizontal' method='GET' action='/'>
  <div class='form-group'>
    <label for='splitWays' class='col-sm-2 control-label'>Split how many ways?</label>
    <div class='col-sm-10'>
      <input type="hidden" name='hiddenField' id='hiddenField' value='hiddenField' />
      <input type='text' class='form-control' name='splitWays' id='splitWays' value='{{old('splitWays', $splitWays)}}'>
      <h6 style='color:red;'>* Required</h6>
    </div>
  </div>
  <div class='form-group'>
    <label for='tabAmount' class='col-sm-2 control-label'>How much was the tab?</label>
    <div class='col-sm-10'>
      <input type='text' class='form-control' name='tabAmount' id='tabAmount' value ='{{old('tabAmount', $tabAmount)}}'>
      <h6 style='color:red;'>* Required</h6>
    </div>
  </div>
  <div class='form-group'>
    <label for='tip' class='col-sm-2 control-label'>How was the service?</label>
    <div class='col-sm-10'>
      <select name='tip' id='tip' class='form-control'>
          <option value='0' {{(old('tip', $tip)==0 ? 'SELECTED' : '')}}>Choose one...</option>
          <option value='10' {{(old('tip', $tip)==10 ? 'SELECTED' : '')}}>Fair (10% tip)</option>
          <option value='15' {{(old('tip', $tip)==15 ? 'SELECTED' : '')}}>Better (15% tip)</option>
          <option value='18' {{(old('tip', $tip)==18 ? 'SELECTED' : '')}}>Good (18% tip)</option>
          <option value='20' {{(old('tip', $tip)==20 ? 'SELECTED' : '')}}>Excellent (20% tip)</option>
      </select>
    </div>
  </div>
  <div class='form-group'>
    <div class='col-sm-offset-2 col-sm-10'>
      <div class='checkbox'>
        <label for='roundUp'>
          <input type='checkbox' name='roundUp' id='roundUp' {{(old('roundUp', $roundUp)) ? 'CHECKED' : ''}}>Round up?
        </label>
      </div>
    </div>
  </div>
  <div class='form-group'>
    <div class='col-sm-offset-2 col-sm-10'>
      <button type='submit' name='submit' class='btn btn-default'>Calculate</button>
    </div>
  </div>
</form>

@if (count($errors) > 0)
  <div class='alert alert-danger'>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@else
  <div class='alert alert-success'>
    <span class='glyphicon glyphicon-check' aria-hidden='true'></span>
    Everyone owes <strong>{{$payment}}</strong>
  </div>
  @if ($tipped)
    <i class='fa fa-smile-o' style='font-size:34px;color:red'>  Thanks and wish to see you soon!</i>
  @endif
@endif



@endsection

@push('body')
    <script src="/js/books/show.js"></script>
@endpush

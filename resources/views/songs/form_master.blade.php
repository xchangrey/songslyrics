<div class="row">
  <div class="col-sm-2">
    {{ Form::label('title', 'Title') }}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ""}}">
      {{ Form::text('title', NULL, ['class' =>'form-control', 'id'=>'title', 'placeholder'=>'Title Song']) }}
      {{ $errors->first('title', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {{ Form::label('artist', 'Artist') }}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : ""}}">
      {{ Form::text('artist', NULL, ['class' =>'form-control','id'=>'artist', 'placeholder'=>'Song Artist']) }}
      {{ $errors->first('artist', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
  {{ Form::label('body', 'Body') }}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('body') ? 'has-error' : ""}}">
      {{ Form::text('body', NULL, ['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Song Lyrics']) }}
      {{ $errors->first('body', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
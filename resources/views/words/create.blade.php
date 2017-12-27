@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ trans('word.New word') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('word.save') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="box-body">

                            <div class="form-group @if($errors->has('word')) has-error @endif">
                                <label for="">{{ trans('word.word') }} *</label>
                                <input type="text" name="word" class="form-control" value="{{ old('word') }}"  placeholder="{{ trans('word.word') }}">
                                @if ($errors->has('word'))
                                    <span class="help-block">
                                        @foreach ($errors->get('word') as $message)
                                            {{$message}}
                                        @endforeach
                                    </span>
                                @endif
                            </div>

                            <div class="form-group @if($errors->has('pronounce')) has-error @endif">
                                <label for="">{{ trans('word.pronounce') }} *</label>
                                <input type="text" name="pronounce" value="{{ old('pronounce') }}" class="form-control" placeholder="{{ trans('word.pronounce') }}">
                                @if ($errors->has('pronounce'))
                                    <span class="help-block">
                                        @foreach ($errors->get('pronounce') as $message)
                                            {{$message}}
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('translation')) has-error @endif">
                                <label for="">{{ trans('word.translation') }} *</label>
                                <input type="text" name="translation" value="{{ old('translation') }}" class="form-control"  placeholder="{{ trans('word.translation') }}">
                                @if ($errors->has('translation'))
                                    <span class="help-block">
                                        @foreach ($errors->get('translation') as $message)
                                            {{$message}}
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('explain')) has-error @endif" >
                                <label for="">{{ trans('word.explain') }}</label>
                                <textarea name="explain"  class="form-control" rows="3" placeholder="{{ trans('word.explain') }}">{{ old('explain') }}</textarea>
                                @if ($errors->has('explain'))
                                    <span class="help-block">
                                        @foreach ($errors->get('explain') as $message)
                                            {{$message}}
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                            <div class="form-group @if ($errors->has('example')) has-error @endif">
                                <label for="">{{ trans('word.example') }}</label>
                                <textarea name="example" class="form-control" rows="3" placeholder="{{ trans('word.example') }}">{{ old('example') }}</textarea>
                                @if ($errors->has('example'))
                                    <span class="help-block">
                                        @foreach ($errors->get('example') as $message)
                                            {{$message}}
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('word.Submit') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

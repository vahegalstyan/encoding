<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Technical Task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>

        <div class="container">
            <div class="content">
                @isset($result)
                    <div class="alert alert-success" role="alert">
                        {{$result}}
                    </div>

                @endif
                <form  method="POST" action="">
                    @csrf

                    <div class="form-group {{ $errors->has('input') ? ' has-error' : '' }}">
                        <label for="input" class="col-2 col-form-label">Input</label>
                        <div class="col-12 p-0">
                        <textarea class="form-control"  id="input" name="input">{{isset($inputs['input']) ? $inputs['input'] : old('input')}}</textarea>

                            @if ($errors->has('input'))
                                <span class="help-block">
                            <strong>{{ $errors->first('input') }}</strong>
                         </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6 {{ $errors->has('offset_encoding_algorithm') ? ' has-error' : '' }}">
                            <label for="offset-encoding-algorithm" class="col-form-label">Use Offset Encoding Algorithm</label>
                            <div class="">
                                <input class="form-control" type="checkbox" id="offset-encoding-algorithm" name="offset_encoding_algorithm"
                                    {{(isset($inputs['offset_encoding_algorithm']) or old('offset_encoding_algorithm')) ? 'checked': ''}} >
                                @if ($errors->has('offset_encoding_algorithm'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('offset_encoding_algorithm') }}</strong>
                         </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group col-6 {{ $errors->has('offset') ? ' has-error' : '' }}">
                            <label for="offset" class="col-form-label">Offset</label>

                            <div class="">
                                <input class="form-control" type="number" id="offset" name="offset" value="{{isset($inputs['offset']) ? $inputs['offset'] : old('offset')}}">
                                @if ($errors->has('offset'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('offset') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-6 {{ $errors->has('substitution_encoding_algorithm') ? ' has-error' : '' }}">
                            <label for="substitution-encoding-algorithm" class=" col-form-label">Use Offset Encoding Algorithm</label>
                            <div class="">
                                <input class="form-control" type="checkbox" id="substitution-encoding-algorithm" name="substitution_encoding_algorithm"   {{(isset($inputs['substitution_encoding_algorithm']) or old('substitution_encoding_algorithm')) ? 'checked': ''}}>
                                @if ($errors->has('substitution_encoding_algorithm'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('substitution_encoding_algorithm') }}</strong>
                         </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group col-3 {{ $errors->has('character_to_search') ? ' has-error' : '' }}">
                            <label for="character-to-search" class="col-form-label">Character to search</label>

                            <div class="">
                                <input class="form-control" type="text" id="character-to-search" name="character_to_search" value="{{isset($inputs['character_to_search']) ? $inputs['character_to_search']  : old('character_to_search')}}">
                                @if ($errors->has('character_to_search'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('character_to_search') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-3 {{ $errors->has('character_to_replace') ? ' has-error' : '' }}">
                            <label for="character-to-replace" class="col-form-label">Character should be replaced</label>

                            <div class="">
                                <input class="form-control" type="text" id="character-to-replace" name="character_to_replace" value="{{isset($inputs['character_to_replace']) ? $inputs['character_to_replace'] : old('character_to_replace')}}">
                                @if ($errors->has('character_to_replace'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('character_to_replace') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="Encode">
                    </div>

                </form>
            </div>
        </div>

    </body>
</html>

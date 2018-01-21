@extends('master')
@section('content')
    <section class="login-view">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Create new course</h2>
                </div>
                <form method="POST" action="{{ route('Admin') }}">
                    {{ csrf_field() }}
                    <div class="col-md-6 col-sm-6">
                        <div class="input-box">
                            <label>Name <span class="require-color">*</span></label>
                            <input data-validation="required" type="text"
                                   class="{{ $errors->has('name') ? ' has-error' : '' }}"
                                   name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-box">
                                    <label>Price ($) <span class="require-color">*</span></label>
                                    <input data-validation="required" type="text"
                                           class="{{ $errors->has('price') ? ' has-error' : '' }}"
                                           name="price" value="{{ old('price') }}" required>
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-box">
                                    <label>Max students <span class="require-color">*</span></label>
                                    <input data-validation="required" type="number" class="{{ $errors->has('max_students') ? ' has-error' : '' }}"
                                           name="max_students" value="{{ old('max_students') }}" required>
                                    @if ($errors->has('max_students'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('max_students') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-box">
                                    <label>Start time <span class="require-color">*</span></label>
                                    <input data-validation="required" type="date" class="{{ $errors->has('start_at') ? ' has-error' : '' }}"
                                           name="start_at" value="{{ old('start_at') }}" required>
                                    @if ($errors->has('start_at'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('start_at') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-box">
                                    <label>End time <span class="require-color">*</span></label>
                                    <input data-validation="required" type="date" class="{{ $errors->has('end_at') ? ' has-error' : '' }}"
                                           name="end_at" value="{{ old('end_at') }}" required>
                                    @if ($errors->has('end_at'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('end_at') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="input-box">
                            <label>Description <span class="require-color">*</span></label>
                            <input data-validation="required" type="text" class="{{ $errors->has('description') ? ' has-error' : '' }}"
                                   name="description" value="{{ old('description') }}" required>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-box">
                            <label>Details <span class="require-color">*</span></label>
                            <textarea data-validation="required" class="{{ $errors->has('details') ? ' has-error' : '' }}"
                                      name="details" required rows="5">{{ old('details') }}</textarea>
                            @if ($errors->has('details'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-box">
                                    <label>Category <span class="require-color">*</span></label>
                                    {{--<input type="text" class="{{ $errors->has('type') ? ' has-error' : '' }}"--}}
                                    {{--name="type" value="{{ old('type') }}" required>--}}
                                    <select data-validation="required" name="type" class="form-control">
                                        <option value="1">Web</option>
                                        <option value="2">Database</option>
                                        <option value="3">SEO</option>
                                        <option value="4">Marketing</option>
                                        <option value="5">Thợ xây</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-box">
                                    <label>Teacher <span class="require-color">*</span></label>
                                    {{--<input type="date" class="{{ $errors->has('teacher_id') ? ' has-error' : '' }}"--}}
                                    {{--name="teacher_id" value="{{ old('teacher_id') }}" required>--}}
                                    <select data-validation="required" name="teacher_id" class="form-control">
                                        <option value="1">Thầy Thông</option>
                                        <option value="2">Thầy Tích</option>
                                        <option value="3">Thầy Cường</option>
                                        <option value="4">Cô Sao</option>
                                        <option value="5">Cô Hường</option>
                                    </select>
                                    @if ($errors->has('teacher_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('teacher_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="input-box">
                            {{--<label>Image</label>--}}
                            {{--<input type="file" class="{{ $errors->has('image') ? ' has-error' : '' }}"--}}
                            {{--name="image" value="{{ old('image') }}" required>--}}
                            <label>Picture <span class="require-color">*</span></label>
                            <label class="btn btn-default" for="courseImg"><i class="fa fa-folder-open"
                                                                              aria-hidden="true"></i> Choose</label>
                            <input data-validation="required" type="file" name="image" id="courseImg" placeholder="Hình ảnh" required="required"
                                   style="display: none"/>
                            <div class="preview-img">
                                <img id="previewImg" src="" alt=""/>
                            </div>
                            @if ($errors->has('end_at'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="check-slide">
                            <label class="label_check" for="checkbox-01">
                                <input id="checkbox-01" type="checkbox"
                                       name="public" {{ old('public') ? 'checked' : '' }}> Public</label>
                        </div>
                        <div class="submit-slide">
                            <button type="submit" class="btn btn-block">Add course</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        const readURL = (input) => {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    // console.log(e)
                    $('#previewImg').attr('src', e.target.result);
                    $('.preview-img').addClass('loaded');
                };
                reader.readAsDataURL(input.files[0]);
            }
        };
        $("#courseImg").change(function () {
            readURL(this);
        });
    </script>
@endsection
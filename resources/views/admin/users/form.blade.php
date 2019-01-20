                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                               {!!Form::text("name" ,null , ['class '=>'form-control']) !!}

                               @if ($errors->has('name'))
                               <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <label for="name" class="col-md-4 col-form-label text-md-right">الاسم</label>

                    </div>
                    

                    <div class="form-group row">

                        <div class="col-md-6">
                          {!!Form::text("email" ,null , ['class '=>'form-control']) !!}

                          @if ($errors->has('email'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <label for="email" class="col-md-4 col-form-label text-md-right">البريد الالكتروني</label>

                </div>


                <div class="form-group row">

                    <div class="col-md-6">
                        {!!Form::select("admin"  , privlage() ,null , ['class '=>'form-control']) !!}

                      @if ($errors->has('admin'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('admin') }}</strong>
                    </span>
                    @endif
                </div>
                <label for="admin" class="col-md-4 col-form-label text-md-right">الصلاحيات</label>

            </div>

            @if(!isset($user))
            <div class="form-group row">

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <label for="password" class="col-md-4 col-form-label text-md-right">كلمة السر</label>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تاكيد كلمة السر</label>
            </div>
            @endif

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        تنفيذ
                    </button>
                </div>
            </div>

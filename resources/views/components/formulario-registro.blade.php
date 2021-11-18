
      
      <div class="bmd-form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="material-icons">face</i>
            </span>
          </div>
          <input type="text" name="nombre" class="form-control" placeholder="{{ __('Nombre...') }}" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
        </div>
        @if ($errors->has('nombre'))
          <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
            <strong>{{ $errors->first('nombre') }}</strong>
          </div>
        @endif
      </div>
      <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} mt-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="material-icons">person_pin</i>
            </span>
          </div>
          <input type="text" name="username" class="form-control" placeholder="{{ __('Nombre Usuario...') }}" value="{{ old('username') }}" required autocomplete="username">
        </div>
        @if ($errors->has('nombre'))
          <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
            <strong>{{ $errors->first('nombre') }}</strong>
          </div>
        @endif
      </div>
      <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">email</i>
            </span>
          </div>
          <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required autocomplete="email">
        </div>
        @if ($errors->has('email'))
          <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
            <strong>{{ $errors->first('email') }}</strong>
          </div>
        @endif
      </div>
      <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">lock_outline</i>
            </span>
          </div>
          <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" required autocomplete="password">
        </div>
        @if ($errors->has('password'))
          <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
            <strong>{{ $errors->first('password') }}</strong>
          </div>
        @endif
      </div>
      <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="material-icons">lock_outline</i>
            </span>
          </div>
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña...') }}" required autocomplete="password_confirmation">
        </div>
        @if ($errors->has('password_confirmation'))
          <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </div>
        @endif
      </div>
      
    
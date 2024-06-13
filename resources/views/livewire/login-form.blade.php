<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <form wire:submit = "store">
        {{-- EMAIL FIELD --}}
        <div class="mb-3">
          <label for="recipient-name" class="col-form-label">Email:</label>
          <input type="email" name="email" class="form-control" wire:model.live = "email">
            @error('email')
                <small style="display: block" class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- PASSWORD FIELD --}}
        <div class="mb-3">
          <label for="message-text" class="col-form-label">Password:</label>
          <input type="password" name="password" class="form-control" wire:model.live = "password"></input>
            @error('password')
                <small style="display: block" class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- FORGET PASSWORD LINK --}}
        <div class="mb-3">
            <a href="{{ route('password.request') }}" class="text-primary">Forget Password?</a>
        </div>

        {{-- LOGIN BUTTON --}}
        <div class="modal-footer">
            <button type="submit" style="background-color: #2A2A2A !important" class="btn btn-secondary">Login</button>
        </div>

        {{-- OFFLINE INDICATOR --}}
        <div class="d-none text-danger text-center" wire:offline.class.remove="d-none">
            This device is currently offline.
        </div>

      </form>
</div>

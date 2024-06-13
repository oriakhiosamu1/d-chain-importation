<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <form wire:submit = "store">
        {{-- USERNAME FIELD --}}
        <div class="mb-3">
            <label for="name" class="col-form-label">Username:</label>
            <input type="text" name="name" class="form-control" wire:model.live="name">
            @error('name')
                <small style="display: block" class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- EMAIL FIELD --}}
        <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" wire:model.live="email">
            @error('email')
                <small style="display: block" class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- PASSWORD FIELD --}}
        <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" wire:model.live="password">
            @error('password')
                <small style="display: block" class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- CONFIRM PASSWORD FIELD --}}
        <div class="mb-3">
            <label for="password_confirmation" class="col-form-label">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" wire:model.live = "password_confirmation">
            @error('password_confirmation')
                <small style="display: block" class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- REGISTER BUTTON --}}
        <div class="modal-footer">
            <button type="submit" style="background-color: #2A2A2A !important" class="btn btn-secondary">Onboard</button>
        </div>

        {{-- OFFLINE INDICATOR --}}
        <div class="d-none text-danger text-center" wire:offline.class.remove="d-none">
            This device is currently offline.
        </div>

    </form>
</div>

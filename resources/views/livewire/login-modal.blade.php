<div>
    @if ($isOpen)
    <div class="modal-overlay">
        <div class="modal-content login-pop-up">
            <span wire:click="closeModal" class="close">&times;</span>
            <div class="form-log-in">
                <div class="input-field">
                    <label>Email</label>
                    <input type="email" class="input" />
                </div>
                <div class="input-field">
                    <label>Password</label>
                    <input type="password" class="input" />
                </div>
                <div class="button-group">
                    <button class="button-2">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

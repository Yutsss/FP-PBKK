<div x-data="{ open: @entangle('isOpen') }" x-show="open">
    <div class="modal">
        <div class="modal-content register-pop-up">
            <span wire:click="closeModal" class="close">&times;</span>
            <div class="group">
                <div class="input-field">
                    <div class="label">Username</div>
                    <input type="text" class="input">
                </div>
                <div class="input-field">
                    <div class="label">Email</div>
                    <input type="email" class="input">
                </div>
                <div class="input-field">
                    <div class="label">Password</div>
                    <input type="password" class="input">
                </div>
                <div class="input-field">
                    <div class="label">Confirm Password</div>
                    <input type="password" class="input">
                </div>
                <div class="checkbox-field">
                    <div class="checkbox">
                        <input type="checkbox" class="space">
                        <label for="checkbox">Accept Terms and Conditions</label>
                    </div>
                </div>
                <div class="button-group">
                    <button class="button-2">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>

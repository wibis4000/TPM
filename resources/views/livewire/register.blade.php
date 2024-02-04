<div>
    @if(!empty($successMessage))
        <div class="alert alert-success">
        {{ $successMessage }}
        </div>
    @endif

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">5</a>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <h1> Step 1</h1>
            <form id="multi-step-form">
                <label for="username">GroupName:</label>
                <input type="text" wire:model="groupName"  id="username">
                @error('groupName') <span class="error">{{ $message }}</span> @enderror
                
                <label for="password">password:</label>
                <div class="password-input">
                    <input type="password" wire:model="password"  id="password"/>
                    <span class="toggle-password" onclick="togglePassword()">Show</span>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <label for="password">confirmPassword:</label>
                <div class="password-input">
                    <input type="password" wire:model="confirmPassword" id="confirmPassword">{{{ $confirmPassword ?? '' }}}</textarea>
                    <span class="toggle-password" onclick="togglePassword()">Show</span>
                    @error('confirmPassword') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <div class="binusian-option">
                        <label id="binusian" class="radio-inline"><input type="radio" wire:model="campus" value="Binus" {{{ $campus == 'Binus' ? "checked" : "" }}}> Binus</label>
                        <label id="nonBinusian"class="radio-inline"><input type="radio" wire:model="campus" value="NonBinus" {{{ $campus == 'NonBinus' ? "checked" : "" }}}> Non-Binus</label>
                        @error('campus') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
                <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>
            </form>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <h1> Step 2</h1>
            <form id="multi-step-form">
                <label for="username">Nama Ketua:</label>
                <input type="text" wire:model="namaKetua"  id="namaKetua">
                @error('namaKetua') <span class="error">{{ $message }}</span> @enderror
                
                <label for="description">Tempat Lahir:</label>
                <div class="password-input">
                    <input type="password" wire:model="tempatLahir"  id="tempatLahir"/>
                    @error('tempatLahir') <span class="error">{{ $message }}</span> @enderror
                </div>
                <label for="description">Tanggal Lahir:</label>
                <div class="password-input">
                    <input type="password" wire:model="tanggalLahir" id="tanggalLahir"></textarea>
                    @error('tanggalLahir') <span class="error">{{ $message }}</span> @enderror
                </div>
                    <div class="gender-option">
                        <label id="perempuan" class="radio-inline"><input type="radio" wire:model="gender" value="perempuan" {{{ $campus == 'perempuan' ? "checked" : "" }}}> Perempuan </label>
                        <label id="laki-laki"class="radio-inline"><input type="radio" wire:model="gender" value="laki-laki" {{{ $campus == 'Laki-laki' ? "checked" : "" }}}> Laki-laki </label>
                        @error('gender') <span class="error">{{ $message }}</span> @enderror
                    </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="secondStepSubmit" type="button" >Next</button>
                <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>
            </form>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <h1> Step 3</h1>
            <form id="multi-step-form">
                <label for="username">Whatsapp:</label>
                <input type="text" wire:model="whatsapp"  id="whatsapp">
                @error('whatsapp') <span class="error">{{ $message }}</span> @enderror
                
                <label for="description">line ID:</label>
                <div class="password-input">
                    <input type="password" wire:model="lineID"  id="lineID"/>
                    @error('lineID') <span class="error">{{ $message }}</span> @enderror
                </div>
                <label for="description">gitID:</label>
                <div class="password-input">
                    <input type="password" wire:model="gitID" id="gitID"></textarea>
                    @error('gitID') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="thirdStepSubmit" type="button" >Next</button>
                <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>
            </form>
    </div>
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <h1> Step 4</h1>
            <form id="multi-step-form" wire:submit.prevent="save">
                <label for="CV">CV (PDF, JPG, JPEG, PNG)</label>
                <input type="file" id="CV" wire:model="cv" accept=".pdf, .jpg, .jpeg, .png" required>
                @error('cv') <span class="error">{{ $message }}</span> @enderror
                <label for="FlazzCard">Flazz Card (PDF, JPG, JPEG, PNG) - For Binusian</label>
                <input type="file" id="FlazzCard" wire:model="flazz" accept=".pdf, .jpg, .jpeg, .png">
                    @error('flazz') <span class="error">{{ $message }}</span> @enderror
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="fourthStepSubmit" type="button" >Next</button>
                <p style="color: white; margin-top: 10px;">Sudah memiliki akun? <a href="#" class="login-link">Login Disini</a></p>
            </form>
    </div>
    <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
            <h3>Selesai</h3>
        
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Back</button>
    </div>
</div>
        
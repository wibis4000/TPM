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
            <label for="Nama_kelompok">Nama Ketua Kelompok:</label>
            <input type="text" id="Nama_Kelompok" wire:model="namaKetua" />
            @error('namaKetua') <span class="error">{{ $message }}</span> @enderror

            <div class="Tempat_Lahir">
                <label for="Tempat_Lahir">Tempat Lahir:</label>
                <input type="text" wire:model="tempatLahir"  id="TempatLahir"/>
                @error('tempatLahir') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="Tanggal Lahir">
                <label for="Tanggal_Lahir">Tanggal Lahir:</label>    
                <input type="text" wire:model="tanggalLahir"  id="TanggalLahir"/>
                @error('tanggalLahir') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <div class="gender-options">
                    <label for="gender-options">Gender</label><br/>
                    <label id="laki-laki" class="radio-inline"><input type="radio" wire:model="gender" value="Pria" {{{ $gender == 'Pria' ? "checked" : "" }}}> Pria</label>
                    <label id="perempuan"class="radio-inline"><input type="radio" wire:model="gender" value="Wanita" {{{ $gender == 'Wanita' ? "checked" : "" }}}> Wanita</label>
                    @error('gender') <span class="error">{{ $message }}</span> @enderror
                </div>
            <div>
        </form>
            <div class="navigation-buttons">
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="secondStepSubmit" type="button">Next</button>    
            </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <h1> Step 3</h1>
        <form id="multi-step-form">
            <label for="Whatsapp">whatsapp:</label>
            <input type="text" wire:model="whatsapp"  id="Whatsapp"/>
            @error('whatsapp') <span class="error">{{ $message }}</span> @enderror

            <div class="LineID">
                <label for="LineID">Line ID</label>
                <input type="text" wire:model="lineID"  id="LineID"/>
                @error('lineID') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="GithubID">
                <label for="GithubID">GIT ID</label>
                <input type="text" wire:model="gitID"  id="GithubID"/>
                @error('gitID') <span class="error">{{ $message }}</span> @enderror
            </div>
        </form>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="thirdStepSubmit">Next</button>

    </div>
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <h3> Step 4</h3>
        <form id="multi-step-form">
            <label for="CV">Cv:</label>
            <input type="file" wire:model="cv"  id="CV" accept=".pdf, .jpg, .jpeg, .png"/>
            @error('cv') <span class="error">{{ $message }}</span> @enderror

            <label for="FlazzCard">Flazz Card</label>
            <input type="file" wire:model="flazz"  id="FlazzCard" accept=".pdf, .jpg, .jpeg, .png"/>
            @error('flazz') <span class="error">{{ $message }}</span> @enderror
        </form>  
        <div class="navigation-buttons">
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="submitForm">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
            <h3>Selesai</h3>
        
            <button class="btn btn-success btn-lg pull-right" wire:click="welcome" type="button">Finish!</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Back</button>
    </div>
</div>
        
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
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
            <p>Step 3</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
            <p>Step 4</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">5</a>
            <p>Step 5</p>
        </div>
    </div>
</div>
  
    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
  
                <div class="form-group">
                    <label for="title">GroupName:</label>
                    <input type="text" wire:model="groupName" class="form-control" id="">
                    @error('groupName') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">password:</label>
                    <input type="text" wire:model="password" class="form-control" id=""/>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <div class="form-group">
                    <label for="description">confirmPassword:</label>
                    <textarea type="text" wire:model="confirmPassword" class="form-control" id="">{{{ $confirmPassword ?? '' }}}</textarea>
                    @error('confirmPassword') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Campus</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="campus" value="Binus" {{{ $campus == 'Binus' ? "checked" : "" }}}> Binus</label>
                    <label class="radio-inline"><input type="radio" wire:model="campus" value="NonBinus" {{{ $campus == 'NonBinus' ? "checked" : "" }}}> Non-Binus</label>
                    @error('campus') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>
                <div class="form-group">
                    <label for="description">Nama Ketua:</label>
                    <input type="text" wire:model="cv" class="form-control" id=""/>
                    @error('cv') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Tempat Lahir</label>
                    <input type="text" wire:model="flazz" class="form-control" id=""/>
                    @error('flazz') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Tanggal Lahir</label>
                    <input type="text" wire:model="gitID" class="form-control" id=""/>
                    @error('gitID') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Gender</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="Pria" {{{ $gender == 'Pria' ? "checked" : "" }}}> Pria</label>
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="Wanita" {{{ $gender == 'Wanita' ? "checked" : "" }}}> Wanita</label>
                    @error('gender') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <div class="form-group">
                    <label for="description">cv:</label>
                    <input type="text" wire:model="cv" class="form-control" id=""/>
                    @error('cv') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Line ID</label>
                    <input type="text" wire:model="flazz" class="form-control" id=""/>
                    @error('flazz') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Tanggal Lahir</label>
                    <input type="text" wire:model="gitID" class="form-control" id=""/>
                    @error('gitID') <span class="error">{{ $message }}</span> @enderror
                </div>
               
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="thirdStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 4</h3>
                <div class="form-group">
                    <label for="description">cv:</label>
                    <input type="text" wire:model="cv" class="form-control" id=""/>
                    @error('cv') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Flazz</label>
                    <input type="text" wire:model="flazz" class="form-control" id=""/>
                    @error('flazz') <span class="error">{{ $message }}</span> @enderror
                </div>
                
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="submitForm">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Selesai</h3>
                
  
                <button class="btn btn-success btn-lg pull-right" wire:click="welcome" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Back</button>
            </div>
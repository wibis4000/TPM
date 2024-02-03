<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Register;

class Wizard extends Component
{
    public $currentStep = 1;
    public $groupName, $password, $confirmPassword, $campus, $namaKetua,$tempatLahir,$tanggalLahir,$gender,$whatsapp,$lineID,$gitID,$cv,$flazz;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.register');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'groupName' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required',
            'campus'=> 'required'
        ]);
 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'namaKetua' => 'required',
            'tanggalLahir' => 'required',
            'tempatLahir' => 'required',
            'gender' => 'required',
        ]);
  
        $this->currentStep = 3;
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'whatsapp' => 'required',
            'lineID' => 'required',
            'gitID' => 'required',
        ]);
  
        $this->currentStep = 4;
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fourthStepSubmit()
    {
        $validatedData = $this->validate([
            'cv' => 'required',
            'flazz' => 'required',
        ]);
  
        $this->currentStep = 5;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Register::create([
            'groupName' => $this->groupName,
            'password' => $this->password,
            'confirmPassword' => $this->confirmPassword,
            'campus' => $this->campus,
            'namaKetua' => $this->namaKetua,
            'tempatLahir' => $this->tempatLahir,
            'tanggalLahir' => $this->tanggalLahir,
            'gender' => $this->gender,
            'whatsapp' => $this->whatsapp,
            'lineID' => $this->lineID,
            'gitID' => $this->gitID,
            'cv' => $this->cv,
            'flazz' => $this->flazz
        ]);
  
        $this->successMessage = 'Product Created Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }
}
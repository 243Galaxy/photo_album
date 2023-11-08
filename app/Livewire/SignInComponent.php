<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SignInComponent extends Component
{
    public $email, $password;

    function login() {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($this->email);
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password) )){
            return redirect()->to('/admin/dashboard');
        }else{
                session()->flash('error', 'Invalid email and/or password, try again.');  
            }
    }

    public function render()
    {
        return view('livewire.sign-in-component')->layout('layouts.guest');
    }
}

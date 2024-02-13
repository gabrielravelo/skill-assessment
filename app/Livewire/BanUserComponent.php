<?php

namespace App\Livewire;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class BanUserComponent extends Component
{
    use WireToast;


    public $message;
    public $user;
    public $class;

    public function mount()
    {
        $this->class = $this->user->banned;
    }

    public function banUser()
    {
        $this->user->banned = !$this->user->banned;
        $this->user->save();

        $this->message = $this->user->banned ? 'Unban' : 'Ban';

        $toastMessage = $this->user->banned ? 'The user has been banned!' : 'The user has been unbanned!';
        $toastTitle = $this->user->banned ? 'Banned' : 'Unbanned';
        $this->class = $this->user->banned;

        toast()
            ->success($toastMessage, $toastTitle, 3000)
            ->push();
    }

    public function render()
    {
        return view('livewire.ban-user-component');
    }
}

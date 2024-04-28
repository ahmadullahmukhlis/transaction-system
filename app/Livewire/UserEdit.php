<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserEdit extends Component
{
    public $userId;
    public $name;
    public $email;
    public $password;

    public function mount(User $user)
    {
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function edit($rowId)
    {
        $this->js('alert(' . $rowId . ')');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'password' => 'sometimes|nullable|min:6'
        ]);

        if (!empty($this->password)) {
            $validatedData['password'] = bcrypt($this->password);
        }

        User::find($this->userId)->update($validatedData);

        session()->flash('message', 'User updated successfully.');
    }

    public function render()
    {
        return view('livewire.user-edit');
    }
}

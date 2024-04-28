<div>
    <form wire:submit.prevent="update">
        <div>
            <label for="name">Name:</label>
            <input wire:model="name" id="name" type="text" placeholder="Name">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input wire:model="email" id="email" type="email" placeholder="Email">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Password (leave blank to keep current password):</label>
            <input wire:model="password" id="password" type="password" placeholder="Password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Update User</button>
    </form>
</div>

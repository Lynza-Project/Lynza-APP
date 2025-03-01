<div class="p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-white rounded-lg shadow-md">

    @livewire('search-bar', ['model' => 'search', 'width' => 'w-1/3'])

    <div wire:loading class="flex justify-center items-center">
        <div class="flex items-center space-x-2">
            <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-8 w-8"></div>
            <span>Chargement...</span>
        </div>
    </div>

    <div wire:loading.remove>
        <table class="w-full border-collapse">
            <thead>
            <tr class="text-left border-b border-gray-300 dark:border-gray-700">
                <th class="p-3">Actions</th>
                <th class="p-3 cursor-pointer hover:text-blue-500 dark:hover:text-blue-400" wire:click="sortBy('name')">
                    Utilisateur
                </th>
                <th class="p-3 cursor-pointer hover:text-blue-500 dark:hover:text-blue-400" wire:click="sortBy('email')">
                    Email
                </th>
                <th class="p-3 cursor-pointer hover:text-blue-500 dark:hover:text-blue-400"
                    wire:click="sortBy('created_at')">
                    Date de création
                </th>
                <th class="p-3 cursor-pointer hover:text-blue-500 dark:hover:text-blue-400" wire:click="sortBy('role')">
                    Rôle
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr class="border-b border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                    <td class="p-3">
                        <button wire:click="edit({{ $user->id }})"
                                class="px-2 py-1 text-sm font-semibold text-blue-700 dark:text-blue-400 rounded-lg mr-2">
                            Edit
                        </button>
                        <button wire:click="delete({{ $user->id }})"
                                class="px-2 py-1 text-sm font-semibold text-red-700 dark:text-red-400 rounded-lg">
                            Delete
                        </button>
                    </td>
                    <td class="flex items-center p-3">
                        <img src="{{ $user->profile_photo_url }}" alt="P" class="w-8 h-8 rounded-full mr-3">
                        <span class="font-semibold">{{ $user->first_name . ' ' . $user->last_name }}</span>
                    </td>
                    <td class="p-3">
                        {{ $user->email }}
                    </td>
                    <td class="p-3">
                        {{ $user->created_at->format('d/m/Y') }}
                    </td>
                    <td class="p-3">
                        @php
                            $statuses = [
                                'super-admin' => 'bg-red-100 text-red-700 dark:bg-red-600 dark:text-white',
                                'admin' => 'bg-pink-100 text-pink-700 dark:bg-pink-600 dark:text-white',
                                'user' => 'bg-blue-100 text-blue-700 dark:bg-blue-600 dark:text-white',
                            ];
                            $role = $user->role;
                        @endphp
                        <span class="px-2 py-1 text-sm font-semibold rounded-lg {{ $statuses[$role] }}">
                                {{ $role }}
                            </span>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
    <style>
        .loader {
            border-top-color: #3498db;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</div>


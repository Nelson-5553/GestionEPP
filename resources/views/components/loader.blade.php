<div x-data="{ loading: true }" x-init="loading = false">
    <div x-show="loading" class="fixed inset-0 flex items-center justify-center backdrop-blur-md z-50">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-indigo-500"></div>
    </div>
    <div x-show="!loading">
        {{ $slot }}
    </div>
</div>

<div>
    @if (session('success'))
        <div class="p-4 mt-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            {{ session('success') }}
        </div>
    @endif
</div>

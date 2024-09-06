<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-blue uppercase tracking-widest hover:bg-gray-100 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-2']) }}>
    {{ $slot }}
</button>

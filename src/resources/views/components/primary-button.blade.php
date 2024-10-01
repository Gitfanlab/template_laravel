<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'block px-4 py-3 bg-primary dark:bg-primary rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

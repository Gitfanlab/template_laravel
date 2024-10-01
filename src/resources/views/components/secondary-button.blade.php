<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'block px-4 py-3 bg-white dark:bg-gray-800 border border-primaryDark dark:border-primaryLight rounded-md font-semibold text-xs text-primaryDark dark:text-primaryLight uppercase tracking-widest shadow-sm transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

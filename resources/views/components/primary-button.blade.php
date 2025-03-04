<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-gradient-dark w-100 my-4']) }}>
    {{ $slot }}
</button>

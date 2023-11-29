<li {{  $attributes->merge([
        "class" => "hover:text-green-400"
]) }} >
        <a  href="{{ $href }}">
                {{ $slot }}
        </a>
</li>
<a {{ $attributes }} class="{{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md"
    aria-current="page">{{ $slot }}</a>

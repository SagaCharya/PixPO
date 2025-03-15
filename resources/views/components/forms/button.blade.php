<button {{ $attributes->merge(["class" => "hover:bg-blue-500 bg-blue-400 hover:cursor-pointer transition-colors duration-300 rounded mt-5 py-2 px-6 font-bold"]) }}>{{ $slot }}</button>

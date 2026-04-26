<div class="dropdown lang-dropdown">
    <button 
        class="btn btn-light border rounded-pill px-3 dropdown-toggle d-flex align-items-center shadow-sm" 
        type="button" 
        data-bs-toggle="dropdown"
    >
        <?php
            $fflag = $languages[$currentLocale]['flag'];
        ?>
            <img src="{{ Vite::asset('resources/images/flags/4x3/' . $fflag . '.svg') }}" class="flag-icon me-2" alt="Noricsiffran" />
            <span>{{ $languages[$currentLocale]['code'] }}</span>
    </button>

    <ul class="dropdown-menu">
        @foreach ($languages as $code => $language)
            <?php
                $flag = $language['flag'];
            ?>
            <li>
                <a 
                    href="{{ route('language.switch', ['locale' => $code]) }}" 
                    class="dropdown-item"
                >
                    <img src="{{ Vite::asset('resources/images/flags/4x3/' . $flag . '.svg') }}" class="flag-icon me-2" />
                    {{ $language['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

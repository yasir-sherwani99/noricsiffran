<li class="nav-item submenu highlighted-menu">
    <a class="nav-link" href="#">
        <?php
            $fflag = $languages[$currentLocale]['flag'];
        ?>
        <img src="{{ Vite::asset('resources/images/flags/4x3/' . $fflag . '.svg') }}" class="flag-icon me-2" alt="Noricsiffran" />
        <span>{{ $languages[$currentLocale]['code'] }}</span>
    </a>
    <ul>                                        
        @foreach ($languages as $code => $language)
            <?php
                $flag = $language['flag'];
            ?>
            <li class="nav-item">
                <a 
                    href="{{ route('language.switch', ['locale' => $code]) }}" 
                    class="nav-link"
                >
                    <img src="{{ Vite::asset('resources/images/flags/4x3/' . $flag . '.svg') }}" class="flag-icon me-2" />
                    {{ $language['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</li>
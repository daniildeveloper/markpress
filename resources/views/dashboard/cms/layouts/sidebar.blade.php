<div class="menu_section">
    <ul class="nav side-menu">
        <li>
            <a href="{{url("#")}}">
                <i class="fa fa-home">
                </i>
                Главная
            </a>
        </li>
    </ul>
    <ul class="nav side-menu">
        <li>
            <a>
                <i class="fa fa-file">
                </i>
                Страницы
                <span class="fa fa-chevron-down">
                </span>
            </a>
            <ul class="nav child_menu">
                <li>
                    <a href="{{route('page.index')}}">
                        Все страницы
                    </a>
                </li>
                <li>
                    <a href="{{-- {{route("prediction.index")}} --}} ">
                        Добавить новую
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
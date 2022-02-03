(function() {
    var nav = document.getElementById('site-navigation'),
        button, menu;
    if (!nav) {
        return;
    }

    button = nav.getElementsByTagName('button')[0];
    menu = nav.getElementsByTagName('ul')[0];
    if (!button) {
        return;
    }

    if (!menu || !menu.childNodes.length) {
        button.style.display = 'none';
        return;
    }

    button.onclick = function() {
        document.getElementsByClassName('left-menu')[0].style.marginTop = '280px';
        document.getElementsByClassName('left-menu')[0].style.transition = '0.1s';
        if (-1 === menu.className.indexOf('nav-menu')) {
            menu.className = 'nav-menu';
        }

        if (-1 !== button.className.indexOf('toggled-on')) {
            document.getElementsByClassName('left-menu')[0].style.marginTop = '0px';
            document.getElementsByClassName('left-menu')[0].style.transition = '0.1s';
            button.className = button.className.replace(' toggled-on', '');
            menu.className = menu.className.replace(' toggled-on', '');

        } else {
            button.className += ' toggled-on';
            menu.className += ' toggled-on';

        }
    };
})(jQuery);
(function () {
    function getToggle(dropdown) {
        return dropdown ? dropdown.querySelector('.dropdown-toggle') : null;
    }

    function getMenu(dropdown) {
        return dropdown ? dropdown.querySelector('.dropdown-menu') : null;
    }

    function disposeBootstrap(toggle) {
        if (!toggle || !window.bootstrap || !bootstrap.Dropdown) {
            return;
        }
        var inst = bootstrap.Dropdown.getInstance(toggle);
        if (inst) {
            inst.dispose();
        }
        // Avoid Bootstrap data-api fighting our custom open/close + keyboard handling
        toggle.removeAttribute('data-bs-toggle');
    }

    function isOpen(toggle, menu) {
        return !!(menu && (menu.classList.contains('show') || (toggle && toggle.getAttribute('aria-expanded') === 'true')));
    }

    function closeAll(except) {
        document.querySelectorAll('.navbar-nav .dropdown').forEach(function (item) {
            if (except && item === except) {
                return;
            }
            var toggle = getToggle(item);
            var menu = getMenu(item);
            item.classList.remove('show');
            if (toggle) {
                toggle.classList.remove('show');
                toggle.setAttribute('aria-expanded', 'false');
            }
            if (menu) {
                menu.classList.remove('show');
            }
        });
    }

    function openMenu(toggle) {
        var item = toggle ? toggle.closest('.dropdown') : null;
        var menu = getMenu(item);
        if (!item || !menu) {
            return;
        }

        closeAll(item);
        item.classList.add('show');
        menu.classList.add('show');
        toggle.classList.add('show');
        toggle.setAttribute('aria-expanded', 'true');
    }

    function toggleMenu(toggle) {
        var item = toggle ? toggle.closest('.dropdown') : null;
        var menu = getMenu(item);
        if (!item || !menu) {
            return;
        }

        if (isOpen(toggle, menu)) {
            closeAll();
            return;
        }

        openMenu(toggle);
    }

    function getMenuItems(menu) {
        return Array.prototype.slice.call(
            menu.querySelectorAll('.dropdown-item:not(.disabled):not([aria-disabled="true"])')
        );
    }

    function focusMenuItem(items, index) {
        if (!items.length) {
            return;
        }
        var next = Math.max(0, Math.min(index, items.length - 1));
        items[next].focus();
    }

    function bindToggles() {
        document.querySelectorAll('.navbar-nav .dropdown-toggle').forEach(function (toggle) {
            disposeBootstrap(toggle);

            if (toggle.dataset.mobileDropdownBound === '5') {
                return;
            }
            toggle.dataset.mobileDropdownBound = '5';

            toggle.addEventListener('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                toggleMenu(toggle);
            });
        });

        if (!document.body.dataset.dropdownOutsideBound) {
            document.body.dataset.dropdownOutsideBound = '1';
            document.addEventListener('click', function (event) {
                if (event.target.closest('.navbar-nav .dropdown')) {
                    return;
                }
                closeAll();
            });
        }
    }

    function bindKeyboard() {
        if (document.body.dataset.dropdownKeyboardBound) {
            return;
        }
        document.body.dataset.dropdownKeyboardBound = '1';

        document.addEventListener('keydown', function (event) {
            var key = event.key;
            if (key !== 'ArrowDown' && key !== 'ArrowUp' && key !== 'Home' && key !== 'End' && key !== 'Escape' && key !== 'Enter' && key !== ' ') {
                return;
            }

            var toggle = event.target.closest('.navbar-nav .dropdown-toggle');
            var focusedItem = event.target.closest('.navbar-nav .dropdown-item');
            var dropdown = null;

            if (toggle) {
                dropdown = toggle.closest('.navbar-nav .dropdown');
            } else if (focusedItem) {
                dropdown = focusedItem.closest('.navbar-nav .dropdown');
            }

            if (!dropdown) {
                return;
            }

            var menuToggle = getToggle(dropdown);
            var menu = getMenu(dropdown);
            if (!menuToggle || !menu) {
                return;
            }

            var items = getMenuItems(menu);
            var open = isOpen(menuToggle, menu);

            if (key === 'Escape') {
                if (!open) {
                    return;
                }
                event.preventDefault();
                closeAll();
                menuToggle.focus();
                return;
            }

            if (toggle) {
                if (key === 'Enter' || key === ' ') {
                    event.preventDefault();
                    if (!open) {
                        openMenu(menuToggle);
                    } else {
                        closeAll();
                        menuToggle.focus();
                    }
                    return;
                }

                if (key === 'ArrowDown' || key === 'ArrowUp' || key === 'Home' || key === 'End') {
                    event.preventDefault();
                    event.stopPropagation();

                    if (!open) {
                        openMenu(menuToggle);
                    }

                    requestAnimationFrame(function () {
                        var list = getMenuItems(menu);
                        if (key === 'ArrowUp' || key === 'End') {
                            focusMenuItem(list, list.length - 1);
                        } else {
                            focusMenuItem(list, 0);
                        }
                    });
                }
                return;
            }

            if (!focusedItem || !items.length) {
                return;
            }

            var index = items.indexOf(focusedItem);
            if (index < 0) {
                return;
            }

            if (key === 'ArrowDown') {
                event.preventDefault();
                event.stopPropagation();
                if (index < items.length - 1) {
                    focusMenuItem(items, index + 1);
                }
                return;
            }

            if (key === 'ArrowUp') {
                event.preventDefault();
                event.stopPropagation();
                if (index > 0) {
                    focusMenuItem(items, index - 1);
                } else {
                    menuToggle.focus();
                }
                return;
            }

            if (key === 'Home') {
                event.preventDefault();
                event.stopPropagation();
                focusMenuItem(items, 0);
                return;
            }

            if (key === 'End') {
                event.preventDefault();
                event.stopPropagation();
                focusMenuItem(items, items.length - 1);
            }
        });
    }

    function ready(fn) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', fn);
        } else {
            fn();
        }
    }

    ready(function () {
        bindToggles();
        bindKeyboard();
        window.addEventListener('load', bindToggles);
    });
})();

document.addEventListener('DOMContentLoaded', function () {

    const navInicio = document.getElementById('navInicio');
    const navSobre = document.getElementById('navSobre');

    const sobreSection = document.getElementById('sobre');

    // Só executa se estiver na HOME
    if (sobreSection) {

        navInicio.classList.add('active');

        navInicio.addEventListener('click', function () {

            navInicio.classList.add('active');
            navSobre.classList.remove('active');

        });

        navSobre.addEventListener('click', function () {

            navSobre.classList.add('active');
            navInicio.classList.remove('active');

        });

        window.addEventListener('scroll', function () {

            const sobreTop = sobreSection.offsetTop - 120;

            if (window.scrollY >= sobreTop) {

                navSobre.classList.add('active');
                navInicio.classList.remove('active');

            } else {

                navInicio.classList.add('active');
                navSobre.classList.remove('active');

            }

        });

    }

});
'use strict';

{
    let open = document.getElementById('open');
    let close = document.getElementById('close');
    const overlay = document.querySelector('.overlay');
    const edit = document.querySelector('.edit');


    open.addEventListener('click', () => {
        overlay.classList.add('show');
        open.classList.add('hide');
    });
    close.addEventListener('click', () => {
        overlay.classList.remove('show');
        open.classList.remove('hide');
    });


    open.addEventListener('click', () => {
        edit.classList.add('show');
        open.classList.add('hide');
    });
    close.addEventListener('click', () => {
        edit.classList.remove('show');
        open.classList.remove('hide');
    });

    // const edi = document.getElementById('edi-btn');
    // const auto = document.getElementById('auto');
    // const  = document.querySelector('.pop');

    // edi.addEventListener('click', () => {
    //     overlay.classList.add('show');
    //     open.classList.add('hide');
    // });
    // auto.addEventListener('click', () => {
    //     overlay.classList.remove('show');
    //     open.classList.remove('hide');
    // });
}

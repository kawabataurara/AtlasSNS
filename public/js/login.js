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



    // const ok = document.getElementById('ok');
    // const no = document.getElementById('no');
    // const modal = document.getElementById('modal');
    // const mask = document.getElementById('mask');

    // ok.addEventListener('click', () => {
    //     modal.classList.remove('hid');
    //     mask.classList.remove('hid');
    // });
    // no.addEventListener('click', () => {
    //     modal.classList.add('hid');
    //     mask.classList.add('hid');
    // });
    // mask.addEventListener('click', () => {
    //     no.click();
    // });


    // const modalopen = document.getElementById('modalopen');

    $(function () {
        // 編集ボタン(class="js-modal-open")が押されたら発火
        $('.js-modal-open').on('click', function () {
            // モーダルの中身(class="js-modal")の表示
            $('.js-modal').fadeIn();
            // 押されたボタンから投稿内容を取得し変数へ格納
            var post = $(this).attr('post');
            // 押されたボタンから投稿のidを取得し変数へ格納（どの投稿を編集するか特定するのに必要な為）
            var post_id = $(this).attr('post_id');

            // 取得した投稿内容をモーダルの中身へ渡す
            $('.modal_post').text(post);
            // 取得した投稿のidをモーダルの中身へ渡す
            $('.modal_id').val(post_id);
            return false;
        });

        // 背景部分や閉じるボタン(js-modal-close)が押されたら発火
        $('.js-modal-close').on('click', function () {
            // モーダルの中身(class="js-modal")を非表示
            $('.js-modal').fadeOut();
            return false;
        });
    });


}

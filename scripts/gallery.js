let numImg = 1;
let cout = 12;

function ChangeImage() {

    $("#main_img").attr('src','img/' + numImage + '.jpg');

}
function Leftclick() {
    if (numImage > 1) {
        numImage--;
    }  else {
        numImage = cout;
    }
    ChangeImage();
}
function Rightclick() {
    if (numImage < cout) {
        numImage++;
    } else {
        numImage = 1;
    }
    ChangeImage();
}

function Show(x){
    numImage=x;
    ChangeImage();
    $('.main').addClass('main_active');
    $('body').addClass('hidden');
    $('.btn_close').click(function () {
        $('.main').removeClass('main_active');
        $('body').removeClass('hidden');
    });

}
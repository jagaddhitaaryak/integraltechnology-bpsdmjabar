$(document).ready(function(){
    //event pada saat link di klik
    $(".section-padding").on('click', function(event) {

        // ambil isi href
        var tujuan = $(this).attr('href');
        // tangkap elemen ybs
        var elemenTujuan = $(tujuan);
        
        // pindahkan scroll
        $('html, body').animate({
            scrollTop: $(elemenTujuan).offset().top - 120
        }, 1000, 'easeInOutQuart');
        event.preventDefault();
    });
});
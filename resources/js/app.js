$('#research').keyup(function (e) {
    if (e.keyCode === 13) {
        let val = $(this).val();
        val = val.replace(/ /g, '+');
        console.log('la recherche est '+val);
        window.top.location.href= `/character/${val}`;
    }
});

$('.character').click(function(){
    let val = $(this).attr('id');
    console.log(val);
    val = val.replace(/ /g, '+');
    console.log(val);
    window.top.location.href= `/character/${val}`;
});

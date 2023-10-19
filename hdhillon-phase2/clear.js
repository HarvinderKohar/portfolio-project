document.getElementById('clear-btn2').addEventListener('click', function(clear)
{
    clear.preventDefault();
    var validate = confirm("Are you sure you want to clear?");

    if(validate)
    {
        document.getElementsByName('title')[0].value = '';
        document.getElementsByName('contents')[0].value = '';
    }

});




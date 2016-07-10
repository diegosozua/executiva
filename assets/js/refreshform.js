$(document).ready(function () {
    $("#submit").click(function () {
        var name = $("#name").val();
        var phone = $("#phone").val();
        var state = $("#state").val();
        var city = $("#city").val();
        if (name == '' || phone == '' || state == '' || city == '') {
            alert("Preencha todos os campos por favor!!");
        } else {
            
// Returns successful data submission message when the entered information is stored in database.
            $.post("../model/register_db.php", {
                name1: name,
                phone: phone,
                state: state,
                city: city
            }, function (data) {
                alert(data);
                $('#form')[0].reset(); // To reset form fields
            });
        }
    });
});
/**
 * Created by RikiTikiTavi on 11.01.14.
 */

function sendEmail(){
    alert("im here")

    var input_firstname = document.getElementById('tel_firstname').value;
    var input_phone = document.getElementById('tel_phone').value;
//    if (input_firstname & input_phone) {
//        Recorder.record('tel_firstname', tel_firstname);
//        Recorder.record('tel_phone', tel_phone);
//        alert(input_firstname + input_phone);
//    } else {
//        alert('Please enter a filename!');
//        input.focus();
//    }

//    alert(input_firstname + input_phone);
    var link = "mailto:i.dunskiy@gmail.com"

            + "&subject=" + escape(input_firstname)
            + "&body=" + escape(input_phone)
        ;

    window.location.href = link;
}
$(function()
{
    $("#submit-button").click(function(){
        $("#loading").fadeIn(100).show();
        var from = $("#from").val();
        var to = $("#to").val();
        var subject = $("#subject").val();
        var content = $("#content").val();
        var data = "from=" + from + "&to=" + to + "&subject=" + subject + "&content=" + content;
        if(to == ""){ $("#error-to").fadeIn(700).show(); $("#loading").fadeOut(100).hide();
        }
        else if(from == ""){
            $("#error-from").fadeIn(700).show(); $("#loading").fadeOut(100).hide(); }else if(subject == "")
        { $("#error-subject").fadeIn(700).show(); $("#loading").fadeOut(100).hide(); }else if(content == "")
        { $("#error-content").fadeIn(700).show(); $("#loading").fadeOut(100).hide(); }else
        { $.ajax({ type: "POST", url: "send.php", data: data, success: function(){ $("#loading").fadeOut(100).hide(); $('#message-sent').fadeIn(500).show(); } }); } }); });

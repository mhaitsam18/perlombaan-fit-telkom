(
    function($){
        "use strict";
        $("#contactForm").validator().on("submit",function(event){
            if(event.isDefaultPrevented()){
                formError();
                submitMSG(false,"Did you fill up the form properly?");
            } else{
                // event.preventDefault();
                // submitForm();
            }
        });
        function submitForm(){
            var nama_lomba=$("#nama_lomba").val();
            var nama_ketua=$("#nama_ketua").val();
            var nim=$("#nim").val();
            var kelas=$("#kelas").val();
            var email=$("#email").val();
            var nama_pembimbing=$("#nama_pembimbing").val();
            var sertifikat=$("#sertifikat").val();
            var action=$("#action").val();
        $.ajax({
            type:"POST",
            url:action,
            data:"nama_lomba="+nama_lomba+"&nama_ketua="+nama_ketua+"&nim="+nim+"&kelas="+kelas+"&email="+email+"&nama_pembimbing="+nama_pembimbing+"&sertifikat="+sertifikat,
            success:function(text){
                if(text=="success"){
                    formSuccess();
                } else{
                    formError();
                    submitMSG(false,text);
                }
            }
        });
    }
    function formSuccess(){
        $("#contactForm")[0].reset();submitMSG(true,"Message Submitted!")
    }
    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){$(this).removeClass();});
    }
    function submitMSG(valid,msg){if(valid){
        var msgClasses="h4 tada animated text-success";
    }else{
        var msgClasses="h4 text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);}}(jQuery));
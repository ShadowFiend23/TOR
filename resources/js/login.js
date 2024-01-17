$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#loginForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/login',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    window.location.replace(response.route);
                }else{
                    alert(response.msg);
                    location.reload();
                }
            },
            error: function(xhr){
                let response = xhr.responseJSON;

                alert(response.message);
            }
        })
    })



    $("#studentLoginForm").on("submit",function(e){
        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/student/login',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    window.location.replace(response.route);
                }else{
                    alert(response.msg);
                    location.reload();
                }
            },
            error: function(xhr){
                let response = xhr.responseJSON;

                alert(response.message);
            }
        })
    })

    $("#studentApplicationForm").on('submit',function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/saveApplication',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    window.location.replace(response.route);
                }
            },
            error: function(xhr){
                let response = xhr.responseJSON;

                alert(response.message);
            }
        })
    });

});

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
</head>
<body>
    @auth
        @include('components.sidebar')
        @yield('content')
    @endauth

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#addEmployeeForm").on("submit",function(e){
            e.preventDefault();

            let frmData     = new FormData($(this)[0]);

            $.ajax({
                url  : 'saveEmployee',
                data : frmData,
                type : 'POST',
                processData: false,
                contentType: false,
                success : function(data){

                },
                error: function(xhr){
                    // let response = xhr.responseJSON;

                    // Toast.fire({
                    //     icon : 'error',
                    //     title: response.message.split('(')[0]
                    // })
                }
            })
        })

        $("#addDepartmentForm").on("submit",function(e){
            e.preventDefault();

            let frmData     = new FormData($(this)[0]);

            $.ajax({
                url  : 'saveDepartment',
                data : frmData,
                type : 'POST',
                processData: false,
                contentType: false,
                success : function(data){

                },
                error: function(xhr){
                    // let response = xhr.responseJSON;

                    // Toast.fire({
                    //     icon : 'error',
                    //     title: response.message.split('(')[0]
                    // })
                }
            })
        })

        $(document).on("click",'.deleteEmployeeBtn',function(){
            let id = $(this).data('id');

            $.ajax({
                url  : '/deleteEmployee',
                data : { id : id},
                type : 'POST',
                success : function(data){
                    let response = $.parseJSON(data);

                    if(response.success){
                        window.location.reload;
                    }
                },
                error: function(xhr){
                    // let response = xhr.responseJSON;

                    // Toast.fire({
                    //     icon : 'error',
                    //     title: response.message.split('(')[0]
                    // })
                }
            })
        })
    </script>
</body>
</html>

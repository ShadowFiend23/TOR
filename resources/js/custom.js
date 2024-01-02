'use strict';

/* ===== Enable Bootstrap Popover (on element  ====== */
const popoverTriggerList = document.querySelectorAll('[data-coreui-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new coreui.Popover(popoverTriggerEl))

/* ==== Enable Bootstrap Alert ====== */
//var alertList = document.querySelectorAll('.alert')
//alertList.forEach(function (alert) {
//  new bootstrap.Alert(alert)
//});

// const alertList = document.querySelectorAll('.alert')
// const alerts = [...alertList].map(element => new bootstrap.Alert(element))

$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#employeeForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/admin/saveEmployee',
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

    $("#courseForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/saveCourse',
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

});


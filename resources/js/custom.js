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


    let el = document.getElementById('preReqChoices'),
        preReqChoices = null,
        currentPreReq = null,
        preReqValues  = {};

    if(el){
        preReqChoices = new Choices(el,{
            classNames: {
                containerOuter: 'form-control',
            }
        })
    }

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
    });

    $("#coAdminForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/admin/saveCoAdmin',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(data){
                if(data.success){
                    window.location.href = "/admin/co-admin"
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
    });

    $("#adminDepartmentForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/admin/saveDepartment',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(data){
                if(data.success){
                    window.location.href = "/admin/departments"
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
    });

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

    $("#addCurriculumForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/saveCurriculum',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    window.location.href = "/curriculum/new?id=" + response.id
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

    $(".editCurBtn").on('click',function(e){
        let name    = $(this).data('curname'),
            id      = $(this).data('curid');

        $("#editCurriculumModalLabel").html(name);
        $("#curriculumNameInput").val(name);
        $("#curriculumNameID").val(id);
    });

    $("#saveCurriculumName").on("click",function(e){
        e.preventDefault();

        let frmData     = new FormData($("#curriculumNameForm")[0]);

        $.ajax({
            url  : '/saveCurriculumName',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){

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

    $(".addSubject").on('click',function(){
        let year        = $(this).data('year'),
            semester    = $(this).data('sem'),
            subject     =   `<div class="my-3">
                                <input type="text" class="form-control" name="subjectCode[${year}${semester}][]" value="">
                            </div>`,
            description =   `<div class="my-3">
                                <input type="text" class="form-control" name="description[${year}${semester}][]" value="">
                            </div>`,
            credits     =   `<div class="my-3">
                                <input type="text" class="form-control" name="credits[${year}${semester}][]" value="3">
                            </div>`,
            preReq      =   `<div class="form-check mt-3">
                                <input class="form-check-input preReqCheckbox" type="checkbox" value="" id="flexCheckDefault" style="width: 2rem; height: 2rem;">
                                <input type="hidden" name="preReq[${year}${semester}][]" />
                            </div>`;

        $(`#subjectDiv${year}${semester}`).append(subject);
        $(`#descriptionDiv${year}${semester}`).append(description);
        $(`#creditsDiv${year}${semester}`).append(credits);
        $(`#preReqDiv${year}${semester}`).append(preReq);

    });

    $("#submitSubjects").on('click',function(){

        let frmData     = new FormData($("#subjectsForm")[0]);
        frmData.append('preReq', JSON.stringify(preReqValues));

        $.ajax({
            url  : '/saveSubjects',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    window.location.href = "/curriculum/?id=" + response.id
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
    });

    $(document).on('click','.preReqCheckbox',function(){
        currentPreReq = $(this);

        let inner = $("#preReqChoices").siblings("[name='search_terms']");
        inner.val('')

        $("#preReqSubjectLabel").html($(this).data('subject'));
        $("#presubjectModal").modal('toggle');
    })

    $(document).on('click','#savePreReq',function(){
        let values = preReqChoices.getValue(true),
            key = $("#preReqSubjectLabel").html();

        preReqValues[key] = values.join(',');
        $("#presubjectModal").modal('toggle');
    });

    $("#cancelPreReq").on("click", function () {
        if(currentPreReq){
            currentPreReq.prop('checked',!currentPreReq.prop('checked'));
        }

        preReqChoices.clearStore();
        $("#presubjectModal").modal('toggle');
    });

    $(document).on('keyup','.subjectCodeInput',function(){
        let subjectCode = $(this).val(),
            index = $('.subjectCodeInput').index(this),
            preReqCheckbox = $(".preReqCheckbox").eq(index);

        preReqCheckbox.data('subject',subjectCode);

    })

});


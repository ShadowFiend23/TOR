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
        preReqValues  = {},
        selectedEnrollSubjects = [];

    if(el){
        preReqChoices = new Choices(el,{
            classNames: {
                containerOuter: 'form-control',
            }
        })
    }

    $("#adminDepartmentHead").on("change",function(){
        let employeeID = $(this).val();

        $.ajax({
            url  : '/admin/getDepartmentHeadInfo',
            data : {
                employeeID : employeeID
            },
            type : 'POST',
            success : function(response){
                if(response.success){
                    $("#adminDeparmentHeadEmail").val(response.info.email)
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

    $("#minSchoolYear").on("change",function(){
        let val = parseInt($(this).val());

        $("#maxSchoolYear").val(val + 1);
    });

    $("#schoolYearForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/admin/saveSchoolYear',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    location.reload();
                }else{
                    alert(response.msg);
                }
            },
            error: function(xhr){
                let response = xhr.responseJSON;

                alert(response.message);
            }
        })
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
            success : function(response){
                if(response.success){
                    $("#employeeModal").modal('toggle');
                    setTimeout(() => {
                        window.location.href = "/admin/employees"
                    }, 1000);
                }else{
                    alert(response.message);
                }
            },
            error: function(xhr){
                let response = xhr.responseJSON;

                alert(response.message);
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
            success : function(response){
                if(response.success){
                    window.location.href= "/department"
                }else{
                    alert(response.msg)
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

    $("#studentForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($(this)[0]);

        $.ajax({
            url  : '/admin/saveStudents',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    $("#studentSuccessModal").modal('toggle');

                    setTimeout(() => {
                        window.location.href = "/admin/student-list?id=" + response.id
                    }, 1000);
                }
            },
            error: function(xhr){
                let response = xhr.responseJSON;

                alert(response.message);
            }
        })
    })

    $(".addSubject").on('click',function(){
        let year        = $(this).data('year'),
            semester    = $(this).data('sem'),
            subject     =   `<div class="my-3">
                                <input type="text" class="form-control subjectCodeInput" name="subjectCode[${year}${semester}][]" value="">
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

    });

    $(document).on('click','.studentTDList',function(){
        let studentID = $(this).data('student');

        $("#enrollmentStudentID").val(studentID);

        $("#regularModal").modal('toggle');
    })

    $("#enrollSubjectForm").on("submit",function(e){
        e.preventDefault();

        let frmData     = new FormData($("#subjectsForm")[0]),
            form        = $(this).serializeArray(),
            data        = [];

        for(let input of form){
            if(input.name != 'studentID' && input.name != 'studentType'){
                data.push(input.name);
            }
        }
        frmData.append('credentials',JSON.stringify(data));

        $.ajax({
            url  : '/storeCredentials',
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
        });
    });

    $(document).on("change",".checkboxEnrollSubject",function(){
        let tr = $(this).closest('tr');

        if($(this).is(':checked')){

            selectedEnrollSubjects[tr.data('subject')] = tr;
        }else{
            selectedEnrollSubjects[tr.data('subject')] = "";
        }

    });

    $("#submitEnrollmentSubjects").on('click',function(){
        if(selectedEnrollSubjects){
            $("#selectedSubjectTbody").html("");
            for (const subject in selectedEnrollSubjects) {
                if(selectedEnrollSubjects[subject]){
                    let clone = selectedEnrollSubjects[subject].clone();

                    clone.children().last().remove();
                    $("#selectedSubjectTbody").append(clone.prop('outerHTML'));
                }
            }
            $("#selectedSubjectModal").modal('toggle');
        }

    });

    $("#submitSelectedSubjectsBtn").on("click",function(){
        let frmData     = new FormData($("#subjectEnrollmentForm")[0]),
            keys        = Object.keys(selectedEnrollSubjects),
            subjects   = keys.map(function(e){
                                return JSON.stringify(e).replace(/['"]+/g, '');
                            });
        frmData.append('enrolledSubjects',subjects.join(","));
        $.ajax({
            url  : '/saveEnrollment',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    window.location.href = "/regular/show?id="+ response.id
                }
            },
            error: function(xhr){
                // let response = xhr.responseJSON;

                // Toast.fire({
                //     icon : 'error',
                //     title: response.message.split('(')[0]
                // })
            }
        });
    });

    $("#submitFinalEditGrades").on('click',function(){
        let frmData     = new FormData($("#editGradesForm")[0]);

        $.ajax({
            url  : '/saveGrades',
            data : frmData,
            type : 'POST',
            processData: false,
            contentType: false,
            success : function(response){
                if(response.success){
                    window.location.href = "/student-list?id=" + response.id
                }else{
                    alert(response.msg);
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

    $("#showEnrollBtn").on("click",function(){
        let enrollID = $(this).data('enroll');

        $.ajax({
            url  : '/checkEnroll',
            data : {
                enrollID : enrollID
            },
            type : 'POST',
            success : function(response){
                if(response.success){
                    alert(response.msg);
                    setTimeout(() => {
                        window.location.href = "/regular/show?id=" + response.id
                    }, 500);
                }else{
                    alert(response.msg);
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

    $("#addSummerBtn").on('click',function(){
        $("#addSummerModal").modal('toggle');
    });

    $("#saveSummerBtn").on('click',function(){
        if($("#selectedSummerYear").val() != "--Select Year--"){

            let selectedSummerYear = $("#selectedSummerYear option:selected").text();
            $("#summerYearTitle").html(`${selectedSummerYear}: SUMMER`);
            $("#summerSubjects,#summerDescription,#summerCredits,#summerPreReq").html();
            $(".removable").remove();
            $("#mainSummer").show();
            $("#addSummerModal").modal('toggle');
        }else{
            alert("Please select a year");
        }
    });

    $("#addSummerSubjectBtn").on('click',function(){
        let year        =   $("#selectedSummerYear").val(),
            subject     =   `<div class="my-3 removable">
                                <input type="text" class="form-control subjectCodeInput" name="${year}summer[subjectCode][]" value="">
                            </div>`,
            description =   `<div class="my-3 removable">
                                <input type="text" class="form-control" name="${year}summer[description][]" value="">
                            </div>`,
            credits     =   `<div class="my-3 removable">
                                <input type="text" class="form-control" name="${year}summer[credits][]" value="3">
                            </div>`,
            preReq      =   `<div class="form-check mt-3 removable">
                                <input class="form-check-input preReqCheckbox" type="checkbox" value="" id="flexCheckDefault" style="width: 2rem; height: 2rem;">
                                <input type="hidden" name="${year}summer[preReq][]" />
                            </div>`;

            $(`#summerSubjects`).append(subject);
            $(`#summerDescription`).append(description);
            $(`#summerCredits`).append(credits);
            $(`#summerPreReq`).append(preReq);
    });

    $
});


<x-registrar_layout>
    <!-- Modal confirmation-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <label>OR No.</label>
                    <input type="text" class="form-control form-control-sm" />
                    <label>Date.</label>
                    <input type="date" class="form-control form-control-sm" />
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-info btn-sm px-3" data-coreui-toggle="modal"
                            data-coreui-target="#successModal">Next</button>
                        <button type="button" class="btn btn-secondary btn-sm"
                            data-coreui-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal success -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="fw-bold text-center">
                        TITLE OR DEGREE CONFERRED
                    </p>
                    <label>Date of Graduation</label>
                    <input type="date" class="form-control form-control-sm" />
                    <label>Granted under Authority of the EVSU Academic Council and Board of Regents</label>
                    <input type="text" class="form-control form-control-sm" />
                    <label>GRANTED HONORABLE DISMISSAL EFFECTIVE</label>
                    <input type="text" class="form-control form-control-sm" />
                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-info btn-sm px-3" id="pdfLink">Print</a>
                        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
                        <script src="https://printjs-4de6.kxcdn.com/print.min.js" type="module"></script>
                        <script>
                            document.getElementById('pdfLink').addEventListener('click', (event) => {
                                event.preventDefault()
                                source = "<html><head><script>function step1(){\n" +
                                    "setTimeout('step2()', 10);}\n" +
                                    "function step2(){window.print();window.close()}\n" +
                                    "</scri" + "pt></head><body onload='step1()'>\n" +
                                    "<img src='" + document.getElementById('toPrint').querySelector('img').src +
                                    "' style='width:100%;' /></body></html>";

                                Pagelink = "about:blank";
                                var pwa = window.open(Pagelink, "_new", 'height=612,width=936.09');
                                pwa.document.open();
                                pwa.document.write(source);
                                pwa.document.close()
                            });
                        </script>
                        <button type="button" class="btn btn-secondary btn-sm"
                            data-coreui-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-lg d-flex justify-content-end gap-2">
        <button class="btn btn-info btn-sm" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
            Print
        </button>
        <a id="download-button" class="btn btn-success btn-sm" download>
            Download
        </a>
    </div>
    <div class="w-100 pb-5 position-relative" data-controller="tor" id="toPrint">
        <style>
            @import url(https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css);
            @import url(https://fonts.googleapis.com/css?family=IBM+Plex+Serif:500,400,700,600|Inter:800,400,500,700,italic);

            * {
                -webkit-font-smoothing: antialiased;
                box-sizing: border-box
            }

            button:focus-visible {
                outline: 2px solid #4a90e2 !important;
                outline: -webkit-focus-ring-color auto 5px !important
            }

            a {
                text-decoration: none
            }

            .frame {
                width: 612px
            }

            .frame .group-wrapper {
                position: relative;
                background-color: #fff;
                width: 612px;
                height: 936.09px
            }

            .frame .group {
                position: relative;
                width: 575px;
                height: 903px;
                top: 8px;
                left: 21px
            }

            .frame .overlap-wrapper {
                height: 903px
            }

            .frame .overlap {
                position: relative;
                width: 575px;
                height: 903px
            }

            .frame .tabloid {
                position: absolute;
                width: 580px;
                height: 903px;
                top: 0;
                left: 0;
                background-color: #fffefe
            }

            .frame .evsu {
                position: absolute;
                width: 259px;
                height: 259px;
                top: 302px;
                left: 180px;
                object-fit: cover
            }

            .frame .vision-a-leading {
                position: absolute;
                top: 45px;
                left: 75px;
                font-family: "IBM Plex Serif", Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 6.5px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper {
                font-weight: 700
            }

            .frame .span {
                font-family: "IBM Plex Serif", Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 6px;
                letter-spacing: 0
            }

            .frame .mission-develop-a {
                position: absolute;
                top: 44px;
                left: 350px;
                font-family: "IBM Plex Serif", Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 6.5px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .full-name {
                position: absolute;
                width: 213px;
                top: 151px;
                left: 70px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .font-10 {
                font-size: 10px !important
            }

            .font-9 {
                font-size: 9px !important
            }

            .font-8 {
                font-size: 8 !important
            }

            .frame .birth-date {
                position: absolute;
                width: 212px;
                top: 161px;
                left: 70px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .guardian {
                position: absolute;
                width: 198px;
                top: 171.5px;
                left: 80px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .ncee-percentile {
                position: absolute;
                width: 74px;
                top: 182px;
                left: 96px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .date-taken {
                position: absolute;
                width: 63px;
                top: 182px;
                left: 216px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .elementary {
                position: absolute;
                width: 214px;
                top: 220px;
                left: 66px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .secondary {
                position: absolute;
                width: 213px;
                top: 234px;
                left: 66px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .credentials {
                position: absolute;
                width: 221px;
                top: 226px;
                left: 327px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .remarks {
                position: absolute;
                width: 221px;
                top: 236px;
                left: 327px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .title-or-degree {
                position: absolute;
                width: 291px;
                top: 692px;
                left: 18px;
                font-family: Inter, Helvetica;
                font-weight: 800;
                color: #000;
                font-size: 5.6px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .div {
                position: absolute;
                width: 266px;
                top: 701px;
                left: 44px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .date-of-graduation {
                position: absolute;
                width: 225px;
                top: 712px;
                left: 88px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .board-of-regents {
                position: absolute;
                width: 168px;
                top: 733px;
                left: 83px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .capstone-title {
                position: absolute;
                width: 176px;
                top: 744px;
                left: 83px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .valid-for {
                position: absolute;
                width: 107px;
                top: 770px;
                left: 96px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .or-number {
                position: absolute;
                width: 70px;
                top: 783px;
                left: 78px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .date {
                position: absolute;
                width: 70px;
                top: 794px;
                left: 78px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .record-in-charge {
                position: absolute;
                width: 200px;
                top: 825px;
                left: 145px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 12px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                background-color: transparent
            }

            .frame .registrar {
                position: absolute;
                width: 200px;
                top: 825px;
                left: 350px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                background-color: transparent;
                font-size: 12px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                text-overflow: clip !important
            }

            .frame .date-of-admission {
                position: absolute;
                width: 68px;
                top: 215px;
                left: 353px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .address {
                position: absolute;
                width: 232px;
                top: 151px;
                left: 322px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .place-of-birth {
                position: absolute;
                width: 215px;
                top: 162px;
                left: 339px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .address-2 {
                position: absolute;
                width: 232px;
                top: 171.5px;
                left: 322px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .place {
                position: absolute;
                width: 242px;
                top: 182px;
                left: 312px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .course {
                position: absolute;
                width: 60px;
                top: 215px;
                left: 491px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 5.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .group-2 {
                position: absolute;
                width: 544px;
                height: 881px;
                top: 19px;
                left: 11px
            }

            .frame .group-3 {
                position: absolute;
                width: 560px;
                height: 126px;
                top: 754px;
                left: 8px
            }

            .frame .text-wrapper-2 {
                position: absolute;
                width: 98px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 8.4px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .overlap-group {
                position: absolute;
                width: 167px;
                height: 39px;
                top: 63px;
                left: 1px
            }

            .frame .NOT-VALID-WITHOUT {
                position: absolute;
                width: 98px;
                top: 0;
                left: 7px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7.3px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .p {
                position: absolute;
                width: 167px;
                top: 31px;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                font-style: italic;
                color: #000;
                font-size: 6.3px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-3 {
                position: absolute;
                width: 151px;
                top: 73px;
                left: 150px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7.3px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-4 {
                position: absolute;
                width: 151px;
                top: 73px;
                left: 353px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7.3px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-5 {
                position: absolute;
                width: 34px;
                top: 12px;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 8.4px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-6 {
                width: 24px;
                top: 23px;
                left: 0;
                font-weight: 700;
                font-size: 8.4px;
                white-space: nowrap;
                position: absolute;
                font-family: Inter, Helvetica;
                color: #000;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-7 {
                position: absolute;
                width: 116px;
                top: 35px;
                left: 150px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 8px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-8 {
                position: absolute;
                width: 116px;
                top: 35px;
                left: 350px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 8px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .valid-for-line {
                position: absolute;
                width: 52px;
                height: 1px;
                top: 9px;
                left: 77px
            }

            .frame .date-line {
                position: absolute;
                width: 51px;
                height: 1px;
                top: 32px;
                left: 59px
            }

            .frame .or-no-line {
                position: absolute;
                width: 38px;
                height: 1px;
                top: 22px;
                left: 59px
            }

            .frame .text-wrapper-9 {
                position: absolute;
                width: 218px;
                top: 118px;
                left: 175px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                font-style: italic;
                color: #000;
                font-size: 7px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-10 {
                position: absolute;
                width: 167px;
                top: 94px;
                left: 200px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                font-style: italic;
                color: #000;
                font-size: 6.3px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-11 {
                position: absolute;
                width: 127px;
                top: 94px;
                left: 409px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                font-style: italic;
                color: #000;
                font-size: 6.3px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .overlap-group-wrapper {
                position: absolute;
                width: 552px;
                height: 751px;
                top: 0;
                left: 0
            }

            .frame .overlap-2 {
                position: relative;
                width: 548px;
                height: 751px
            }

            .frame .overlap-3 {
                position: absolute;
                width: 548px;
                height: 747px;
                top: 4px;
                left: 0
            }

            .frame .rectangle {
                position: absolute;
                width: 553px;
                height: 15px;
                top: 234px;
                left: -4px;
                border: .1px solid;
                border-color: #000
            }

            .frame .eastern-visayas {
                position: absolute;
                width: 60px;
                height: 55px;
                top: 0;
                left: -5 px;
                object-fit: cover
            }

            .frame .group-4 {
                position: absolute;
                width: 83px;
                height: 101px;
                top: 1px;
                left: 466px
            }

            .frame .overlap-group-2 {
                position: absolute;
                width: 79px;
                height: 15px;
                top: 0;
                left: 0
            }

            .frame .text-wrapper-12 {
                position: absolute;
                width: 47px;
                top: -3.5;
                left: 27px;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 8.4px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-13 {
                position: absolute;
                width: 79px;
                top: 9px;
                left: 10;
                font-family: Inter, Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 7px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .rectangle-2 {
                position: absolute;
                width: 72px;
                height: 85px;
                top: 20px;
                left: 14px;
                background-color: #fffffe;
                border: .17px solid;
                border-color: #000;
                box-shadow: 0 .7px .7px #00000040
            }

            .frame .text-wrapper-14 {
                position: absolute;
                width: 30px;
                top: 237px;
                left: 459px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-15 {
                position: absolute;
                width: 41px;
                top: 237px;
                left: 405px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-16 {
                position: absolute;
                width: 30px;
                top: 237px;
                left: 513px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .final-rating-line {
                position: absolute;
                width: 1px;
                height: 15px;
                top: 234px;
                left: 401px
            }

            .frame .re-exam-line {
                position: absolute;
                width: 1px;
                height: 15px;
                top: 234px;
                left: 450px
            }

            .frame .credits-line {
                position: absolute;
                width: 1px;
                height: 15px;
                top: 234px;
                left: 497px
            }

            .frame .text-wrapper-17 {
                position: absolute;
                width: 158px;
                top: 234px;
                left: 119px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 11.2px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .div-wrapper {
                position: absolute;
                width: 542px;
                height: 678px;
                top: 69px;
                left: 0
            }

            .frame .overlap-4 {
                position: relative;
                width: 556px;
                height: 678px
            }

            .frame .group-5 {
                position: absolute;
                width: 549px;
                height: 85px;
                top: 587px;
                left: 7px
            }

            .frame .overlap-5 {
                position: absolute;
                width: 293px;
                height: 27px;
                top: -1px;
                left: -1px
            }

            .frame .rectangle-3 {
                position: absolute;
                width: 293px;
                height: 14px;
                top: 0;
                left: 0;
                border: .7px solid;
                border-color: #000
            }

            .frame .img {
                position: absolute;
                width: 292px;
                height: 1px;
                top: 25px;
                left: 1px
            }

            .frame .text-wrapper-18 {
                position: absolute;
                width: 185px;
                top: 2px;
                left: 3px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 9.6px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .major-line {
                position: absolute;
                width: 266px;
                height: 1px;
                top: 33px;
                left: 26px
            }

            .frame .overlap-6 {
                position: absolute;
                width: 229px;
                height: 9px;
                top: 57px;
                left: 1px
            }

            .frame .boar-of-regents-line {
                position: absolute;
                width: 168px;
                height: 1px;
                top: 8px;
                left: 61px
            }

            .frame .text-wrapper-19 {
                position: absolute;
                width: 65px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .overlap-7 {
                position: absolute;
                width: 229px;
                height: 9px;
                top: 68px;
                left: 1px
            }

            .frame .capstone-title-line {
                position: absolute;
                width: 168px;
                height: 1px;
                top: 8px;
                left: 61px
            }

            .frame .overlap-8 {
                position: absolute;
                width: 291px;
                height: 18px;
                top: 37px;
                left: 1px
            }

            .frame .date-of-graduation-2 {
                position: absolute;
                width: 225px;
                height: 1px;
                top: 7px;
                left: 66px
            }

            .frame .text-wrapper-20 {
                width: 77px;
                left: 0;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-21 {
                position: absolute;
                width: 229px;
                top: 10px;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-22 {
                position: absolute;
                width: 22px;
                top: 26px;
                left: 1px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-23 {
                position: absolute;
                width: 179px;
                top: 68px;
                left: 292px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .group-6 {
                position: absolute;
                width: 229px;
                height: 67px;
                top: 0;
                left: 308px
            }

            .frame .overlap-9 {
                position: relative;
                width: 231px;
                height: 67px
            }

            .frame .rectangle-4 {
                position: absolute;
                width: 224px;
                height: 67px;
                top: 0;
                left: 2px;
                border: .7px solid;
                border-color: #000
            }

            .frame .text-wrapper-24 {
                position: absolute;
                width: 67px;
                top: 3px;
                left: 80px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .line {
                position: absolute;
                width: 63px;
                height: 1px;
                top: 52px;
                left: 127px
            }

            .frame .group-7 {
                position: absolute;
                width: 151px;
                height: 8px;
                top: 15px;
                left: 7px
            }

            .frame .text-wrapper-25 {
                width: 21px;
                left: 0;
                text-align: right;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-26 {
                position: absolute;
                width: 34px;
                top: 0;
                left: 26px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-27 {
                position: absolute;
                width: 50px;
                top: 0;
                left: 94px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-28 {
                width: 31px;
                left: 62px;
                text-align: center;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .group-8 {
                position: absolute;
                width: 165px;
                height: 9px;
                top: 26px;
                left: 6px
            }

            .frame .text-wrapper-29 {
                width: 21px;
                left: 0;
                text-align: center;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-30 {
                width: 32px;
                top: 0;
                left: 27px;
                font-weight: 400;
                font-size: 7px;
                white-space: nowrap;
                position: absolute;
                font-family: Inter, Helvetica;
                color: #000;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-31 {
                position: absolute;
                width: 63px;
                top: 0;
                left: 94px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-32 {
                width: 23px;
                left: 67px;
                text-align: center;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .group-9 {
                position: absolute;
                width: 125px;
                height: 9px;
                top: 38px;
                left: 5px
            }

            .frame .text-wrapper-33 {
                width: 23px;
                left: 0;
                text-align: center;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-34 {
                position: absolute;
                width: 35px;
                top: 0;
                left: 28px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 6.1px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-35 {
                position: absolute;
                width: 22px;
                top: 0;
                left: 95px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-36 {
                width: 22px;
                left: 67px;
                text-align: center;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .group-10 {
                position: absolute;
                width: 55px;
                height: 8px;
                top: 48px;
                left: 0
            }

            .frame .overlap-group-3 {
                position: relative;
                width: 51px;
                height: 8px
            }

            .frame .text-wrapper-37 {
                width: 33px;
                left: 0;
                text-align: center;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-38 {
                position: absolute;
                width: 18px;
                top: 0;
                left: 33px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .group-11 {
                position: absolute;
                width: 66px;
                height: 8px;
                top: 15px;
                left: 165px
            }

            .frame .text-wrapper-39 {
                position: absolute;
                width: 14px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-40 {
                position: absolute;
                width: 43px;
                top: 0;
                left: 18px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .group-12 {
                position: absolute;
                width: 55px;
                height: 8px;
                top: 26px;
                left: 165px
            }

            .frame .text-wrapper-41 {
                position: absolute;
                width: 16px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-42 {
                position: absolute;
                width: 33px;
                top: 0;
                left: 18px;
                font-family: Inter, Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .group-13 {
                position: absolute;
                width: 542px;
                height: 678px;
                top: 0;
                left: 0
            }

            .frame .overlap-10 {
                position: relative;
                width: 546px;
                height: 678px
            }

            .frame .group-14 {
                position: absolute;
                width: 546px;
                height: 678px;
                top: 0;
                left: 0
            }

            .frame .overlap-11 {
                position: absolute;
                width: 391px;
                height: 35px;
                top: 0;
                left: 65px
            }

            .frame .text-wrapper-43 {
                position: absolute;
                width: 154px;
                top: -1;
                left: 110px;
                font-family: "IBM Plex Serif", Helvetica;
                font-weight: 500;
                color: #000;
                font-size: 12px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .text-wrapper-44 {
                position: absolute;
                width: 391px;
                top: 12px;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 800;
                color: #000;
                font-size: 22.4px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal;
                white-space: nowrap
            }

            .frame .header-line {
                position: absolute;
                width: 563px;
                height: 2px;
                top: 38px;
                left: -9;
                border-bottom: solid 2px #000
            }

            .frame .that-line {
                position: absolute;
                width: 534px;
                top: 675px;
                left: 8px
            }

            .border-bottom-cus {
                border-bottom: solid .8px #000 !important
            }

            .frame .group-15 {
                position: absolute;
                width: 537px;
                height: 59px;
                top: 43px;
                left: 3px
            }

            .frame .group-16 {
                position: absolute;
                width: 560px;
                height: 15px;
                top: 0;
                left: -10
            }

            .frame .overlap-group-4 {
                position: relative;
                height: 17px;
                top: -1px;
                left: -1px;
                border: .7px solid;
                border-color: #000
            }

            .frame .text-wrapper-45 {
                position: absolute;
                width: 96px;
                top: 0px;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 11.2px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .group-17 {
                position: absolute;
                width: 550px;
                height: 41px;
                top: 19px;
                left: 5px
            }

            .frame .text-wrapper-46 {
                position: absolute;
                width: 27px;
                top: 0;
                left: -10;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .overlap-12 {
                position: absolute;
                width: 258px;
                height: 8px;
                top: 12px;
                left: 0
            }

            .frame .text-wrapper-47 {
                width: 52px;
                left: -10;
                position: absolute;
                top: -2;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .date-of-birth-line {
                position: absolute;
                width: 214.5px;
                height: 1px;
                top: 7px;
                left: 40px
            }

            .frame .overlap-13 {
                position: absolute;
                width: 258px;
                height: 9px;
                top: 21px;
                left: 0
            }

            .frame .text-wrapper-48 {
                position: absolute;
                width: 62px;
                top: 0;
                left: -10;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .guardian-line {
                position: absolute;
                width: 199px;
                height: 1px;
                top: 7px;
                left: 56px
            }

            .frame .overlap-14 {
                width: 265px;
                top: 1px;
                left: 268px;
                position: absolute;
                height: 9px
            }

            .frame .text-wrapper-49 {
                position: absolute;
                width: 32px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .img-2 {
                position: absolute;
                width: 242px;
                height: 1px;
                top: 7px;
                left: 32px
            }

            .frame .overlap-15 {
                position: absolute;
                width: 265px;
                height: 9px;
                top: 12px;
                left: 268px
            }

            .frame .text-wrapper-50 {
                position: absolute;
                width: 51px;
                top: 0;
                left: -10;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-50-1 {
                position: absolute;
                width: 51px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .place-of-birth-line {
                position: absolute;
                width: 224px;
                height: 1px;
                top: 7px;
                left: 50px
            }

            .frame .overlap-16 {
                position: absolute;
                width: 265px;
                height: 9px;
                top: 21px;
                left: 268px
            }

            .frame .text-wrapper-51 {
                width: 22px;
                top: 32px;
                left: 268px;
                font-weight: 700;
                font-size: 7px;
                position: absolute;
                font-family: Inter, Helvetica;
                color: #000;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .overlap-17 {
                width: 152px;
                height: 9px;
                top: 32px;
                position: absolute;
                left: 0
            }

            .frame .text-wrapper-52 {
                position: absolute;
                width: 80px;
                top: 0;
                left: -10px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .percentile-line {
                position: absolute;
                width: 74px;
                height: 1px;
                top: 7px;
                left: 72px
            }

            .frame .overlap-18 {
                position: absolute;
                width: 104px;
                height: 9px;
                top: 32px;
                left: 154px
            }

            .frame .text-wrapper-53 {
                position: absolute;
                width: 43px;
                top: 0;
                left: -4;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .date-taken-line {
                position: absolute;
                width: 60px;
                height: 1px;
                top: 7px;
                left: 41px
            }

            .frame .name-line {
                position: absolute;
                width: 215px;
                height: 1px;
                top: 8px;
                left: 40px
            }

            .frame .place-line {
                position: absolute;
                width: 252px;
                height: 1px;
                top: 39px;
                left: 290px
            }

            .frame .group-18 {
                position: absolute;
                width: 536px;
                height: 49px;
                top: 107px;
                left: 3px
            }

            .frame .overlap-19 {
                position: relative;
                width: 547px;
                height: 49px
            }

            .frame .group-19 {
                position: absolute;
                width: 540px;
                height: 30px;
                top: 0;
                left: 0
            }

            .frame .overlap-group-5 {
                position: relative;
                width: 560px;
                height: 30px;
                top: -1px;
                left: -10px
            }

            .frame .rectangle-5 {
                position: absolute;
                width: 560px;
                height: 17px;
                top: 0;
                left: 0;
                border: .7px solid;
                border-color: #000000dd
            }

            .frame .text-wrapper-54 {
                position: absolute;
                width: 150px;
                top: 1px;
                left: 1px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 11.2px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-55 {
                position: absolute;
                width: 123px;
                top: 1px;
                left: 280px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 11.2px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .group-20 {
                position: absolute;
                width: 543px;
                height: 30px;
                top: 19px;
                left: 5px
            }

            .frame .overlap-20 {
                width: 258px;
                height: 8px;
                top: 7px;
                position: absolute;
                left: 0
            }

            .frame .elementary-2 {
                position: absolute;
                width: 47px;
                top: 0;
                left: -10;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .img-3 {
                position: absolute;
                width: 215px;
                height: 1px;
                top: 7px;
                left: 43px
            }

            .frame .text-wrapper-56 {
                position: absolute;
                width: 34px;
                top: 21px;
                left: 266px;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .overlap-21 {
                width: 88px;
                top: 0;
                left: 442px;
                position: absolute;
                height: 9px
            }

            .frame .text-wrapper-57 {
                position: absolute;
                width: 28px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .course-line {
                position: absolute;
                width: 70px;
                height: 1px;
                top: 8px;
                left: 28px
            }

            .frame .overlap-22 {
                position: absolute;
                width: 258px;
                height: 8px;
                top: 20px;
                left: 0
            }

            .frame .text-wrapper-58 {
                width: 67px;
                left: 266px;
                position: absolute;
                top: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .overlap-23 {
                position: absolute;
                width: 264px;
                height: 10px;
                top: 11px;
                left: 266px
            }

            .frame .text-wrapper-59 {
                position: absolute;
                width: 41px;
                top: 0;
                left: 0;
                font-family: Inter, Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .credentials-line {
                position: absolute;
                width: 233px;
                height: 1px;
                top: 8px;
                left: 41px
            }

            .frame .date-of-admission-2 {
                position: absolute;
                width: 69px;
                height: 1px;
                top: 8px;
                left: 334px
            }

            .frame .remarks-line {
                position: absolute;
                width: 233px;
                height: 1px;
                top: 28px;
                left: 307px
            }

            .frame .state-of-admission {
                position: absolute;
                width: 1px;
                height: 17px;
                top: 106px;
                left: 269px
            }

            .border-left-cus {
                border-left: solid .8px #000 !important
            }

            .frame .group-21 {
                position: absolute;
                width: 370px;
                height: 45px;
                top: 0;
                left: 93px
            }

            .frame .text-wrapper-60 {
                position: absolute;
                width: 150px;
                top: 0;
                left: 75px;
                font-family: "IBM Plex Serif", Helvetica;
                font-weight: 400;
                color: #000;
                font-size: 8.5px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .text-wrapper-61 {
                position: absolute;
                width: 364px;
                top: 13px;
                left: -28px;
                font-family: "IBM Plex Serif", Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 11px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .frame .ORMOC-CITY-CAMPUS {
                position: absolute;
                width: 148px;
                top: 25px;
                left: 70px;
                font-family: "IBM Plex Serif", Helvetica;
                font-weight: 700;
                color: #000;
                font-size: 11px;
                text-align: center;
                letter-spacing: 0;
                line-height: normal
            }

            .subjects-box {
                width: 640px;
                height: 406px;
                position: absolute;
                z-index: 9999;
                top: 280px;
                left: -10px;
                margin: 0 21.48px;
                padding-top: 3.5px
            }

            .subjects-box .col-1-cus {
                margin-left: 18.33px;
                min-width: 110px;
                font-family: Inter-Bold, Helvetica;
                color: #000;
                font-size: 7px;
                line-height: 1.5
            }

            .subjects-box .col-2-cus {
                min-width: 286px;
                font-family: Inter-Bold, Helvetica;
                color: #000;
                font-size: 7px;
                line-height: 1.5
            }

            .subjects-box .col-3-cus {
                min-width: 53px;
                font-family: Inter-Bold, Helvetica;
                color: #000;
                font-size: 7px;
                line-height: 1.5;
                text-align: center
            }

            .subjects-box .col-1-header {
                margin-left: 18.33px;
                width: 110px;
                font-family: Inter-Bold, Helvetica;
                font-weight: 800;
                color: #000;
                font-size: 7px;
                letter-spacing: 0;
                line-height: 1.5;
                display: block
            }

            .w-100-cus {
                width: 100% !important;
                display: flex
            }
        </style>
        <div class="frame">
            <div class="group-wrapper">
                <div id="subject-box" class="subjects-box"></div>
                <div class="group">
                    <div class="overlap-wrapper">
                        <div class="overlap">
                            <div class="tabloid"><img class="evsu" src="{{ asset('evsu-1@2x.png') }}">
                                <p class="vision-a-leading"><span class="text-wrapper">Vision<br></span><span
                                        class="span">A Leading State University<br>in Technological and
                                        Professional<br>Education</span></p>
                                <p class="mission-develop-a"><span class="text-wrapper">Mission<br></span><span
                                        class="span-2">Develop a Strong Technologically and<br>Professionally Competent
                                        Productive Human<br>Resource Embued with Positive Values<br>Needed to Propel
                                        Sustainable Development</span></p>
                                <div class="full-name font-9" id="full_name">full_name</div>
                                <div class="birth-date font-9" id="birth_date">birth_date</div>
                                <div class="guardian font-9" id="guardian">guardian</div>
                                <div class="ncee-percentile font-9" id="ncee_percentile">ncee_percentile</div>
                                <div class="date-taken font-9" id="date_taken">date_taken</div>
                                <div class="elementary font-9" id="elementary">elementary</div>
                                <div class="secondary font-9" id="secondary">secondary</div>
                                <div class="credentials font-9" id="credentials">credentials</div>
                                <div class="remarks font-9" id="remarks">remarks</div>
                                <div class="title-or-degree font-9" id="title_or_degree_conferred">
                                    title_or_degree_conferred</div>
                                <div class="div font-9" id="major">Major</div>
                                <div class="date-of-graduation font-9" id="date_of_graduation">date_of_graduation</div>
                                <div class="board-of-regents font-9" id="capstone_title">capstone_title</div>
                                <div class="capstone-title font-9" id="board_of_regents">board_of_regents</div>
                                <div class="valid-for font-10" id="valid_for">valid_for</div>
                                <div class="or-number font-10" id="or_number">or_number</div>
                                <div class="date font-10" id="date">date</div>
                                <div class="record-in-charge" id="record_in_charge">record_in_charge</div>
                                <div class="registrar" id="registrar">registrar</div>
                                <div class="date-of-admission font-9" id="date_of_admission">date_of_admission</div>
                                <div class="address font-9" id="address_1">address_1</div>
                                <div class="place-of-birth font-9" id="place_of_birth">place_of_birth</div>
                                <div class="address-2 font-9" id="address_2">address_2</div>
                                <div class="place font-9" id="place">place</div>
                                <div class="course font-9" id="course">course</div>
                            </div>
                            <div class="group-2">
                                <div class="group-3">
                                    <div class="text-wrapper-2">VALID ONLY FOR</div>
                                    <div class="overlap-group">
                                        <div class="NOT-VALID-WITHOUT">NOT VALID<br>WITHOUT<br>SEAL</div>
                                        <p class="p">Address: Brgy. Don Felipe Larrazabal, Ormoc City</p>
                                    </div>
                                    <div class="text-wrapper-3">Record Incharge</div>
                                    <div class="text-wrapper-4">Registrar</div>
                                    <div class="text-wrapper-5">O.R. No.</div>
                                    <div class="text-wrapper-6">Date</div>
                                    <div class="text-wrapper-7">Prepared and Checked by:</div>
                                    <div class="text-wrapper-8">Certified Corrected By:</div>
                                    <div class="valid-for-line border-bottom-cus"></div>
                                    <div class="date-line border-bottom-cus"></div>
                                    <div class="or-no-line border-bottom-cus"></div>
                                    <p class="text-wrapper-9">TranscriptEase: A Web-Based Transcript Processing System
                                    </p>
                                    <div class="text-wrapper-10">email add: evsuregistrar_occ@yahoo.com</div>
                                    <div class="text-wrapper-11">Tel # (053) 255-8220</div>
                                </div>
                                <div class="overlap-group-wrapper">
                                    <div class="overlap-2">
                                        <div class="overlap-3">
                                            <div class="rectangle"></div><img class="eastern-visayas"
                                                src="{{ asset('eastern-visayas-state-university-1@2x.png') }}">
                                            <div class="group-4">
                                                <div class="overlap-group-2">
                                                    <div class="text-wrapper-12">ORIGINAL</div>
                                                    <p class="text-wrapper-13">Sheet No. 1 of 2</p>
                                                </div>
                                                <div class="rectangle-2"></div>
                                            </div>
                                            <div class="text-wrapper-14">Re Exam</div>
                                            <div class="text-wrapper-15">Final Rating</div>
                                            <div class="text-wrapper-16">Credits</div>
                                            <div class="final-rating-line border-left-cus"></div>
                                            <div class="re-exam-line border-left-cus"></div>
                                            <div class="credits-line border-left-cus"></div>
                                            <div class="text-wrapper-17">DESCRIPTIVE TITLES</div>
                                            <div class="div-wrapper">
                                                <div class="overlap-4">
                                                    <div class="group-5">
                                                        <div class="overlap-5">
                                                            <div class="rectangle-3"></div>
                                                            <div class="img border-bottom-cus"></div>
                                                            <div class="text-wrapper-18">TITLE OR DEGREE CONFERRED
                                                            </div>
                                                        </div>
                                                        <div class="major-line border-bottom-cus"></div>
                                                        <div class="overlap-6">
                                                            <div class="boar-of-regents-line border-bottom-cus"></div>
                                                            <div class="text-wrapper-19">Capstone Title:</div>
                                                        </div>
                                                        <div class="overlap-7">
                                                            <div class="capstone-title-line border-bottom-cus"></div>
                                                            <div class="text-wrapper-19">Board of Regents:</div>
                                                        </div>
                                                        <div class="overlap-8">
                                                            <div class="date-of-graduation-2 border-bottom-cus"></div>
                                                            <div class="text-wrapper-20">Date of Graduation:</div>
                                                            <p class="text-wrapper-21">Granted under Authority of the
                                                                EVSU Academic Council and</p>
                                                        </div>
                                                        <div class="text-wrapper-22">Major:</div>
                                                        <div class="text-wrapper-23">GRANTED HONORABLE DISMISSAL
                                                            EFFECTIVE</div>
                                                        <div class="group-6">
                                                            <div class="overlap-9">
                                                                <div class="rectangle-4"></div>
                                                                <div class="text-wrapper-24">GRADING SYSTEM</div><img
                                                                    class="line"
                                                                    src="https://c.animaapp.com/HlqCzYiw/img/line-18.svg">
                                                                <div class="group-7">
                                                                    <div class="text-wrapper-25">1.0</div>
                                                                    <div class="text-wrapper-26">Excellent</div>
                                                                    <div class="text-wrapper-27">Fair or Passing</div>
                                                                    <div class="text-wrapper-28">2.6-3.0</div>
                                                                </div>
                                                                <div class="group-8">
                                                                    <div class="text-wrapper-29">1.1-1.5</div>
                                                                    <div class="text-wrapper-30">Superior</div>
                                                                    <div class="text-wrapper-31">Conditional Failure
                                                                    </div>
                                                                    <div class="text-wrapper-32">3.1-4.0</div>
                                                                </div>
                                                                <div class="group-9">
                                                                    <div class="text-wrapper-33">1.6-2.0</div>
                                                                    <div class="text-wrapper-34">Very Good</div>
                                                                    <div class="text-wrapper-35">Failure</div>
                                                                    <div class="text-wrapper-36">4.1-5.0</div>
                                                                </div>
                                                                <div class="group-10">
                                                                    <div class="overlap-group-3">
                                                                        <div class="text-wrapper-37">2.1-2.0</div>
                                                                        <div class="text-wrapper-38">Good</div>
                                                                    </div>
                                                                </div>
                                                                <div class="group-11">
                                                                    <div class="text-wrapper-39">INC</div>
                                                                    <div class="text-wrapper-40">Incomplete</div>
                                                                </div>
                                                                <div class="group-12">
                                                                    <div class="text-wrapper-41">DRP</div>
                                                                    <div class="text-wrapper-42">Dropped</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="group-13">
                                                        <div class="overlap-10">
                                                            <div class="group-14">
                                                                <div class="overlap-11">
                                                                    <div class="text-wrapper-43">OFFICE OF THE
                                                                        REGISTRAR</div>
                                                                    <div class="text-wrapper-44">OFFICIAL TRANSCRIPT OF
                                                                        RECORD</div>
                                                                </div>
                                                                <div class="header-line"></div>
                                                                <div class="that-line border-bottom-cus"></div>
                                                                <div class="group-15">
                                                                    <div class="group-16">
                                                                        <div class="overlap-group-4">
                                                                            <div class="text-wrapper-45">PERSONAL DATA
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="group-17">
                                                                        <div class="text-wrapper-46">Name:</div>
                                                                        <div class="overlap-12">
                                                                            <div class="text-wrapper-47">Date of Birth:
                                                                            </div>
                                                                            <div
                                                                                class="date-of-birth-line border-bottom-cus">
                                                                            </div>
                                                                        </div>
                                                                        <div class="overlap-13">
                                                                            <div class="text-wrapper-48">
                                                                                Parent/Guardian:</div>
                                                                            <div
                                                                                class="guardian-line border-bottom-cus">
                                                                            </div>
                                                                        </div>
                                                                        <div class="overlap-14">
                                                                            <div class="text-wrapper-49">Address:</div>
                                                                            <div class="img-2 border-bottom-cus"></div>
                                                                        </div>
                                                                        <div class="overlap-15">
                                                                            <div class="text-wrapper-50-1">Place of
                                                                                Birth:</div>
                                                                            <div
                                                                                class="place-of-birth-line border-bottom-cus">
                                                                            </div>
                                                                        </div>
                                                                        <div class="overlap-16">
                                                                            <div class="text-wrapper-49">Address:</div>
                                                                            <div class="img-2 border-bottom-cus"></div>
                                                                        </div>
                                                                        <div class="text-wrapper-51">Place:</div>
                                                                        <div class="overlap-17">
                                                                            <div class="text-wrapper-52">NCEE
                                                                                Percentile Rank:</div>
                                                                            <div
                                                                                class="percentile-line border-bottom-cus">
                                                                            </div>
                                                                        </div>
                                                                        <div class="overlap-18">
                                                                            <div class="text-wrapper-53">Date Taken:
                                                                            </div>
                                                                            <div
                                                                                class="date-taken-line border-bottom-cus">
                                                                            </div>
                                                                        </div>
                                                                        <div class="name-line border-bottom-cus"></div>
                                                                        <div class="place-line border-bottom-cus">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="group-18">
                                                                    <div class="overlap-19">
                                                                        <div class="group-19">
                                                                            <div class="overlap-group-5">
                                                                                <div class="rectangle-5"></div>
                                                                                <div class="text-wrapper-54">
                                                                                    PRELIMINARY EDUCATION</div>
                                                                                <div class="text-wrapper-55">STATE OF
                                                                                    ADMISSION</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="group-20">
                                                                            <div class="overlap-20">
                                                                                <div class="elementary-2">Elementary:
                                                                                </div>
                                                                                <div class="img-3 border-bottom-cus">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-wrapper-56">Remarks:</div>
                                                                            <div class="overlap-21">
                                                                                <div class="text-wrapper-57">Course:
                                                                                </div>
                                                                                <div
                                                                                    class="course-line border-bottom-cus">
                                                                                </div>
                                                                            </div>
                                                                            <div class="overlap-22">
                                                                                <div class="text-wrapper-50">Secondary:
                                                                                </div>
                                                                                <div class="img-3 border-bottom-cus">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-wrapper-58">Date of
                                                                                Admission:</div>
                                                                            <div class="overlap-23">
                                                                                <div class="text-wrapper-59">
                                                                                    Cedentials:</div>
                                                                                <div
                                                                                    class="credentials-line border-bottom-cus">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="date-of-admission-2 border-bottom-cus">
                                                                            </div>
                                                                            <div
                                                                                class="remarks-line border-bottom-cus">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="state-of-admission border-left-cus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-21">
                                            <div class="text-wrapper-60">Republic of the Philippines</div>
                                            <div class="text-wrapper-61">EASTERN VISAYAS STATE UNIVERSITY</div>
                                            <div class="ORMOC-CITY-CAMPUS">ORMOC CITY CAMPUS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-registrar_layout>

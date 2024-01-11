import { Controller } from "@hotwired/stimulus"

// Connects to data-controller="tor"
export default class extends Controller {
    connect() {
        this.sampleData = {
            full_name: "JOHN DOE",
            birth_date: "January 1, 2002",
            guardian: "LOREM IPSUM",
            ncee_percentile: 2,
            date_taken: 2,
            elementary: "THAT CENTRAL SCHOOL",
            secondary: "THAT NATIONAL HIGH SCHOOL",
            credentials: 2,
            remarks: 2,
            title_or_degree_conferred: "Bachelor of Science in Information Technology",
            major: 2,
            date_of_graduation: 2,
            board_of_regents: 2,
            capstone_title: 2,
            valid_for: "EVALUATION",
            date: "01/01/2023",
            or_number: "475212",
            record_in_charge: "JUDI G. ALICAYA",
            registrar: "JOANAH R. BENITEZ, MAEd",
            date_of_admission: "01/01/2002",
            address_1: "THAT STREET ROUND THE CORNER",
            place_of_birth: "THAT CITY",
            address_2: "THAT STREET ROUND THE CORNER",
            place: 2,
            course: "BSIT",
            sems: [
                {
                    semester: "2021-2022 FIRST SEMESTER",
                    subjects: [
                        {code: "GEN.ED 004", name: "Mathematics in the Modern World", final_rating: 1.5, re_exam: undefined, credits: 3},
                        {code: "IT 113", name: "Introduction to Computing", final_rating: 1, re_exam: undefined, credits: 3},
                        {code: "IT 134", name: "Computer Programming I", final_rating: 1.3, re_exam: undefined, credits: 3},
                        {code: "Math Enhance 1", name: "College Algebra & Trigonometry", final_rating: 1.4, re_exam: undefined, credits: 3},
                        {code: "NSTP 12", name: "CWTS, LTS, MTS(Naval or Air Force)", final_rating: 1.5, re_exam: undefined, credits: 3},
                        {code: "PATHFITT 112", name: "Movement Competency Training", final_rating: 1.6, re_exam: undefined, credits: 3},
                        {code: "FIL 002", name: "Pagbasa at Pagsusulat sa iba't ibang Disiplina", final_rating: 1.7, re_exam: undefined, credits: 3},
                        {code: "GEN.ED 003", name: "READINGS IN PHILIPPINE HISTORY", final_rating: 1.8, re_exam: undefined, credits: 3},
                    ]
                },
            ]
        }

        Object.keys(this.sampleData).forEach(key => {
            if(key != "sems")
            {
                document.getElementById(key).innerText = this.sampleData[key] || ""
            }else if(key == "sems")
            {
                const subject_box = document.getElementById("subject-box")
                subject_box.innerHTML = ""

                this.sampleData[key].forEach(sem => {
                    let sem_header = document.createElement("div")
                    sem_header.classList = "col-1-header"
                    sem_header.innerText = sem.semester

                    subject_box.appendChild(sem_header)

                    sem.subjects.forEach(subject => {
                        let subjects = document.createElement("div")
                        subjects.classList = "w-100-cus"

                        Object.keys(subject).forEach(attribute => {
                            let element_buffer = document.createElement("div")
                            if      (attribute == "code"){ element_buffer.classList = "col-1-cus" }
                            else if (attribute == "name"){ element_buffer.classList = "col-2-cus" }
                            else                         { element_buffer.classList = "col-3-cus" }

                            element_buffer.innerText = subject[attribute] || "-"
                            subjects.appendChild(element_buffer)
                        })


                        subject_box.appendChild(subjects)
                    })
                })
            }
        })

        window.scrollTo(0,0)
        html2canvas(document.getElementById('toPrint'), { height: 936.09, width: 612, scale: 2.5, dpi: 300 }).then(canvas => {
            document.getElementById('toPrint').innerHTML = ""

            const img = document.createElement('img')
            img.src = canvas.toDataURL('image/png')
            img.classList.add('img-fluid')
            document.getElementById('download-button').href = img.src
            document.getElementById('toPrint').append(img)
            document.getElementById("render-placeholder").remove()
        })
    }
}

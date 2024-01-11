import { Controller } from "@hotwired/stimulus"

// Connects to data-controller="tor"
export default class extends Controller {
    async connect() {
        const studentID = document.getElementById('studentID');
        let studentData = {};
        if(studentID){

            const response = await fetch("/fetchTorData?id=" + studentID.value );
            studentData = await response.json();
        }
        this.sampleData = studentData

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
